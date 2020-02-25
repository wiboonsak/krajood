<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

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
    }
	
	
	//---------------------------------
	public function index()
	{
           $this->load->view('fontend/payment');
	}
	//---------------------------------
	public function checkorder()
	{
          $ordernumber = $this->input->post('ordernumber');
          $result = $this->Product_model->getorderbyordernum($ordernumber);
          $numresult = $result->num_rows();
          if($numresult>0){
              foreach ($result->result() AS $data){}
              $getpaymentbyorderid = $this->Product_model->getpaymentbyorderid($data->id);
              $numpayment = $getpaymentbyorderid->num_rows();
              if($numpayment>0){
              $num = '2';
              $orderid = '0';
              $customer_name = '0';
              $customer_telephone = '0';
              $total_price = '0';
              }else{
              $num = '1';
              $orderid = $data->id;
              $customer_name = $data->customer_name;
              $customer_telephone = $data->customer_telephone;
              $total_price = $data->total_price;
              }
          }else{
              $num = '0';
              $orderid = '0';
              $customer_name = '0';
              $customer_telephone = '0';
              $total_price = '0';
          }
          echo $num.'-'.$customer_name.'-'.$customer_telephone.'-'.number_format($total_price,2).'-'.$orderid ;
	}
         //-------------------------------    
	public function addpayment(){
		 $Ordernumber =$this->input->post('Orderid');
		 $Transferamount =$this->input->post('Transferamount');
		 $name =$this->input->post('Name');
		 $telephone =$this->input->post('telephone');
		 $dateadd =$this->input->post('dateadd');
                 $dateArray = explode("/",$dateadd);
		$date= $dateArray[1];
		$mon= $dateArray[0];
		$year= $dateArray[2] ;
                $datepayment = $year.'-'.$mon.'-'.$date;
		 $timeadd =$this->input->post('timeadd');
		 $radioadd =$this->input->post('radioadd');
		 $comment =$this->input->post('comment');
		 $price = str_replace(",","",$Transferamount);
		 $currentID = $this->Product_model->addpayment($Ordernumber,$price,$name,$telephone ,$comment,$datepayment,$timeadd,$radioadd);
                 
            //--------uploadfile------------//
		$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile';
				$upload_pathName = 'uploadfile';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Product_model->AddpaymentImg($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}
//		
		
		 echo $currentID;
		 
	}
        //-------------------
  public function linenotify(){
	  	   //---------line notify----------------//
                $dataid = $this->input->post('data');
		$getpaymentDetail = $this->Product_model->getpaymentDetail($dataid);
		foreach($getpaymentDetail->result() AS $payment){}
                $getorder = $this->Product_model->getorder($payment->order_id);
                foreach($getorder->result() AS $getorder2){}
		date_default_timezone_set("Asia/Bangkok");

		$sToken = "ny70ySwSeJO5EAHhFd1zf0Yw0fsNc3DNn2XlSR5t9d4";

                    $datebookingArray = explode("-",$payment->TransferDate);
                    $datebooking = $datebookingArray[2];
                    $monbooking = $datebookingArray[1];
                    $yearbooking = $datebookingArray[0] ;
                    $monthArray = array("01"=>"January","02"=>"February","03"=>"March","04"=>"April", "05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
                    $date_add = $datebooking.'-'.$monbooking.'-'.$yearbooking.' '.$payment->Time;
	 
	 			$sMessage ="\nPayment Date : ".$date_add."\nOrder Number : ".$getorder2->OrderNumber."\nCustomer Name : ".$payment->NameSurname."\nCustomer Telephone : ".$payment->Telephone."\nTransfer Amount : ".number_format($payment->TransferAmount,2)."";

	            $chOne = curl_init(); 
				curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
				curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
				curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
				curl_setopt( $chOne, CURLOPT_POST, 1); 
				curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
				$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
				curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
				curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
				$result = curl_exec( $chOne ); 

				//Result error 
				if(curl_error($chOne)) 
				{ 
					//echo 'error:' . curl_error($chOne); 
				} 
				else { 
					$result_ = json_decode($result, true); 
					//echo "status : ".$result_['status']; echo "message : ". $result_['message'];
				} 
				curl_close( $chOne );   

 }
       
}
