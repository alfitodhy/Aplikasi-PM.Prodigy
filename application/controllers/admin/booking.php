<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class booking extends CIF_Controller
{

    public $layout = 'full';
    public $module = 'booking';
    public $model = 'Faqs_model';

    public function __construct()
    {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function index($offset = 0)
    {

        $this->load->model('m_booking');

        $data = array(
            'book' => $this->m_booking->get_booking()->result()
        );
        //load view
        $this->load->view($this->module . '/index', $data);
    }

    public function manage($id = FALSE)
    {
        $data = array();

        if ($id) {
            $this->{$this->model}->{$this->_primary_key} = $id;
            $data['item'] = $this->{$this->model}->get();
            if (!$data['item'])
                show_404();
        } else {
            $data['item'] = new Std();
            $this->{$this->model}->created = date('Y-m-d H:i:s');
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('question', 'lang:global_Question', 'trim|required');
        $this->form_validation->set_rules('answer', 'lang:global_Answer', 'trim|required');
        $this->form_validation->set_rules('category_id', 'lang:global_Department', 'trim');
        $this->form_validation->set_rules('status', 'lang:status', 'trim|required');


        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);
        else {
            $this->{$this->model}->question = $this->input->post('question');
            $this->{$this->model}->answer = $this->input->post('answer', false);
            $this->{$this->model}->category_id = $this->input->post('category_id');
            $this->{$this->model}->status = $this->input->post('status');
            $this->{$this->model}->save();
            redirect('admin/' . $this->module);
        }
    }

    public function delete($id = false)
    {
        if (!$id)
            show_404();
        $this->{$this->model}->{$this->_primary_key} = $id;
        $data['item'] = $this->{$this->model}->get();
        if (!$data['item'])
            show_404();
        $this->{$this->model}->delete();
        redirect('admin/' . $this->module);
    }



}
