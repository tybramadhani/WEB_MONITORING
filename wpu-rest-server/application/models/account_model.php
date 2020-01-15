<?php

class account_model extends CI_Model
{
    public function getAccount($id = null)
    {
        if ($id === null) {
            return $this->db->get('account')->result_array();
        } else {
            return $this->db->get_where('account',['id' => $id])->result_array();
        }
        
    }

    public function deleteAccount($id)
    {
        $this->db->delete('account',['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createAccount($data)
    {
        $this->db->insert('account', $data);
        return $this->db->affected_rows();
    }

    public function updateAccount($data, $id)
    {
        $this->db->update('account',$data ,['id'=> $id]);
        return $this->db->affected_rows();
    }
}