<?php

class Dashboard extends CIF_Controller {

    public $layout = 'full';
    public $module = 'dashboard';
    public $model = 'Users_model';

    public function __construct() {
        parent::__construct();
        if (!session('user_id'))
            redirect("login");
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index() {
        $data['item'] = $this->db
                        ->where('user_id', session('user_id'))
                        ->select('users.*, countries.nicename as country')
                        ->join('countries', 'users.country_id = countries.country_id', 'left')
                        ->get('users')->row();
        $this->load->view('dashboard/' . __FUNCTION__, $data);
    }

    public function settings() {    

        $data['countries'] = dd2menu('countries', ['country_id' => 'nicename']);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'lang:global_First_Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'lang:global_Last_Name', 'trim|required');
        $this->form_validation->set_rules('gender', 'lamg:global_Gender', 'trim|required');
        $this->form_validation->set_rules('username', 'lang:global_Username', 'trim|required');
//        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'lang:global_Password', 'trim');
        $this->form_validation->set_rules('country_id', 'lang:global_Country', 'trim|required');
        $this->form_validation->set_rules("image", 'lang:global_image', "trim|callback_image[0]");

        $data['success'] = false;

        if ($this->form_validation->run() == TRUE) {
            $this->{$this->model}->user_id = session('user_id');
            $this->{$this->model}->firstname = $this->input->post('firstname');
            $this->{$this->model}->lastname = $this->input->post('lastname');
            $this->{$this->model}->username = $this->input->post('username');
            $this->{$this->model}->gender = $this->input->post('gender');
//            $this->{$this->model}->email = $this->input->post('email');
            $this->{$this->model}->country_id = $this->input->post('country_id');



            if ($this->input->post('password'))
                $this->{$this->model}->password = md5($this->input->post('password'));
            $this->{$this->model}->save();
            $data['success'] = true;
        }
        $data['item'] = $this->db
                        ->where('user_id', session('user_id'))
                        ->select('users.*, countries.nicename as country')
                        ->join('countries', 'users.country_id = countries.country_id', 'left')
                        ->get('users')->row();
        $this->load->view('dashboard/' . __FUNCTION__, $data);
    }

    public function image($var) {
        $config['upload_path'] = './cdn/users/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            
        } else {
            $data = $this->upload->data();
            if ($data['file_name'])
                $this->{$this->model}->image = $data['file_name'];;
        }
        return true;
    }

    public function tickets() {

        $this->data['items'] = $this->db
                ->join('categories', 'categories.category_id = pengaduan.category_id')
                ->select('pengaduan.*, categories.title as category')
                ->order_by('pengaduan.created', 'desc')
                ->where('pengaduan.user_id', session('user_id'))
                ->where('parent_id', '0')
                ->order_by('last_reply', 'DESC')
                ->get('pengaduan')
                ->result();
        $this->load->view('dashboard/' . __FUNCTION__, $this->data);
    }

    public function ticket($id = false) {
        $this->load->library('form_validation');
        $this->data['items'] = [];

        if ($id) {
            $this->{$this->model}->{$this->_primary_key} = $id;
            $this->data['item'] = $this->db
                    ->join('users', 'users.user_id = pengaduan.user_id')
                    ->select('pengaduan.*, users.image, users.email, users.username, users.user_id')
                    ->where('pengaduan_id', $id)
                    ->where('users.user_id', session('user_id'))
                    ->get('pengaduan')
                    ->row();
            if (!$this->data['item'])
                show_404();
            $this->data['items'] = array_merge($this->db
                            ->select('pengaduan.*, users.username, users.email, users.image')
                            ->order_by('pengaduan.created', 'asc')
                            ->where('pengaduan.parent_id', '0')
                            ->where('pengaduan.pengaduan_id', $id)
                    
                            ->join('users', 'users.user_id = pengaduan.user_id', 'left')
                            ->get('pengaduan')
                            ->result(), $this->db
                            ->select('pengaduan.*, users.username, users.email, users.image')
                            ->order_by('pengaduan.created', 'asc')
                            ->where('pengaduan.parent_id', $id)
                            ->join('users', 'users.user_id = pengaduan.user_id', 'left')
                            ->get('pengaduan')
                            ->result());
            
        }


        if (!$id)
            $this->form_validation->set_rules('subject', 'lang:global_Subject', 'trim|required');

        $this->form_validation->set_rules('message', 'lang:global_Message', 'trim|required');
        $this->form_validation->set_rules('attachment', 'lang:global_Attachment', 'trim|callback_attachment[$id]');
        if ($this->form_validation->run() == true) {
            $this->db->where('pengaduan_id', $id)->update('pengaduan', [
                'status' => 'buka',
            ]);
            $data = [
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'user_id' => session('user_id'),
                'created' => date('Y-m-d H:i:s'),
                'last_reply' => date('Y-m-d H:i:s'),
                'category_id' => $this->input->post('category_id'),
                'attachment' => $this->attachment,
            ];
            if ($id)
                $data['parent_id'] = $id;

            if (!$id)
                $data['status'] = 'buka';

            $this->data['success'] = true;
            $this->db->insert('pengaduan', $data);

            if ($id) {
                $ticket_status = lang("global_new_Reply");
            } else {
                $ticket_status = lang("global_new_Ticket");
            }
            if (!$id)
                $id = $this->db->insert_id();


            $this->load->library('email');
            $this->email->from(config('webmaster_email'), config('title'));
            $this->email->to(config('support_email'));
            $this->email->subject($ticket_status . "#" . $id);
            $this->email->message($this->load->view('dashboard/email', ['message' => lang('global_there_is_a') . " $ticket_status."
                        . "<br />"
                        . lang('global_you_can_check_the_ticket_any_time_from ') . "<a href='" . site_url('admin/pengaduan/manage/' . $id) . "'>" . lang("global_here") . "</a>."], true));
            $this->email->send();
            $this->email->clear();


            redirect('dashboard/ticket/' . $id);
        }
        else {
            $this->load->view('dashboard/' . __FUNCTION__, $this->data);
        }
    }

    public function attachment($id) {

        $config['upload_path'] = './cdn/pengaduan/';
        $config['allowed_types'] = 'jpg|png|jpeg|zip|pdf';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('attachment')) {
            
        } else {
            $data = $this->upload->data();
            if ($data['file_name'])
                $this->attachment = $data['file_name'];
        }
        return true;
    }

    public function important($id) {
        $this->db->where('pengaduan_id', $id)->update('pengaduan', [
            'important' => '1'
        ]);
        redirect('dashboard/tickets');
    }

    public function un_important($id) {
        $this->db->where('pengaduan_id', $id)->update('pengaduan', [
            'important' => '0'
        ]);
        redirect('dashboard/tickets');
    }

}
