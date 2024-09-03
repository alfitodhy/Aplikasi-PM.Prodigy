<?php

class Configuration {
    
    private $instance;
    public $style_config;
    
    public function __construct() {
        $this->instance = &get_instance();
        $this->pengaturan();
    }
    private function pengaturan() {
        foreach($this->instance->db->get('pengaturan')->result_array() as $item)
        {
            $this->instance->config->set_item($item['key'], $item['value']);
        }
    }
    
    
    
    
}
