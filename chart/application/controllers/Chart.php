<?php
class Chart extends CI_Controller{
    function __construct(){
      parent::__construct();
      //load chart_model from model
      $this->load->model('chart_model');
    }

    function index(){      
      $for = $this->chart_model->perulangan();
      for($a=1;$a<=$for;$a++){
      $data= $this->chart_model->get_data($a)->result();
      $x['data'][$a] = json_encode($data);
    }
      $perulangan['forsensor'] = json_encode($for);
      $this->load->view('chart_view',$x+$perulangan);
    }
}
