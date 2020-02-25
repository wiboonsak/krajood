<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class User_model extends CI_Model
 {
      function can_login($username, $password)
      {
           $password = md5($password);
           $this->db->where('user_name', $username);
           $this->db->where('password', $password);
           $this->db->where('data_status', '1');
           $query = $this->db->get('tbl_user_data');

           //SELECT * FROM users WHERE username = '$username' AND password = '$password'
           if($query->num_rows() > 0)
           {
            foreach ($query->result() as $row);
            $userdata = array(
                 'user_id'         => $row->id,
                 'name'              => $row->name_sname,
                 'user_type'     => $row->user_type
                 );

           $this->session->set_userdata($userdata);
           //-----------last update----------//
           date_default_timezone_set('Asia/Bangkok');
           $now = date("Y-m-d H:i:s");
           $data = array(
               'last_login' => $now
            );
          $this->db->where('id', $row->id);
          $this->db->update('tbl_user_data', $data);
			   return true;
           }
           else
           {
                return false;
           }
      }
      //---------------------------------
      public function get_user_id_from_username($username) {
        		$this->db->select('id');
        		$this->db->from('users');
        		$this->db->where('username', $username);
        		return $this->db->get()->row('id');
	   }
//      //-------------------------------
//       function getMenuList($menu_type=NULL,$menu_cate=NULL){
//  
//    $userID = $this->session->userdata('user_id');    
//     $datauser = $this->datauser($userID);
//     foreach ($datauser->result() AS $data){}
//     if($data->position_level == 4){
//     $sql = "SELECT * FROM  tbl_menu_data WHERE menu_type = '".$menu_type."' AND menu_cate = '".$menu_cate."'ORDER BY menu_number ASC ";
//     }else{
//    $sql = "SELECT m.menu_name , m.menu_type , m.menu_number , m.menu_cate , m.menu_url , m.id FROM tbl_permission_data AS p LEFT JOIN tbl_menu_data AS m ON p.menu_id = m.id WHERE p.user_id = '".$userID."' AND p.permission IN ('2','3') AND m.menu_type = '".$menu_type."' AND m.menu_cate = '".$menu_cate."' ORDER BY m.menu_number ASC ";
//     }
//          $query=$this->db->query($sql);
//          return $query;
//  }
  //-------------------------------------------
     function datauser($userID=NULL){
         $sql = "SELECT * FROM tbl_user_data WHERE id = '".$userID."'";
          $query=$this->db->query($sql);
          return $query;
     }
  //-------------------------------------------
     function register($name=NULL,$tel=NULL,$Line=NULL,$username=NULL,$password=NULL){
          $today = date("Y-m-d H:i:s");
          $data = array('first_name' => $name,
                'cus_email' => $username,
                'cus_password' => md5($password),
                'cus_tel' => $tel,
                'lineid' => $Line,
                'facebook_id' => '-',
                'date_add' => $today);
            if ($this->db->insert('tbl_customers', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = '0';
            }
          return $pass;
     }
     //-------------------------------------
    function get_member($idcus){
$sql = "SELECT * FROM `tbl_customers` WHERE id = $idcus";
$datare = $this->db->query($sql);


           return $datare;
}
function login($username, $password)
      {
           $password = md5($password);
           $this->db->where('cus_email', $username);
           $this->db->where('cus_password', $password);
           $query = $this->db->get('tbl_customers');

           //SELECT * FROM users WHERE username = '$username' AND password = '$password'
           if($query->num_rows() > 0)
           {
            foreach ($query->result() as $row){}
            $userdata = array(
                 'user_idfontend'         => $row->id,
                 'user_namefontend'       => $row->first_name,
                'user_type'       => 'm'
                 );

           $this->session->set_userdata($userdata);
           //-----------last update----------//
           date_default_timezone_set('Asia/Bangkok');
           $now = date("Y-m-d H:i:s");
           $data = array(
               'last_login' => $now
            );
          $this->db->where('id', $row->id);
          $this->db->update('tbl_customers', $data);
		$pass = '1';	   
           }
           else
           {
                $pass = '0';
           }
           return $pass;
      }
      //-------------------------------------------
     function getfacrbook($idfb=NULL){
         $sql = "SELECT * FROM tbl_customers WHERE facebook_id = '".$idfb."'";
          $query=$this->db->query($sql);
          return $query;
     }
     //-------------------------------------------
     function addfb($idfb=NULL,$fristnamefb=NULL,$lastnamefb=NULL,$Emailfb=NULL){
          $today = date("Y-m-d H:i:s");
          $data = array('first_name' => $fristnamefb,
                'last_name' => $lastnamefb,
                'cus_email' => $Emailfb,
                'facebook_id' => $idfb,
                'date_add' => $today);
            if ($this->db->insert('tbl_customers', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = '0';
            }
          return $pass;
     }
  
 }
