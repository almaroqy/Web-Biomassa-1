<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH  . 'core/Api_Controller.php';

class Keramba extends Api_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Keramba_model');
    }

    private function responseError($e)
    {
        $data['status'] = false;

        $data['message'] = 'Error code: ' .$e->getMessage();

        $data['data'] = [];

        $this->response($data, self::HTTP_BAD_REQUEST);
    }

    public function index_get()
    {

        $user_id = $this->get('user_id');

        if ($user_id === null) {
            $data['status'] = false;

            $data['message'] = 'please provide an user id';

            $data['data'] = [];

            $this->response($data, self::HTTP_BAD_REQUEST);
        }


        $keramba_id = $this->get('keramba_id');

        if ($keramba_id === null) {
            $keramba = $this->Keramba_model->getAllKeramba();

            if ($keramba) {

                $data['status'] = true;

                $data['message'] = '';

                $data['data'] = $keramba;
            } else {
                $data['status'] = true;

                $data['message'] = '';

                $data['data'] = [];
            }

            $this->response($data, self::HTTP_OK);
        } else {
            $keramba = $this->Keramba_model->getAllKeramba($keramba_id);

            if ($keramba) {

                $data['status'] = true;

                $data['message'] = '';

                $data['data'] = $keramba;

                $this->response($data, self::HTTP_OK);
            } else {
                $data['status'] = false;

                $data['message'] = 'keramba_id not found';

                $data['data'] = [];

                $this->response($data, self::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_delete()
    {
        $keramba_id = $this->delete('keramba_id');

        $user_id = $this->delete('user_id');

        if ($user_id === null) {
            $data['status'] = false;

            $data['message'] = 'please provide an user id';

            $data['data'] = [];

            $this->response($data, self::HTTP_BAD_REQUEST);
        }

        if ($keramba_id === null) {

            $data['status'] = false;

            $data['message'] = 'provide a keramba_id!';

            $data['data'] = [];

            $this->response($data, self::HTTP_BAD_REQUEST);
        }

        if ($this->Keramba_model->deleteKeramba($keramba_id) > 0) {

            $data['status'] = true;

            $data['message'] = 'deleted';

            $data['data'] = $keramba_id;

            $this->response($data, self::HTTP_OK);
        } else {
            $data['status'] = false;

            $data['message'] = 'keramba_id not found';

            $data['data'] = [];

            $this->response($data, self::HTTP_BAD_REQUEST);
        }
    }

    public function index_post()
    {
        $input['nama'] = $this->post('nama');

        $input['ukuran'] = $this->post('ukuran');

        $input['tanggal_install'] = $this->post('tanggal_install');

        $input['user_id'] = $this->post('user_id');

        try {

            if ($this->Keramba_model->createKeramba($input) > 0) {

                $data['status'] = true;

                $data['message'] = 'new keramba has been created';

                $data['data'] = [];

                $this->response($data, self::HTTP_CREATED);
            } else {
                $data['status'] = false;

                $data['message'] = 'failed to create new data';

                $data['data'] = [];

                $this->response($data, self::HTTP_BAD_REQUEST);
            }
        } catch (Exception $e) {
            $this->responseError($e);
        }
    }

    public function index_put()
    {
        $keramba_id = $this->put('keramba_id');

        $input['nama'] = $this->put('nama');

        $input['ukuran'] = $this->put('ukuran');

        $input['tanggal_install'] = $this->put('tanggal_install');

        $input['user_id'] = $this->put('user_id');

        try {

            $res = $this->Keramba_model->updateKeramba($input, $keramba_id);

            if ($res > 0) {
                $data['status'] = true;

                $data['message'] = 'keramba has been modified';

                $data['data'] = [];

                $this->response($data, self::HTTP_OK);
            } else {
                $data['status'] = false;

                $data['message'] = 'failed to update data';

                $data['data'] = [];

                $this->response($data, self::HTTP_NOT_MODIFIED);
            }
        } catch (Exception $e) {
            $this->responseError($e);
        }
    }
}
