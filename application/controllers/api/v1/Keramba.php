<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class Keramba extends RestController
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Keramba_model');
    }
    public function index_get()
    {
        $data = $this->Keramba_model->getAllKeramba();
        var_dump($data);
    }
}