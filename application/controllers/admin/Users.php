<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CIF_Controller {

    public $layout = 'full';
    public $module = 'users';
    public $model = 'users_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function admins($offset = 0) {
        $this->{$this->model}->custom_select = 'users.*, usergroups.title as usergroup';
        $this->{$this->model}->joins = array(
            'usergroups' => array('usergroups.usergroup_id = users.usergroup_id', 'inner')
        );
        $count = $this->db
                        ->select("COUNT(*) AS count")
                        ->join('usergroups', 'usergroups.usergroup_id = users.usergroup_id', 'inner')
                        ->where('users.usergroup_id', '1')
                        ->get('users')
                        ->row()->count;

         //Pagination
        $this->load->library('pagination');
        config('pagination_limit', 10);
        $config['total_rows'] = $count;
        $config['base_url'] = site_url('admin/users/admins');
        $config['per_page'] = config('pagination_limit');
        if ($this->uri->segment(2))
            $this->db->offset = $offset;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->db->limit($config['per_page'], $offset);
        $this->db->order_by('user_id', 'DESC');
        $data['items'] = $this->db
                        ->join('usergroups', 'usergroups.usergroup_id = users.usergroup_id', 'inner')
                        ->select('users.*, usergroups.title as usergroup')
                        ->where('users.usergroup_id', '1')
                        ->get('users')->result();
        $this->load->view($this->module . '/index', $data);
    }

    public function mormal_users($offset = 0) {
        $this->{$this->model}->custom_select = 'users.*, usergroups.title as usergroup';
        $this->{$this->model}->joins = array(
            'usergroups' => array('usergroups.usergroup_id = users.usergroup_id', 'inner')
        );
        $count = $this->db
                        ->select("COUNT(*) AS count")
                        ->join('usergroups', 'usergroups.usergroup_id = users.usergroup_id', 'inner')
                        ->where('users.usergroup_id', '2')
                        ->get('users')
                        ->row()->count;

         //Pagination
        $this->load->library('pagination');
        config('pagination_limit', 10);
        $config['total_rows'] = $count;
        $config['base_url'] = site_url('admin/users/mormal_users');
        $config['per_page'] = config('pagination_limit');
        if ($this->uri->segment(2))
            $this->db->offset = $offset;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->db->limit($config['per_page'], $offset);
        $this->db->order_by('user_id', 'DESC');
        $data['items'] = $this->db
                        ->join('usergroups', 'usergroups.usergroup_id = users.usergroup_id', 'inner')
                        ->select('users.*, usergroups.title as usergroup')
                        ->where('users.usergroup_id', '2')
                        ->get('users')->result();
        $this->load->view($this->module . '/index', $data);
    }

    public function manage($id = NULL) {
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
        $this->form_validation->set_rules('username', 'lang:global_Username', 'trim|required');
        $this->form_validation->set_rules("email", 'lang:global_Email', "trim|required|valid_email");
        $this->form_validation->set_rules('firstname', 'lang:global_First_Name', 'trim');
        $this->form_validation->set_rules('lastname', 'lang:global_Last_Name', 'trim');
        $this->form_validation->set_rules('gender', 'lang:global_Gender', 'trim');
        $this->form_validation->set_rules('country_id', 'lang:global_Country', 'trim');
        $this->form_validation->set_rules('description', 'lang:global_Description', 'trim');
        $this->form_validation->set_rules('status', 'lang:global_status', 'trim');
        $this->form_validation->set_rules('usergroup_id', 'lang:global_usergroup', 'trim|required');
        if ($id)
            $this->form_validation->set_rules('password', 'lang:global_Password', 'trim');
        else
            $this->form_validation->set_rules('password', 'lang:global_Password', 'trim|required');
        $this->form_validation->set_rules("image", 'lang:global_image', "trim|callback_file[$id]");

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->firstname = $this->input->post('firstname');
            $this->{$this->model}->lastname = $this->input->post('lastname');
            $this->{$this->model}->username = $this->input->post('username');
            $this->{$this->model}->gender = $this->input->post('gender');
            $this->{$this->model}->country_id = $this->input->post('country_id');
            $this->{$this->model}->status = $this->input->post('status');
            $this->users_model->email = $this->input->post('email');
            $this->users_model->usergroup_id = $this->input->post('usergroup_id');
            if (strlen($this->input->post('password')) > 0)
                $this->{$this->model}->password = md5($this->input->post('password'));

            $this->{$this->model}->save();
           redirect('admin/users/admins');
        }
    }

    public function delete($id = null) {
        if (!$id)
            show_404();
        $this->{$this->model}->{$this->_primary_key} = $id;
        $data['item'] = $this->{$this->model}->get();
        if (!$data['item'])
            show_404();
        $this->{$this->model}->delete();
        redirect('admin/users/admins');
    }

    public function file($var, $id) {
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

}
