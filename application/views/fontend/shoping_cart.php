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
    <h3 class="uppercase text-white less-mar-1 title"><?php echo $this->lang->line('Shoppingcart');?></h3>
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
       <div class="col-md-6"> <h3><?php echo $this->lang->line('Shoppingcart');?></h3></div>
        <div class="col-md-6">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('Welcome')?>"><?php echo $this->lang->line('home');?></a></li>
             <?php $getCategory = $this->Product_model->getCategory('1','1');
                                    foreach ($getCategory->result() AS $Category2){}?>
			<li><a href="<?php echo base_url('Product/index/'.$Category2->id)?>"><?php echo $this->lang->line('Product');?></a></li>
			<li class="current"><a href="#"><?php echo $this->lang->line('Shoppingcart');?></a></li>
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
  
  <div class="col-md-12">
   <div class="table-responsive">
  <table class="sp-cart">
  
    <tr>
    <th class="pro-img"></th>
     <th style="width:20%;"><?php echo $this->lang->line('ProductName');?></th>
	 <th style="width:40%;"><?php echo $this->lang->line('Detail');?></th>
	 <th style="width:10%;"><?php echo $this->lang->line('Price');?></th>
     <th style="width:15%;"><?php echo $this->lang->line('Amount');?></th>
     <th style="width:15%;"><?php echo $this->lang->line('TotalPrice');?></th>
	 <th style="width:10%;"></th>
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
	 <tr id="tr<?php echo $order_detail->id?>">
		 <td class="pro-img">
		 <img src="<?php echo base_url('uploadfile/product/'.$firstImg)?>" alt="" class="img-responsive"/>
		 </td>
		<td class="pro-title"><h6><?php echo $product_name?></h6></td>
		<td class="pro-des"><p><?php echo $product_title?></p></td>
		<td class="pro-price" align="center"><h6><?php echo number_format($order_detail->price,2)?></h6></td>
                <td class="quantity" align="center"><input class="form-control text-center" min="1" type="number" id="shopamount<?php echo $order_detail->id?>" value="<?php echo $order_detail->amount?>" onchange="chageamount1(this.value,'<?php echo $order_detail->id?>')"></td>
                <td class="total" align="center"><h6 id="pricesum<?php echo $order_detail->id?>"><?php echo number_format($pricesum,2)?></h6></td>
		<td><a class="btn btn-dark-3 btn-small" href="javascript:void(0)" onclick="deletecart1('<?php echo $order_detail->id?>','<?php echo $this->session->userdata('OrderNumber');?>')"><?php echo $this->lang->line('Delete');?></a></td>
	 </tr>   
     <?php }?>
	   
        
    
  </table>
</div> 
  </div>
  <!--end item-->

  </div>
  </div>
  </section>
<div class="clearfix"></div>
  <!-- end section -->

 
  <section class="sec-bpadding-2">
  <div class="container">
  
  <div class="row">
  
  <div class="col-md-6 col-sm-6 col-xs-12">
  <br/><br/>
	  <!--<h5>Have Any Coupon or promotional Codes ?</h5>
	 <input class="sp-pr-code" type="search" placeholder="Enter Coupon Or Promotional Code here">
	  <input name="search" value="Apply Code" class="sp-pr-code-btn" type="submit">-->
	  
	  <div class="clearfix"></div>
	  
         <h5 style="background-color: #f6f1e5; padding: 10px;text-align: center; margin-top: 0px;"><?php echo $this->lang->line('Selectthetype');?></h5>       
			<div class="col-xs-12">
             	 <div class="" style="margin: 10px">
					<label class="control control--radio" style="font-size: 16px;"><?php echo $this->lang->line('RegisteredMail');?>
                                            <input type="radio" name="radio1" value="1" onclick="shipingrate('60','10','1','2')" id="radio1">
					  <div class="control__indicator red"></div>
					</label>
					<label class="control control--radio" style="font-size: 16px;"><?php echo $this->lang->line('ParcelEMS');?>
                                            <input type="radio" name="radio2" id="radio2" value="2" onclick="shipingrate('80','10','2','1')">
					  <div class="control__indicator red"></div>
					</label>				
				  </div>
            </div>
  </div>
  <!--end item-->
  
    <div class="col-md-6 col-sm-6 col-xs-12">
    <br/><br/>
  <ul class="sp-cart-total">
      <li><div class="pull-left title"><?php echo $this->lang->line('Totalproduct');?></div><div class="pull-right price"><span id="shopsumprice"><?php echo number_format($sumcart,2)?></span><input type="hidden" id="shopsumprice1" name="shopsumprice1" value="<?php echo $sumcart?>"></div></li>
   	<li><div class="pull-left title"><?php echo $this->lang->line('DeliveryCost');?></div><div class="pull-right price"><span id="shipping"></span>.00<input type="hidden" id="shipping1" name="shipping1" value=""></div></li>
    <li><div class="pull-left title"><?php echo $this->lang->line('Total');?></div><div class="pull-right price"><span id="totalall"></span>.00<input type="hidden" id="totalall1" name="totalall1" value=""></div></li>
  </ul>
  <div class="clearfix"></div>
  <br/><br/>
  <?php   foreach ($getCategory->result() AS $Category){}?>
 		<a class="btn btn-warning btn-medium uppercase pull-left" href="<?php echo base_url('Product/index/'.$Category->id)?>"><?php echo $this->lang->line('SelectAdd');?></a>
                <a class="btn btn-gyellow btn-medium uppercase pull-right" href="javascript:void(0)" onclick="updateorder('<?php echo $this->session->userdata('OrderNumber')?>')"><?php echo $this->lang->line('ShopingCheckout');?></a>
  </div>
  <!--end item-->
  

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
  //---------------------------------
                function chageamount1(amount,orderdetail_id){
                   
                    $.post('<?php echo base_url('Product/chageamount') ?>', {amount:amount,orderdetail_id:orderdetail_id}, function (data) {
                        if(data!=''){
                           $('#total').text(data);
                           $('#shopsumprice').text(data);
                           $('#shopsumprice1').val(data);
                           $.post('<?php echo base_url('Product/sumcartbyid') ?>', {id:orderdetail_id}, function (data2) { 
                                if(data2!=''){
                                    $('#pricesum'+orderdetail_id).text(data2);
                                }else{
                                    $('#pricesum'+orderdetail_id).text('0');
                                }
                                });
                           $.post('<?php echo base_url('Product/countcart') ?>', {}, function (data1) { 
                                if(data1!=''){
                                    $('#cartnumber').text(data1);
                                    if ($('#radio1').is(':checked')) {
                 shipingrate(60,10,1,2);
                 }
                 if ($('#radio2').is(':checked')) {
                 shipingrate(80,10,2,1);
                 }
                                }else{
                                    $('#cartnumber').text('0');
                                }
                                });
                                
                }
                 });
                 
                 $('#activeli').removeClass('active');
                }
                 //---------------------------------
                function deletecart1(orderdetail_id,OrderNumber){
                    $.post('<?php echo base_url('Product/deletecart') ?>', {orderdetail_id:orderdetail_id}, function (data) {
                        if(data!=''){
                            $('#li'+orderdetail_id).remove();
                            $('#tr'+orderdetail_id).remove();
                              
                            
                          $.post('<?php echo base_url('Product/sumcart') ?>', {order_id:OrderNumber}, function (data1) {
                        if(data1!=''){
                            $('#total').text(data1);
                            $('#shopsumprice').text(data1);
                            $('#shopsumprice1').val(data1);
                            $.post('<?php echo base_url('Product/numorder') ?>', {order_id:OrderNumber}, function (data3) { 
                                if(data3!=''){
                                    $('#numorder').text(data3);
                                }
                                });
                           
                           $.post('<?php echo base_url('Product/countcart') ?>', {}, function (data2) { 
                                if(data2!=''){
                                    $('#cartnumber').text(data2);
                                    
                                }else{
                                    $('#cartnumber').text('0');
                                }
                                });
                }
                 });
                           if ($('#radio1').is(':checked')) {
                 shipingrate(60,10,1,2);
                 }
                 if ($('#radio2').is(':checked')) {
                 shipingrate(80,10,2,1);
                 } 
                }
                 });
                 
                  //$('#activeli').removeClass('active');
                  window.location.reload(true);
                }
                 //---------------------------------
                function shipingrate(rate1,rete1puls,ch,unch){
                $('#radio'+ch).prop('checked', true);
                $('#radio'+unch).prop('checked', false);
                   var totalrate = '';var totalratepuls = '';
                   var cartnumber = $('#cartnumber').text();
                   if(parseInt(cartnumber)>1){
                       cartnumber = parseInt(cartnumber)-1;
                       totalratepuls = parseInt(rete1puls)*parseInt(cartnumber);
                       totalrate = parseInt(totalratepuls)+parseInt(rate1);
                       $('#shipping').text(totalrate);
                       $('#shipping1').val(totalrate);
                   }else{
                       $('#shipping').text(parseInt(rate1));
                       $('#shipping1').val(parseInt(rate1));
                   }
                   sumtotal();
                }
                 //---------------------------------
                function sumtotal(){
                   var totalall = '';
                   var shipping1 = $('#shipping1').val();
                   var shopsumprice1 = $('#shopsumprice1').val().replace(/,/g , '');
                  totalall = parseInt(shopsumprice1)+parseInt(shipping1);
                  totalall += '';
    x = totalall.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    sumall =  x1 + x2;
                  $('#totalall').text(sumall);
                  $('#totalall1').val(sumall);
                }
                 //---------------------------------
                function updateorder(order_id){
                    var checkdata = '';
                    if ($('#radio1').is(':checked')) {
                 checkdata = '1';
                 }
                 if ($('#radio2').is(':checked')) {
                 checkdata = '2';
                 }
                   var shipping1 = $('#shipping1').val();
                   var totalall1 = $('#totalall1').val();
                   $.post('<?php echo base_url('Product/updateorder') ?>', {order_id:order_id,shipping1:shipping1,totalall1:totalall1,checkdata:checkdata}, function (data) { 
                                if(data=='1'){
                                    window.location.href='<?php echo base_url("Product/shoping_checkout/")?>'+order_id;
                                }else{
                                    alert('ERROR');
                                }
                                });
                }
$( document ).ready(function() {
    shipingrate(60,10,1,2);
    sumtotal();
    $('#radio1').prop('checked', true);
});
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
