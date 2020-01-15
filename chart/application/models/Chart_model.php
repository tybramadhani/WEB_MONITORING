<?php
class Chart_model extends CI_Model{

  

  //get data from database
  function get_data($a){
      $this->db->select('jam,id_sensor,value_1,value_2,value_3,value_4');
      $this->db->where('id_sensor','200'.$a);
      $result = $this->db->get('account');
      return $result;
  }
  function perulangan(){
    $this->db->select('id_sensor');
    $result = $this->db->get('sensor');    
      return $result->num_rows();    
  }

}
