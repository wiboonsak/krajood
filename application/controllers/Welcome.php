<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('User_model');
        if($this->session->userdata('weblang')==''){
			 $this->session->set_userdata('weblang', 'en');
		 }
    }
	
	
	//---------------------------------
	public function index()
	{
           $show_onweb = '1';
           $status = '1';$limit = '1';
           $data['getCategory1'] = $this->Product_model->getCategory($status,$limit);
           $data['getproductdetail'] = $this->Product_model->getproductdetail('6');
           $data['getNewsDetail1'] = $this->Product_model->getNewsDetail1('1','','-100','-100');
           
           $data['SlideList']=$this->Product_model->slide_list($show_onweb);
           $this->load->view('fontend/index',$data);
	}
	//---------------------------------
	public function aboutus()
	{
           $this->load->view('fontend/aboutus');
	}
	//---------------------------------
	public function contact()
	{
           $this->load->view('fontend/contact');
	}
	function get_fac(){
   $fid = $this->input->post("fid");
   $name = $this->input->post("name");
   $last = $this->input->post("last");
   $email = $this->input->post("email");
   $idcus = "";
   $cus_id = $this->Product_model->chk_facb_ty($fid);
   if($cus_id<1){
      $cus_id = $this->Product_model->add_cus_face($fid,$name,$last,$email);
   }
   $result = $this->Product_model->get_member_fac($cus_id);
        $fname = "";
        $lname = "";
        foreach ($result as  $value) {
           $fname = $value->first_name;
           $lname = $value->last_name;
           $idcus = $value->id;
        }
           $data = array(
                    'user_namefontend' => $fname,
                    'user_lastnamefontend' => $lname,
                    'user_type' => 'f',
                    'user_idfontend' => $idcus
                    );
             $this->session->set_userdata($data);
        echo $cus_id;
}
 //---------------------------------
	public function register()
	{
           $name = $this->input->post("name");
           $tel = $this->input->post("tel");
           $Line = $this->input->post("Line");
           $username = $this->input->post("username");
           $password = $this->input->post("password");
           $result = $this->User_model->register($name,$tel,$Line,$username,$password);
           if($result>0){
               $get_member = $this->User_model->get_member($result);
                foreach ($get_member->result() as $row){}
            $userdata1 = array(
                 'user_idfontend'         => $row->id,
                 'user_namefontend'       => $row->first_name,
                 'user_type'       => 'm'
                 );

           $this->session->set_userdata($userdata1);
           }
           echo $result;
	} 
 //---------------------------------
	public function fblogin()
	{
           $Emailfb = $this->input->post("Emailfb");
           $fristnamefb= $this->input->post("fristnamefb");
           $lastnamefb = $this->input->post("lastnamefb");
           $idfb = $this->input->post("idfb");
           $getfacrbook = $this->User_model->getfacrbook($idfb);
           $numfacrbook = $getfacrbook->num_rows();
           if($numfacrbook>0){
           foreach ($getfacrbook->result() as $getfacrbook2){}
           $get_member = $this->User_model->get_member($getfacrbook2->id);
                foreach ($get_member->result() as $row){}
            $userdata1 = array(
                 'user_idfontend'         => $row->id,
                 'user_namefontend'       => $row->first_name,
                 'user_lastnamefontend'       => $row->last_name,
                'user_type'       => 'f'
                 );

           $this->session->set_userdata($userdata1);
           $result = '1';
           }else{
                $addfb = $this->User_model->addfb($idfb,$fristnamefb,$lastnamefb,$Emailfb);
            if($addfb>0){
               $get_member = $this->User_model->get_member($addfb);
                foreach ($get_member->result() as $row){}
            $userdata1 = array(
                 'user_idfontend'         => $row->id,
                 'user_namefontend'       => $row->first_name,
                'user_lastnamefontend'       => $row->last_name,
                'user_type'       => 'f'
                 );

           $this->session->set_userdata($userdata1);
            $result = '1';
           }
           }
           redirect(base_url('Welcome'));
	} 
 //---------------------------------
	public function login()
	{
           $username = $this->input->post("username");
           $password = $this->input->post("password");
           $result = $this->User_model->login($username,$password);
           echo $result;
	} 
 //---------------------------------
	public function checkmail()
	{
           $email = $this->input->post("email");
           $result = $this->Product_model->checkmail($email);
           echo $result;
	} 
 //---------------------------------
	public function logoutdata()
	{
          $this->session->set_userdata(array("user_idfontend"=>"","user_namefontend"=>"","user_lastnamefontend"=>"","user_type"=>""));
          redirect(base_url('Welcome'));
	} 
        
}
