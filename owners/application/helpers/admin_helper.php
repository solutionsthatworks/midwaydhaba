<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function IsNullOrEmptyString($string){
    return (!isset($string) || trim($string)==='');
}

/*
/* shortDescription : this function is responsible to get time ago
*/


//get userDetails
 function get_user_name($user_id){

    $ci = & get_instance();
    $sql = $ci->db->query("select * from tbl_register_user where id = '".$user_id."'");
    //$query = $this->db->query($sql);
    $result = $sql->row_array();
    if(isset($result) && !empty($result)){
        return $result;
    }else{
        return false;
    }
}

//get userHotelAssign
 function get_user_hotelAssign($user_id){

    $ci = & get_instance();
    $sql = $ci->db->query("select * from tbl_hotel_assign where is_active=1 AND user_id = '".$user_id."'");
    //$query = $this->db->query($sql);
    $result = $sql->row_array();
    if(isset($result) && !empty($result)){
        return $result;
    }else{
        return false;
    }
}
