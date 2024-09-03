<?php

class Page extends CIF_Controller {

    public $layout = 'full';
    public $module = 'halaman';
    public $model = 'Halaman_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index($permalink = null) {
        $data = array();
        if (!$permalink)
            show_404();

        if (!$this->db
                        ->where('permalink', urldecode($permalink))
                        ->get('halaman')->row())
            show_404();
        $this->{$this->model}->permalink = urldecode($permalink);
        $data['item'] = $this->{$this->model}->get()[0];
        if (!$data['item'])
            show_404();

        $this->load->view($this->module, $data);
    }

}
