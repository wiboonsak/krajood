<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
          $this->lang->load('content', $this->session->userdata('weblang'));
    }
	//---------------------
	public function index($CateID=NULL,$page=NULL)
	{
          $perpage = 9; $limit =''; $notUse = '';
          if ($page == ''){
              $page = 1;
             }else{
              $page = $page;
             }
              $start = ($page - 1) * $perpage;
              $data['page'] = $page;
              $data['perpage'] = $perpage;
              $data['productDetail'] = $this->Product_model->productListByCate($CateID,$limit,$notUse,$start,$perpage);
              $data['getCategory1'] = $this->Product_model->getCategory('1','1');
              $data['getproductDetail1']=$this->Product_model->getproductDetail1('3',$notUse,'-100','-100');
              $data['CateID'] = $CateID;
          $this->load->view('fontend/product_list',$data);
	}
        //---------------------------------
	public function product_detail($CateID=NULL,$dataid=NULL)
	{
           $notUse = '';$data['CateID'] = $CateID;
           $data['getDetail'] = $this->Product_model->getDetail($dataid);
           $data['loadProductImg'] = $this->Product_model->loadProductImg($dataid,4);
           $data['getproductDetail1']=$this->Product_model->getproductDetail1('3',$notUse,'-100','-100');
           $data['getCategory1'] = $this->Product_model->getCategory('1','1');
           $this->load->view('fontend/product_detail',$data);
	}
        
        //---------------------------------
	public function addtocart()
	{
           $product_id = $this->input->post('product_id');
           $amount = $this->input->post('amount');
           $price = $this->input->post('price');
           
           $result = $this->Product_model->addtocart($product_id,$amount,$price);
           echo $result;
	}
        //---------------------------------
	public function countcart()
	{
           $OrderNumber = $this->session->userdata('OrderNumber');

           
           $result = $this->Product_model->countcart($OrderNumber);
           echo $result;
	}
        //---------------------------------
	public function chageamount()
	{
           $amount = $this->input->post('amount');
           $orderdetail_id = $this->input->post('orderdetail_id');
           $OrderNumber = $this->session->userdata('OrderNumber');
           
           $result = $this->Product_model->chageamount($amount,$orderdetail_id,$OrderNumber);
           echo $result;
	}
        //---------------------------------
	public function deletecart()
	{
           $orderdetail_id = $this->input->post('orderdetail_id');
           
           $result = $this->Product_model->deletecart($orderdetail_id);
           echo $result;
	}
        //---------------------------------
	public function closesecsion()
	{
           $lang = $this->session->userdata('weblang');
           $this->session->unset_userdata(array("OrderNumber"=>""));
           $this->session->sess_destroy();
           $this->session->set_userdata('weblang', $lang);
           $result = '1';
           echo $result;
	}
        //---------------------------------
	public function sumcart()
	{
          $order_id = $this->input->post('order_id');
          $sumcart = $this->Product_model->sumcart($order_id);
          echo number_format($sumcart,2);
           
	}
        //---------------------------------
	public function sumcartbyid()
	{
          $id = $this->input->post('id');
          $sumcartbyid = $this->Product_model->sumcartbyid($id);
          echo number_format($sumcartbyid,2);
           
	}
        //---------------------------------
	public function numorder()
	{
          $order_id = $this->input->post('order_id');
          $getorder_detail = $this->Product_model->getorder_detail($order_id);
          $numorder = $getorder_detail->num_rows();
          echo $numorder;
           
	}
                //---------------------------------------------------------
    public function cartdata() {
         $order_id = $this->input->post('order_id');
         $getorder_detail = $this->Product_model->getorder_detail($order_id);
         $numorder = $getorder_detail->num_rows();
         $sumcart = $this->Product_model->sumcart($order_id);
         
        ?>
       <div class="row">
           <div class="col-xs-4"> <span style="color:#727272" id="numorder"><?php echo $numorder?></span> <?php echo $this->lang->line('Order');?> </div>
                            <div class="col-xs-8 text-right"> <span><?php echo $this->lang->line('Total');?></span> <span id="total"><?php echo number_format($sumcart,2)?></span> <span><?php echo $this->lang->line('Baht');?></span> </div>
                          </div>
                          <ul>
                              <?php foreach ($getorder_detail->result() AS $order_detail){
                             $firstImg = $this->Product_model->getFirstImg($order_detail->product_id);
                             if($this->session->userdata('weblang') == 'en'){
        $product_name = $order_detail->product_name;
       
        }else{
        $product_name = $order_detail->product_name_th;
        
        }
                                  ?>
                              <li id="li<?php echo $order_detail->id?>"> <img src="<?php echo base_url('uploadfile/product/'.$firstImg)?>" alt="" style="width: 80px"> <?php echo $product_name?> <span style="font-size:16px"><?php echo number_format($order_detail->price,2)?> <?php echo $this->lang->line('Baht');?> &nbsp;x&nbsp; <input style="width:50px;text-align: center" type="number" min="1" value="<?php echo $order_detail->amount?>" onchange="chageamount(this.value,'<?php echo $order_detail->id?>')"></span> <a href="javascript:void(0)" title="" class="close-btn" onclick="deletecart('<?php echo $order_detail->id?>','<?php echo $this->session->userdata('OrderNumber');?>')">x</a> </li>
                              <?php }?>
                          </ul>
                          <div class="row">
                              <div class="col-xs-6"> <a href="<?php echo base_url('Product/shoping_cart/').$this->session->userdata('OrderNumber')?>" title="View Cart" class="btn btn-block btn-warning"><?php echo $this->lang->line('Shoppingcart');?></a> </div>
                            <div class="col-xs-6"> <a href="<?php echo base_url('Product/shoping_cart/').$this->session->userdata('OrderNumber')?>" title="Check out" class="btn btn-block btn-primary"><?php echo $this->lang->line('ShopingCheckout');?></a> </div>
                          </div>
        <?php
    }
        //---------------------------------
	public function shoping_cart($order_id)
	{
            $data['getorder_detail'] = $this->Product_model->getorder_detail($order_id);
            $data['sumcart'] = $this->Product_model->sumcart($order_id);
           $this->load->view('fontend/shoping_cart',$data);
	}
        //---------------------------------
	public function shoping_checkout($order_id)
	{
           $data['getorder_detail'] = $this->Product_model->getorder_detail($order_id);
           $data['getorder'] = $this->Product_model->getorder($order_id);
           $data['sumcart'] = $this->Product_model->sumcart($order_id);
           if($this->session->userdata('weblang') == 'en'){
           $data['getprovince'] = $this->Product_model->getprovince('name_en');
           }else{
           $data['getprovince'] = $this->Product_model->getprovince('name_th');
           }
           $this->load->view('fontend/shoping_checkout',$data);
	}
        //---------------------------------
	public function Districtopen(){
         $province = $this->input->post('province');
         if($this->session->userdata('weblang') == 'en'){
           $getamphures = $this->Product_model->getamphures($province,'name_en');
           }else{
           $getamphures = $this->Product_model->getamphures($province,'name_th');
           }
         $numamphures = $getamphures->num_rows();
         
        ?>
       <select class="sp-binfo-select" id="amphures" onchange="Postalcodeopen(this.value)">
                <option value="0"><?php echo $this->lang->line('District');?></option>
                <?php foreach ($getamphures->result() AS $amphures){
                        if($this->session->userdata('weblang') == 'en'){
                            $name = $amphures->name_en;
                        }else{
                            $name = $amphures->name_th;
                        }
                    ?>
                <option value="<?php echo $amphures->id?>"><?php echo $name?></option>
                <?php }?>
              </select>
        <?php
	}
        //---------------------------------
	public function Postalcodeopen(){
         $amphures = $this->input->post('amphures');
         $getPostalcode = $this->Product_model->getPostalcode($amphures);
         $numPostalcode = $getPostalcode->num_rows();
        ?>
       <select class="sp-binfo-select" id="Postal">
                <option value="0"><?php echo $this->lang->line('Postalcode');?></option>
                <?php foreach ($getPostalcode->result() AS $Postalcode){?>
                <option value="<?php echo $Postalcode->zip_code?>"><?php echo $Postalcode->zip_code?></option>
                <?php }?>
              </select>
        <?php
	}
        //---------------------------------
	public function Payment($order_num)
	{
            
           $getorderbyordernum = $this->Product_model->getorderbyordernum($order_num);
           foreach ($getorderbyordernum->result() AS $orderbyordernum){}
           $order_id = $orderbyordernum->id;
           $data['getorder_detail'] = $this->Product_model->getorder_detail($order_id);
           $data['getorder'] = $this->Product_model->getorder($order_id);
           $data['sumcart'] = $this->Product_model->sumcart($order_id);
           if($this->session->userdata('weblang') == 'en'){
           $data['getprovince'] = $this->Product_model->getprovince('name_en');
           }else{
           $data['getprovince'] = $this->Product_model->getprovince('name_th');
           }
           $this->load->view('fontend/shoping_checkout_end',$data);
	}
        //---------------------------------
	public function updateorder()
	{
          $order_id = $this->input->post('order_id');
          $shipping1 = $this->input->post('shipping1');
          $totalall1 = $this->input->post('totalall1');
          $checkdata = $this->input->post('checkdata');
          $total = str_replace(",","",$totalall1);
          $result = $this->Product_model->updateorder($order_id,$shipping1,$total,$checkdata);
          echo $result;
	}
        //---------------------------------
	public function proceed()
	{
          $order_id = $this->input->post('order_id');
          $NameSurname = $this->input->post('NameSurname');
          $Telephone = $this->input->post('Telephone');
          $email = $this->input->post('email');
          $address = $this->input->post('address');
          $province = $this->input->post('province');
          $amphures = $this->input->post('amphures');
          $Postal = $this->input->post('Postal');
          $member_id = $this->input->post('member_id');

          $result = $this->Product_model->proceed($order_id,$NameSurname,$Telephone,$email,$address,$province,$amphures,$Postal,$member_id);
          echo $result;
	}

         //-------------------
	public function send_mail(){	 
            $Reservation = $this->lang->line('Reservation');
            $Ordernumber = $this->lang->line('Ordernumber');
            $Productdata = $this->lang->line('Productdata');
            $Baht = $this->lang->line('Baht');
            $Totalproduct = $this->lang->line('Totalproduct');
            $DeliveryCost = $this->lang->line('DeliveryCost');
            $Total = $this->lang->line('Total');
            $RegisteredMail = $this->lang->line('RegisteredMail');
            $ParcelEMS = $this->lang->line('ParcelEMS');
            $CustomerDetail = $this->lang->line('CustomerDetail');
            $NameSurname = $this->lang->line('NameSurname');
            $Telephone = $this->lang->line('Telephone');
            $email = $this->lang->line('email');
            $Addresscustomer = $this->lang->line('Addresscustomer');
            $Youcanpay = $this->lang->line('Youcanpay');
            $Accountnumber = $this->lang->line('Accountnumber');
            $Accountname = $this->lang->line('Accountname');
            $order_id = $this->input->post('order_id');
            $getorder_detail = $this->Product_model->getorder_detail($order_id);
            $getorder = $this->Product_model->getorder($order_id);
            $sumcart = $this->Product_model->sumcart($order_id);
            if($this->session->userdata('weblang') == 'en'){
            $getprovince = $this->Product_model->getprovince('name_en');
            }else{
            $getprovince = $this->Product_model->getprovince('name_th');
            }
            foreach ($getorder->result() AS $getorder2){}
		$from_email = 'g.monkeybear1857@gmail.com';
		$subject = $this->lang->line('Reservation');		
		//$to_email = $editor_data2->email;
		//$to_email = $emaildata;
		$to_email = $getorder2->customer_email;
		$email_body = '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Kra-Jood Thailand | กระจูด ไทยแลนด์ ผลิตภัณฑ์กระจูด จากภูมิปัญญาท้องถิ่น สร้างสรรค์เครื่องจักสานอันทรงคุณค่า สร้างรายได้ให้กับครอบครัวและชุมชน</title>
<meta name="keywords" content="กระจูด, จูด, ต้นกก, กก,  งานฝีมือ, งานแฮนด์เมด, แฮนด์เมด, กระเป๋า, ซองเอกสาร, หมวก, งานสาน, หัตถกรรม, ศิลปะหัตถกรรม, หัตถกรรมจักสาน, จักสาน, โอท๊อป, ชะอวด, นครศรีธรรมราช, ภาคใต้, สินค้าโอท๊อป, สินค้าท้องถิ่น, ภูมิปัญญา" />
<meta name="description" content="ผลิตภัณฑ์กระจูด จากภูมิปัญญาท้องถิ่น สร้างสรรค์เครื่องจักสานอันทรงคุณค่า สร้างรายได้ให้กับครอบครัวและชุมชน">
<meta name="author" content="ME-FI.COM">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/bootstrap/bootstrap.min.css">

<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Mitr|Sarabun&display=swap" rel="stylesheet">


<link rel="stylesheet" href="'.base_url().'HTML/js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/theme-default.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/shop.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="'.base_url().'HTML/fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/settings.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/layers.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/navigation.css">
<link href="'.base_url().'HTML/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="'.base_url().'HTML/js/owl-carousel/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/cubeportfolio/cubeportfolio.min.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/shortcodes.css" type="text/css">


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet/less" type="text/css" href="HTML/less/skin.less">


<!-- Skin stylesheet -->

</head>
<body>
<div class="over-loader loader-live">
  <div class="loader">
			<div class="loader-item style7">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
</div>
<!--end loading--> 



<div class="wrapper-boxed">
    <div class="site-wrapper" id="prints">

    <div class="clearfix"></div>
    <!--end header section -->
    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       		<div class="col-md-6"> <h3>'.$Reservation.'</h3></div>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!--end section-->
  
    
    
<section class="sec-bpadding-2">
  <div class="container">
  <div class="row">  
  	<!--end right column -->
	<div class="col-md-12">      

	<section class="">	  
		<h4 style="color: #9c0101;">'.$Ordernumber.' '.$getorder2->OrderNumber.'</h4>  
		
	</section>
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div style="display: inline-flex;">
	  <div style="width:50%;">	 
	  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;'.$Productdata.'</span></h4>
	 <table class="sp-cart">
			  <tr>
				<th style="width:60%;"></th>
				<th style="width:40%;"></th>
			 </tr> ';
                         foreach ($getorder_detail->result() AS $order_detail){
                             if($this->session->userdata('weblang') == 'en'){
        $product_name = $order_detail->product_name;
        $product_title = $order_detail->product_title;
       
        }else{
        $product_name = $order_detail->product_name_th;
        $product_title = $order_detail->product_title_th;
        
        }
        $pricesum = $order_detail->amount*$order_detail->price;
                                  
			$email_body = $email_body . ' <tr>
				<td class="pro-title"><h6>'.$order_detail->amount.' x '.$product_name.'</h6></td>
				<td class="pro-des" align="left"a>'.number_format($pricesum,2).' '.$Baht.'</td>
			 </tr>';
                         }
                         $email_body = $email_body . '
			 <tr>
				<td class="pro-title"><h6>'.$Totalproduct.'</h6></td>
				<td class="pro-des" align="left"a>'.number_format($sumcart,2).' '.$Baht.'</td>
			 </tr>   
			 <tr>
				<td class="pro-title"><h6>'.$DeliveryCost.'</h6></td>
				<td class="pro-des" align="left"a>'.number_format($getorder2->Delivery_Cost,2).' '.$Baht.'</td>
			 </tr>   
			 <tr>
				<td class="pro-title"><h6>'.$Total.'</h6></td>
				<td class="pro-des" align="left"a>'.number_format($getorder2->total_price,2).' '.$Baht.'</td>
			 </tr>   
		  </table>';
            if($getorder2->checkdata=='1'){
                                   $email_body = $email_body . '     <p style="color: #9c0101;font-size: 16px">*'.$RegisteredMail.'</p>';
                                         }else{
                                      $email_body = $email_body . '  <p style="color: #9c0101;font-size: 16px" >*'.$ParcelEMS.'</p>';
                                       }
	  $email_body = $email_body . '</div>';
		 $getprovincesbyid = $this->Product_model->getprovincesbyid($getorder2->province_id);
                      $getamphuresbyid = $this->Product_model->getamphuresbyid($getorder2->amphure_id);
                      $getPostalcode = $this->Product_model->getPostalcode($getorder2->amphure_id);
                      foreach ($getprovincesbyid->result() AS $provincesbyid){}
                      foreach ($getamphuresbyid->result() AS $amphuresbyid){}
                      foreach ($getPostalcode->result() AS $Postalcode){}
                      if($this->session->userdata('weblang') == 'en'){
        $provinces_name = $provincesbyid->name_en;
        $amphures_name = $amphuresbyid->name_en;
        }else{
        $provinces_name = $provincesbyid->name_th;
        $amphures_name = $amphuresbyid->name_th;
        }
                  $email_body = $email_body . '
	  <div style="width:50%;">	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;'.$CustomerDetail.'</span></h4>
		  <table class="sp-cart">
			  <tr>
				<th style="width:40%;"></th>
				<th style="width:60%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h6>'.$NameSurname.'</h6></td>
				<td class="pro-des" align="left"a>'.$getorder2->customer_name.' </td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>'.$Telephone.'</h6></td>
				<td class="pro-des" align="left"a>'.$getorder2->customer_telephone.'</td>
			 <tr>
				<td class="pro-title"><h6>'.$email.'</h6></td>
				<td class="pro-des" align="left"a>'.$getorder2->customer_email.'</td>
			 </tr>  
			 <tr>
				<td class="pro-title"><h6>'.$Addresscustomer.'</h6></td>
				<td class="pro-des" align="left"a>'.$getorder2->address.' '.$provinces_name.' '.$amphures_name.' '.$Postalcode->zip_code.'</td>
			 </tr> 
		  </table>	
		  
		 <div style="background-color: #e2e2e2; margin-right: 20px; padding: 10px;">
                     <table class="sp-cart">
			  <tr>
				<th style="width:20%;"></th>
				<th style="width:80%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title" align="center"><img src="'.base_url().'HTML/images/lp-ddbank-stepbank-kbank.png" class="img-responsive"></td>
                                <td class="pro-des" ><p style="color: #9c0101">'.$Youcanpay.'<br>
					'.$Accountnumber.'<br>
                                    '.$Accountname.'</p></td>
			 </tr>  
		  </table>	
			  

			  
		  </div>
	  </div>
			
			
			
	</div>
		
            
	</section>
	<div class="clearfix"></div>
 	<!-- end section -->	
       
		</div>
  	<!--end left column -->
  
  </div>
  </div>
  </section>
	  
	  
	  
<div class="clearfix"></div>
  <!-- end section -->
  </div>
  <!--end site wrapper--> 
   
</div>
<!--end wrapper boxed--> 

<!-- Scripts --> 
<script src="'.base_url().'HTML/js/jquery/jquery.js"></script> 
<script src="'.base_url().'HTML/js/bootstrap/bootstrap.min.js"></script> 
<script src="'.base_url().'HTML/js/less/less.min.js" data-env="development"></script> 
<!-- Scripts END --> 

<!-- Template scripts --> 
<script src="'.base_url().'HTML/js/megamenu/js/main.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/owl.carousel.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/custom.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/owl.carousel.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/custom.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/cubeportfolio/main-mosaic3.js"></script> 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script> 
<script type="text/javascript">
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
	if(tpj("#rev_slider").revolution == undefined){
	revslider_showDoubleJqueryError("#rev_slider");
	}else{
		revapi4 = tpj("#rev_slider").show().revolution({
		sliderType:"standard",
		jsFileLocation:"js/revolution-slider/js/",
		sliderLayout:"auto",
		dottedOverlay:"none",
		delay:9000,
		navigation: {
		keyboardNavigation:"off",
		keyboard_direction: "horizontal",
		mouseScrollNavigation:"off",
		onHoverStop:"off",
		arrows: {
		style:"erinyen",
		enable:true,
		hide_onmobile:true,
		hide_under:778,
		hide_onleave:true,
		hide_delay:200,
		hide_delay_mobile:1200,
		tmp:"",
		left: {
		h_align:"left",
		v_align:"center",
		h_offset:80,
		v_offset:0
		},
		right: {
		h_align:"right",
		v_align:"center",
		h_offset:80,
		v_offset:0
		}
		}
		,
		touch:{
		touchenabled:"on",
		swipe_threshold: 75,
		swipe_min_touches: 1,
		swipe_direction: "horizontal",
		drag_block_vertical: false
	}
	,
										
										
										
	},
		viewPort: {
		enable:true,
		outof:"pause",
		visible_area:"80%"
	},
	
	responsiveLevels:[1240,1024,778,480],
	gridwidth:[1240,1024,778,480],
	gridheight:[650,640,1300,820],
	lazyType:"smart",
		parallax: {
		type:"mouse",
		origo:"slidercenter",
		speed:2000,
		levels:[2,3,4,5,6,7,12,16,10,50],
		},
	shadow:0,
	spinner:"off",
	stopLoop:"off",
	stopAfterLoops:-1,
	stopAtSlide:-1,
	shuffle:"off",
	autoHeight:"off",
	hideThumbsOnMobile:"off",
	hideSliderAtLimit:0,
	hideCaptionAtLimit:0,
	hideAllCaptionAtLilmit:0,
	disableProgressBar:"on",
	debugMode:false,
		fallbacks: {
		simplifyAll:"off",
		nextSlideOnWindowFocus:"off",
		disableFocusListener:false,
		}
	});
	}
	});	/*ready*/
</script> 

 
<script>
    $(window).load(function(){
      setTimeout(function(){

        $(".loader-live").fadeOut();
      },1000);
    })

  </script>
<script src="'.base_url().'HTML/js/functions/functions.js"></script>
</body>
</html>';	 	
		

                    		
        $this->email->from($from_email, $subject); 
        $this->email->to($to_email);
        $this->email->subject($subject); 
       	$this->email->message($email_body); 
        if($this->email->send()){
        
        $subject1 = "[For Admin]".$this->lang->line('Reservation');		
        $this->email->from($from_email, $subject); 
        $this->email->to($from_email);
        $this->email->subject($subject1); 
       	$this->email->message($email_body); 
        $this->email->send();
        $this->linenotify($order_id);
         
           $this->session->set_userdata(array("OrderNumber"=>""));
//           $this->session->sess_destroy();
//           $this->session->set_userdata('weblang', $lang);
		$result = '1';
                
        }else{
            $result = '0';
        }
        echo $result;
        }
  //-------------------
  public function linenotify($order_id){
	  	   //---------line notify----------------//
		 $getorder_detail = $this->Product_model->getorder_detail($order_id);
                $getorder = $this->Product_model->getorder($order_id);
		foreach($getorder_detail->result() AS $order_detail){}
                foreach($getorder->result() AS $getorder2){}
		date_default_timezone_set("Asia/Bangkok");

		$sToken = "ny70ySwSeJO5EAHhFd1zf0Yw0fsNc3DNn2XlSR5t9d4";
                    $DateTimeArray= explode(" ",$getorder2->date_booking);
                    $dateArray = explode("-",$DateTimeArray[0]);
                    $date = $dateArray[2];
                    $mon = $dateArray[1];
                    $year = $dateArray[0] ;
                    
                    if($date < 10){ $date = str_replace("0", "", $date); } 
		$date_add = $date."-".$mon."-".$year." ".$DateTimeArray[1];
	 
	 			$sMessage ="\nReservation Date : ".$date_add."\nOrder Number : ".$getorder2->OrderNumber."\nProduct Name : ".$order_detail->product_name."\nCustomer Name : ".$getorder2->customer_name."\nCustomer Telephone : ".$getorder2->customer_telephone."\nCustomer Email : ".$getorder2->customer_email."\nTransfer Amount : ".number_format($getorder2->total_price,2)."";

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
              //---------------------------------------------------------
    public function searchdata() {
         $searchtext = $this->input->post('searchdata');
         $cateid = $this->input->post('cateid');
         $searchdata = $this->Product_model->searchdata($searchtext,$cateid);
         $numsearch = $searchdata->num_rows();
         if($numsearch>0){
         foreach ($searchdata->result() AS $data) {
     if($this->session->userdata('weblang') == 'en'){
        $product_name = $data->product_name;
        $product_title = $data->product_title;
        $product_desc = $data->product_desc;
        $date_update = $this->Product_model->getDayMonthYear($data->date_update);
        }else{
        $product_name = $data->product_name_th;
        $product_title = $data->product_title_th;
        $product_desc = $data->product_desc_th;
        $date_update = $this->Product_model->GetthaiDate($data->date_update);
        }
    $firstImg = $this->Product_model->getFirstImg($data->id);
        ?>
       <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="sp-feature-box-3 margin-bottom">
              <div class="img-box"> <a href="<?php echo base_url('Product/product_detail/'.$data->id)?>" class="view-btn uppercase"><?php echo $this->lang->line('Detail');?></a>
                <div class="badge">Hot</div>
                <img src="<?php echo base_url('uploadfile/product/'.$firstImg)?>" alt="" class="img-responsive"/> </div>
              <div class="clearfix"></div>
              <br/>
              <h5 class="less-mar-1"><?php echo $product_name?></h5>
              <p><?php echo $this->Product_model->str_limit_html($product_title,40)?></p>
              <h5 class="text-gyellow"><?php echo $this->lang->line('Price');?> <?php echo number_format($data->product_price,2)?> <?php echo $this->lang->line('Baht');?></h5>
              <br/>
              <a class="btn btn-border light btn-small" onclick="addtocart('<?php echo $data->id?>','1','<?php echo $data->product_price?>','<?php echo $this->session->userdata('OrderNumber');?>')"><?php echo $this->lang->line('Addtocart');?></a> </div>
          </div>
        <?php
    }
         }else{
         ?>
       <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="sp-feature-box-3 margin-bottom">
                <?php echo $this->lang->line('nodata');?>
               
               </div>
          </div>
        <?php
         }
    }
}
