<?php $this->lang->load('content', $this->session->userdata('weblang'));?>
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
    <div class="site-wrapper" id="prints">

    <div class="clearfix"></div>
    <!--end header section -->
    <?php 
    foreach ($getorder->result() AS $getorder2){}?>
    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       		<div class="col-md-6"> <h3><?php echo $this->lang->line('Reservation');?></h3></div>
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
		<h4 style="color: #9c0101;"><?php echo $this->lang->line('Ordernumber');?> <?php echo $getorder2->OrderNumber?></h4>  
		
	</section>
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div class="row">
	  <div class="col-md-6" style="padding-left: 30px">	 
	  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php echo $this->lang->line('Productdata');?></span></h4>
	 <table class="sp-cart">
			  <tr>
				<th style="width:60%;"></th>
				<th style="width:40%;"></th>
			 </tr>
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
			 <tr>
				<td class="pro-title"><h6><?php echo $order_detail->amount?> x <?php echo $product_name?></h6></td>
				<td class="pro-des" align="left"a><?php echo number_format($pricesum,2)?> <?php echo $this->lang->line('Baht');?></td>
			 </tr>
                         <?php }?>
			 <tr>
				<td class="pro-title"><h6><?php echo $this->lang->line('Totalproduct');?></h6></td>
				<td class="pro-des" align="left"a><?php echo number_format($sumcart,2)?> <?php echo $this->lang->line('Baht');?></td>
			 </tr>   
			 <tr>
				<td class="pro-title"><h6><?php echo $this->lang->line('DeliveryCost');?></h6></td>
				<td class="pro-des" align="left"a><?php echo number_format($getorder2->Delivery_Cost,2)?> <?php echo $this->lang->line('Baht');?></td>
			 </tr>   
			 <tr>
				<td class="pro-title"><h6><?php echo $this->lang->line('Total');?></h6></td>
				<td class="pro-des" align="left"a><?php echo number_format($getorder2->total_price,2)?> <?php echo $this->lang->line('Baht');?></td>
			 </tr>   
		  </table>
            <?php if($getorder2->checkdata=='1'){?>
                                        <p style="color: #9c0101;font-size: 16px">*<?php echo $this->lang->line('RegisteredMail');?></p>
                                        <?php }else{?>
                                        <p style="color: #9c0101;font-size: 16px" >*<?php echo $this->lang->line('ParcelEMS');?></p>
                                        <?php }?>
	  </div>
		<?php $getprovincesbyid = $this->Product_model->getprovincesbyid($getorder2->province_id);
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
                      ?>
	  <div class="col-md-6">	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $this->lang->line('CustomerDetail');?></span></h4>
		  <table class="sp-cart">
			  <tr>
				<th style="width:40%;"></th>
				<th style="width:60%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h6><?php echo $this->lang->line('NameSurname');?></h6></td>
				<td class="pro-des" align="left"a><?php echo $getorder2->customer_name?> <?php //echo $Data->customer_Lastname?></td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6><?php echo $this->lang->line('Telephone');?></h6></td>
				<td class="pro-des" align="left"a><?php echo $getorder2->customer_telephone?></td>
			 <tr>
				<td class="pro-title"><h6><?php echo $this->lang->line('email');?></h6></td>
				<td class="pro-des" align="left"a><?php echo $getorder2->customer_email?></td>
			 </tr>  
			 <tr>
				<td class="pro-title"><h6><?php echo $this->lang->line('Addresscustomer');?></h6></td>
				<td class="pro-des" align="left"a><?php echo $getorder2->address?> <?php echo $provinces_name?> <?php echo $amphures_name?> <?php echo $Postalcode->zip_code?></td>
			 </tr> 
		  </table>	
		  
		 <div style="background-color: #e2e2e2; margin-right: 20px; padding: 10px;">
                     <table class="sp-cart">
			  <tr>
				<th style="width:20%;"></th>
				<th style="width:80%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title" align="center"><img src="<?php echo base_url('HTML/images/lp-ddbank-stepbank-kbank.png')?>" class="img-responsive"></td>
                                <td class="pro-des" ><p style="color: #9c0101"><?php echo $this->lang->line('Youcanpay');?><br>
					<?php echo $this->lang->line('Accountnumber');?><br>
                                    <?php echo $this->lang->line('Accountname');?></p></td>
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

  </script>
<script src="<?php echo base_url('HTML/js/functions/functions.js')?>"></script>
</body>
</html>

