<?php

class Dashboard extends CIF_Controller {

    public $layout = 'full';
    public $module = 'dashboard';
    public $model = 'users';

    public function index() {
        $this->permission();
        $data['admins'] = $this->db->where('usergroup_id', '1')->get('users')->num_rows();
        $data['normal_users'] = $this->db->where('usergroup_id', '2')->get('users')->num_rows();
        $data['categories'] = $this->db->get('categories')->num_rows();
        $data['faqs'] = $this->db->get('faqs')->num_rows();
        $data['open_tickets'] = $this->db->where('status', 'buka')->get('pengaduan')->num_rows();
        $data['close_tickets'] = $this->db->where('status', 'selesai')->get('pengaduan')->num_rows();
        $data['tickets'] = $this->db->where('parent_id', '0')->get('pengaduan')->num_rows();
        $data['visitors'] = config('visitors');

        $data['tickets_open'] = $this->db
                        ->join('users', 'users.user_id = pengaduan.user_id', 'inner')
                        ->select('pengaduan.*, users.username as username')
                        ->where('parent_id', '0')
                        ->where('pengaduan.status', 'buka')
                        ->order_by('last_reply', 'DESC')
                        ->get('pengaduan')->result();

        $this->load->view($this->module, $data);
    }

}
