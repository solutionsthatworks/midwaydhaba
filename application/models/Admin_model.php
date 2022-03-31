<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	public function insert($table_name = '', $data = '')
    {
        $query = $this->db->insert($table_name, $data);
        if ($query) return $this->db->insert_id();
        else return FALSE;
    }

    public function auth_check($data)
    {
        $query = $this->db->get_where('tbl_register_user', $data);
       // echo $this->db->last_query();die;
       // echo(md5($query));
		if($query){  
		 return $query->row();
        }
        return false;
    }

    public function auth_check_admin($data)
    {
        $query = $this->db->get_where('admin', $data);
       // echo $this->db->last_query();die;
        if($query){   
         return $query->row();
        }
        return false;
    }

    public function checkAlreadyExist($table = '', $email ='') {
        $condition = "email = '".$email."'";
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($condition);
        $query = $this->db->get();

        if ($query->num_rows() >= 1) {
            return true;
        } else {
            return false;
        }
    }

    // this function for search
    public function get_row($table_name = '', $id_array = '', $columns = array())
    {
        if (!empty($columns)):
            $all_columns = implode(",", $columns);
            $this->db->select($all_columns);
        endif;
        if (!empty($id_array)):
            foreach ($id_array as $key => $value) {
                $this->db->where($key, $value);
            }
        endif;
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) return $query->row();
        else return FALSE;
    }

    // fetch all records
    public function get_result($table_name = '', $id_array = '', $columns = array(),$order_by = array())
    {
        if(!empty($columns)):
            $all_columns = implode(",", $columns);
            $this->db->select($all_columns);
        endif;
        if(!empty($id_array)):
            foreach ($id_array as $key => $value) {
                $this->db->where($key, $value);
            }
        endif;
        if (!empty($order_by)):
            $this->db->order_by($order_by[0], $order_by[1]);
        endif;
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) return $query->result();
        else return FALSE;
    }

    public function update($table_name = '', $data = '', $id_array = '')
    {
        if(!empty($id_array)):
            foreach($id_array as $key => $value){
                $this->db->where($key, $value);
            }
        endif;
        return $this->db->update($table_name, $data);
    }

    public function delete($table_name = '', $id_array = ''){
        return $this->db->delete($table_name, $id_array);
    }

}

?>