<?php

class Home extends CIF_Controller
{

    public $layout = 'full';
    public $module = 'home';
    public $model = 'Faqs_model';

    public function __construct()
    {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index()
    {
        $data['categories'] = $this->db
            ->get('categories')
            ->result();

        $data['faqs'] = $this->db
            ->order_by('faq_id', 'desc')
            ->where('faqs.status !=', '1')
            ->limit('16')
            ->get('faqs')
            ->result();


        $this->load->view($this->module, $data);
    }

    function about()
    {
        $this->load->view('about');
    }

    function community()
    {
        $this->load->view('community');
    }

    function training()
    {
        $this->load->view('training');
    }

    function payment()
    {
        $this->load->view('payment');
    }


    public function search($offset = 0)
    {
        $count = $this->db
            ->select("COUNT(*) AS count")
            ->like('question', $this->input->get('question'), 'both')
            ->where('faqs.status !=', '1')
            ->get('faqs')
            ->row()->count;
        $this->data['count'] = $count;
        // PAGINATION
        config('pagination_limit', 12);
        $this->load->library('pagination');
        $config['base_url'] = site_url('home/search/');
        $config['total_rows'] = $count;
        $config['per_page'] = config('pagination_limit');
        $config['reuse_query_string'] = TRUE;
        if ($this->uri->segment(2))
            $this->db->offset = $offset;
        $this->pagination->initialize($config);
        $this->data['pagination'] = $this->pagination->create_links();
        $this->db->limit($config['per_page'], $offset);
        $this->data['items'] = $this->db
            ->like('question', $this->input->get('question'), 'both')
            ->where('faqs.status !=', '1')
            ->get('faqs')
            ->result();
        $this->load->view('search', $this->data);
    }

    public function contact()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'lang:global_Full_Name', 'trim|required');
        $this->form_validation->set_rules('email', 'lang:global_Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'lang:global_Subject', 'trim|required');
        $this->form_validation->set_rules('message', 'lang:global_Message', 'trim|required');
        $data['success'] = false;
        if ($this->form_validation->run() === TRUE) {
            @mail(config('webmaster_email'), config('title'), ""
                . "Full Name: $_POST[name]\n"
                . "Email: $_POST[email]\n"
                . "Subject: $_POST[subject]\n"
                . "Message: $_POST[message]\n"
                . "");
            $data['success'] = true;
        }
        $this->load->view('contact', $data);
    }
}
