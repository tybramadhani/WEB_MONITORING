<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class account extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account_model','account');

        $this->methods['index_get']['limit'] = 5;
    }

public function index_get()
{
    $id = $this->get('id');
    if ($id === null){
        $account = $this->account->getAccount();
} else {
    $account = $this->account->getAccount($id);
}

    if ($account){
        $this->response([
            'status' => true,
            'data' => $account
        ], REST_Controller::HTTP_OK);
    } else {
        $this->response([
            'status' => false,
            'message' => 'Id Tidak Di Temukan'
        ], REST_Controller::HTTP_NOT_FOUND);
    }


    }
    
    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null){
            $this->response([
                'status' => false,
                'message' => 'Id Tolong Di isi'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ( $this->account->deleteAccount($id) > 0 ) {
                //ok
                $this->response([
                    'status' => true,
                    //'id' => $id,
                   'message' => 'Terhapus.'

                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // id tidak di temukan
                $this->response([
                    'status' => false,
                    'message' => 'Id tidak ada'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    public function index_post()
    {
        $data = [
            'id_sensor' => $this->post('id_sensor'),
            'jam' => $this->post('jam'),
            'value_1' => $this->post('value_1'),
            'value_2' => $this->post('value_2'),
            'value_3' => $this->post('value_3'),
            'value_4' => $this->post('value_4')
        ];
        if( $this->account->createAccount($data) > 0) {
            $this->response([
                'status' => true,
                 'message' => 'new data has been created'

            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'gagal membuat data !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'id_sensor' => $this->put('id_sensor'),           
            'jam' => $this->put('jam'),
            'value_1' => $this->put('value_1'),
            'value_2' => $this->put('value_2'),
            'value_3' => $this->put('value_3'),
            'value_4' => $this->put('value_4')
        ];
        if( $this->account->updateAccount($data, $id) > 0) {
            $this->response([
                'status' => true,
                 'message' => 'data account has been updated.'

            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => false,
                'message' => 'gagaL MENGUPDATE DATA !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
