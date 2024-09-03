<?php

// script, homepage meta tags
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengaturan extends CIF_Controller {

    public $layout = 'full';
    public $module = "pengaturan";
    public $image_file = null;

    public function __construct() {
        parent::__construct();
        $this->load->model('pengaturan_model');
        $this->output->enable_profiler(FALSE);
        $this->permission();
    }

    public function index() {
        $this->load->library("form_validation");
        $config['upload_path'] = './cdn/about/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
        $this->load->library('upload', $config);
        $data['item'] = new stdClass();
        foreach ($this->pengaturan_model->get() as $pengaturan) {
            $data['item']->{ $pengaturan->key } = $pengaturan->value;
            $this->form_validation->set_rules('pengaturan[' . $pengaturan->key . ']', 'lang:pengaturan_' . $pengaturan_->key, "trim");
        }
        $this->form_validation->set_rules('logo', 'lang:pengaturan_logo', "callback_logo");
        $this->form_validation->set_rules('favicon', 'lang:pengaturan_favicon', "callback_favicon");

        if ($this->form_validation->run() == false) {
            $this->load->view("pengaturan/manage", $data);
        } else {
            foreach ($this->input->post('pengaturan') as $key => $value) {
                $this->pengaturan_model->key = $key;
                $this->pengaturan_model->value = $value;
                $this->pengaturan_model->save();
            }
            redirect("admin/pengaturan");
        }
    }

    public function logo($var) {

        if ($this->upload->do_upload('logo')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->pengaturan_model->key = 'logo';
                $this->pengaturan_model->value = $data['file_name'];
                $this->pengaturan_model->save();
            }
        }
        return true;
    }

    public function favicon($var) {

        if ($this->upload->do_upload('favicon')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->pengaturan_model->key = 'favicon';
                $this->pengaturan_model->value = $data['file_name'];
                $this->pengaturan_model->save();
            }
        }
        return true;
    }

}
