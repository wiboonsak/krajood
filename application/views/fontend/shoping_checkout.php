<!DOCTYPE html>
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/bootstrap/bootstrap.min.css')?>">

<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Mitr|Sarabun&display=swap" rel="stylesheet">

<!-- Template's stylesheets -->
<link rel="stylesheet" href="<?php echo base_url('HTML/js/megamenu/stylesheets/screen.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/theme-default.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('HTML/js/loaders/stylesheets/screen.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/shop.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/font-awesome/css/font-awesome.min.css')?>" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css')?>" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/et-line-font/et-line-font.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/settings.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/layers.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/navigation.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/smart-forms/smart-forms.css')?>">
<link href="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.css')?>" rel="stylesheet">
<link href="<?php echo base_url('HTML/js/owl-carousel/owl.theme.css')?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/cubeportfolio/cubeportfolio.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/shortcodes.css')?>" type="text/css">
<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet/less" type="text/css" href="<?php echo base_url('HTML/less/skin.less')?>">


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
  <div class="site-wrapper">
  	<?php include("header.php"); ?>
    <!--end menu-->
    
    <div class="clearfix"></div>
    
 <section class="section-side-image clearfix">
      <div class="img-holder col-md-12 col-sm-12 col-xs-12">
        <div class="background-imgholder" style="background-image: url(<?php echo base_url('HTML/images/bg_products.jpg')?>)"><img class="nodisplay-image" src="<?php echo base_url('HTML/images/bg_products.jpg')?>" alt=""/> </div>
      </div>
      <div class="container-fluid" >
        <div class="row">       
        <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
        <div class="header-inner less-height">        
       <div class="overlay">       
       <div class="text text-center">
    <h3 class="uppercase text-white less-mar-1 title"><?php echo $this->lang->line('ShopingCheckout');?></h3>
    <h6 class="uppercase text-white sub-title"><?php echo $this->lang->line('Creating');?></h6>
    </div>
       </div>       
        </div></div>        
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end header section -->
    
    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       <div class="col-md-6"> <h3><?php echo $this->lang->line('ShopingCheckout');?></h3></div>
        <div class="col-md-6">
        <ol class="breadcrumb">
			<li><a href="<?php echo base_url('Welcome')?>"><?php echo $this->lang->line('home');?></a></li>
			 <?php $getCategory = $this->Product_model->getCategory('1','1');
                                    foreach ($getCategory->result() AS $Category2){}?>
			<li><a href="<?php echo base_url('Product/index/'.$Category2->id)?>"><?php echo $this->lang->line('Product');?></a></li>
			<li class="current"><a href="#"><?php echo $this->lang->line('ShopingCheckout');?></a></li>
		</ol>  
		</div>
          
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!--end section-->
    

            
    <section class="sec-padding" style="padding: 40px 0px 40px 0px !important">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
             <h5 style="background-color: #f6f1e5; padding: 10px;text-align: center; margin-top: 0px;"><?php echo $this->lang->line('CustomerDetail');?></h5>
            <!--<input class="sp-binfo" type="text" value="" placeholder="ชื่อ">-->
            <?php if($this->session->userdata('user_idfontend')!=""){
                  $get_member = $this->Product_model->get_member_fac($this->session->userdata('user_idfontend'));
                  foreach ($get_member AS $member){
                      if($this->session->userdata('user_type')=='m'){
                          $NameSurname = $member->first_name.' '.$member->last_name;
                            $Telephone = $member->cus_tel;
                      }else{
                          $NameSurname = $member->first_name;
                            $Telephone = '';
                      }
                      
                      $email = $member->cus_email;
                  }
             }else{
                 $NameSurname = '';
                 $Telephone = '';
                 $email = '';
             }?>
            <div class="col-md-12 col-md-12 nopadding">
                <input class="sp-binfo" type="text" value="<?php echo $NameSurname?>" placeholder="<?php echo $this->lang->line('NameSurname');?>" id="NameSurname" >     
                <input class="sp-binfo" type="text" value="<?php echo $Telephone?>" placeholder="<?php echo $this->lang->line('Telephone');?>" id="Telephone">
                <input class="sp-binfo" type="text" value="<?php echo $email?>" placeholder="<?php echo $this->lang->line('email');?>" id="email" >
                <input class="sp-binfo" type="hidden" value="<?php echo $this->session->userdata('user_idfontend')?>" placeholder="<?php echo $this->lang->line('email');?>" id="member_id" >
                
                
            </div>
            
            <div class="clearfix"></div>
            <br/>
             <h5 style="background-color: #f6f1e5; padding: 10px;text-align: center; margin-top: 0px;"><?php echo $this->lang->line('Shippinginfor');?></h5> 
             <input class="sp-binfo" type="text" value="" placeholder="<?php echo $this->lang->line('Addresscustomer');?>" id="address"> 
            <div class="col-xs-4 nopadding">
                <select class="sp-binfo-select" id="province" onchange="Districtopen(this.value)" style="cursor:pointer">
                    <option value="0"><?php echo $this->lang->line('province');?></option>
                <?php foreach ($getprovince->result() AS $province){
                        if($this->session->userdata('weblang') == 'en'){
                            $name = $province->name_en;
                        }else{
                            $name = $province->name_th;
                        }
                    ?>
                <option value="<?php echo $province->id?>"><?php echo $name?></option>
                <?php }?>
              </select>
            </div>
            <div class="col-xs-4 nopadding" id="District">
                <select class="sp-binfo-select" id="amphures" disabled style="cursor:not-allowed">
                    <option value="0"><?php echo $this->lang->line('District');?></option>
              </select>
            </div>
            <div class="col-xs-4 nopadding text-center" id="Postalcode">
              <select class="sp-binfo-select" id="Postal" disabled style="cursor:not-allowed"> 
                <option value="0"><?php echo $this->lang->line('Postalcode');?></option>
              </select>
            </div>
			<div class="clearfix"></div>
          	</div>
          <!--end item-->
          
          <div class="col-md-5"> 
            <div class="sp-order-summary">
                 <?php foreach ($getorder->result() AS $getorder2){}?>
				  <h5 style="color: #9c0101;"><?php echo $this->lang->line('Ordernumber');?> <?php echo $getorder2->OrderNumber?></h5>
					<br>
				  <ul class="sp-cart-total">
                                      <?php foreach ($getorder_detail->result() AS $order_detail){
                             $firstImg = $this->Product_model->getFirstImg($order_detail->product_id);
                             if($this->session->userdata('weblang') == 'en'){
        $product_name = $order_detail->product_name;
        $product_title = $order_detail->product_title;
       
        }else{
        $product_name = $order_detail->product_name_th;
        $product_title = $order_detail->product_title_th;
        
        }
        $pricesum = $order_detail->amount*$order_detail->price;
                                  ?>
					<li>
					  <div class="pull-left title" style="width: 50px; text-align: right; padding-right: 5px"><?php echo $order_detail->amount?> x</div>
					  <div class="pull-left title"><?php echo $product_name?></div>				  
					  <div class="pull-right price"><?php echo number_format($pricesum,2)?> <?php echo $this->lang->line('Baht');?></div>
					</li>
                                      <?php }?>
					<li>
					  <div class="pull-left title"  style="padding-left: 100px;"><?php echo $this->lang->line('Totalproduct');?></div>
					  <div class="pull-right price"><?php echo number_format($sumcart,2)?> <?php echo $this->lang->line('Baht');?></div>
					</li>
					<li>
					  <div class="pull-left title"  style="padding-left: 100px;"><?php echo $this->lang->line('DeliveryCost');?></div>
					  <div class="pull-right price"><?php echo number_format($getorder2->Delivery_Cost,2)?> <?php echo $this->lang->line('Baht');?></div>
					</li>
					<li>
					  <div class="pull-left title"  style="padding-left: 100px;"><?php echo $this->lang->line('Total');?></div>
					  <div class="pull-right price"><?php echo number_format($getorder2->total_price,2)?> <?php echo $this->lang->line('Baht');?></div>
					</li>
				  </ul>
                                        <?php if($getorder2->checkdata=='1'){?>
                                        <p style="color: #9c0101;font-size: 16px">*<?php echo $this->lang->line('RegisteredMail');?></p>
                                        <?php }else{?>
                                        <p style="color: #9c0101;font-size: 16px" >*<?php echo $this->lang->line('ParcelEMS');?></p>
                                        <?php }?>
				  <div class="clearfix"></div>
			  </div>
			
              <a class="btn btn-gyellow btn-medium uppercase pull-right" href="javascript:void(0)" onclick="proceed('<?php echo $getorder2->id?>')"><?php echo $this->lang->line('Proceed');?></a>
                          
          </div>
          <!--end item--> 
          <input type="hidden" id="ordernumber" value="<?php echo $getorder2->OrderNumber?>">
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
    
	  
   
   <?php include("footer.php"); ?>

       
  </div>
  <!--end site wrapper--> 
</div>
<!--end wrapper boxed--> 
<?php include("modal_login_regis.php"); ?>
<!-- Scripts --> 
<script src="<?php echo base_url('HTML/js/jquery/jquery.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/bootstrap/bootstrap.min.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/less/less.min.js')?>" data-env="development"></script> 
<!-- Scripts END --> 

<!-- Template scripts --> 
<script src="<?php echo base_url('HTML/js/megamenu/js/main.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/custom.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/custom.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/cubeportfolio/jquery.cubeportfolio.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/cubeportfolio/main-mosaic3.js')?>"></script> 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/jquery.themepunch.tools.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/jquery.themepunch.revolution.min.js')?>"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('HTML/js/revolution-slider/js/extensions/revolution.extension.video.min.js')?>"></script> 
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
		tmp:'',
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

        $('.loader-live').fadeOut();
      },1000);
    })
    //------------------
    function Districtopen(province){
        
         $.post('<?php echo base_url('Product/Districtopen') ?>', {province:province}, function (data) { 
                                if(data!=''){
                                   $('#District').empty();
                                   $('#District').html(data);
                                   var postalcode = '<select class="sp-binfo-select" disabled style="cursor:not-allowed"><option><?php echo $this->lang->line('Postalcode');?></option></select>';
                                   $('#Postalcode').empty();
                                   $('#Postalcode').html(postalcode);
                                }
                                });
    }
    //------------------
    function Postalcodeopen(amphures){
         $.post('<?php echo base_url('Product/Postalcodeopen') ?>', {amphures:amphures}, function (data) { 
                                if(data!=''){
                                   $('#Postalcode').empty();
                                   $('#Postalcode').html(data);
                                }
                                });
    }
    //------------------
    function proceed(order_id){
        var ordernumber = $('#ordernumber').val();
        var NameSurname = $('#NameSurname').val();
        var Telephone = $('#Telephone').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var province = $('#province').val();
        var amphures = $('#amphures').val();
        var Postal = $('#Postal').val();
        var member_id = $('#member_id').val();
        if(NameSurname==''){
            alert('Please Enter Name Surname');
        }else if(Telephone==''){
            alert('Please Enter Telephone');
        }else if(email==''){
            alert('Please Enter Email');
        }else if(address==''){
            alert('Please Enter Address');
        }else if(province=='0'){
            alert('Please Select Province');
        }else if(amphures=='0'){
            alert('Please Select District');
        }else if(Postal=='0'){
            alert('Please Select Postal Code');
        }else{
         $.post('<?php echo base_url('Product/proceed') ?>', {order_id:order_id,NameSurname:NameSurname,Telephone:Telephone,email:email,address:address,province:province,amphures:amphures,Postal:Postal,member_id:member_id}, function (data) { 
                                if(data!=''){
                                  $.post('<?php echo base_url('Product/send_mail') ?>', {order_id:order_id}, function (data2) { 
                                if(data2!='0'){
                                   var url = '<?php echo base_url("Product/Payment/")?>'+ordernumber;
                                  window.open(url,'_blank');
                                   window.location.href = '<?php echo base_url("Welcome")?>';
                                }else{
                                   alert('Error');
                                }
                                });
                               
                                }
                                });
    }
    }
  </script>
  <script>
//------------------------------
function checkmail(email) {
 
 
     $.post('<?php echo base_url('Welcome/checkmail') ?>', {email:email}, function (data) { 
                               if(data>0){
                                   alert('This email is in the system.');
                                   $('#usernameRegister').val('');
                                   $('#usernameRegister').focus();
                                }else{
                                    alert('errror');
                                }
                                });
 }

function register() {
 var nameRegister = $('#nameRegister').val();
 var telRegister = $('#telRegister').val();
 var LineRegister = $('#LineRegister').val();
 var usernameRegister = $('#usernameRegister').val();
 var passwordRegister = $('#passwordRegister').val();
 if(nameRegister == ''){
     alert('Please Enter Name Surname');
 }else if (telRegister ==''){
     alert('Please Enter Telephone'); 
 }else if (LineRegister == ''){
     alert('Please Enter Line'); 
 }else if (usernameRegister == ''){
     alert('Please Enter E-mail'); 
 }else if (passwordRegister == ''){
     alert('Please Enter Password'); 
 }else{
     $.post('<?php echo base_url('Welcome/register') ?>', {name:nameRegister,tel:telRegister,Line:LineRegister,username:usernameRegister,password:passwordRegister}, function (data) { 
                                if(data>0){
                                    window.location.reload(true);
                                }else{
                                    alert('ERROR');
                                }
                                });
 }
}
//------------------------------
function login() {
 var username = $('#usernamelogin').val();
 var password = $('#passwordlogin').val();
 if(username == ''){
     alert('Please Enter Username');
 }else if (password == ''){
     alert('Please Enter Password'); 
 }else{
     $.post('<?php echo base_url('Welcome/login') ?>', {username:username,password:password}, function (data) { 
                               if(data>0){
                                   window.location.reload(true);
                                }else{
                                    alert('errror');
                                }
                                });
 }
}
</script>
<script src="<?php echo base_url('HTML/js/functions/functions.js')?>"></script>
</body>
</html>
