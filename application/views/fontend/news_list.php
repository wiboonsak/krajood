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
<link rel="stylesheet" href="<?php echo base_url('HTML/css/blog2.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/font-awesome/css/font-awesome.min.css')?>" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css')?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/smart-forms/smart-forms.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/et-line-font/et-line-font.css')?>">
<link href="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.css')?>" rel="stylesheet">
<link href="<?php echo base_url('HTML/js/tabs/css/responsive-tabs.css')?>" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/cubeportfolio/cubeportfolio.min.css')?>">
<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="stylesheet/less" type="text/css" href="<?php echo base_url('HTML/less/skin.less')?>">


<!-- Skin stylesheet -->

</head>
<style>
    
    .isDisabled {
  pointer-events: none;
  cursor: not-allowed !important;
  opacity: 0.5;
  text-decoration: none;
}
</style>
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
    <h3 class="uppercase text-white less-mar-1 title"><?php echo $this->lang->line('News');?></h3>
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
            <div class="col-md-6">
              <h4 class="uppercase dosis"><?php echo $this->lang->line('News');?></h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url('Welcome')?>"><?php echo $this->lang->line('home');?></a></li>
                <li class="current"><a href="<?php echo base_url('News')?>"><?php echo $this->lang->line('News');?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->
    
    <section class="sec-padding">
      <div class="container">
        <div class="row">
             <?php
  $limit =''; $notUse ='';                            
$countAll=$this->Product_model->getNewsDetail1($limit,$notUse,'-100','-100');

        $countRow = $countAll->num_rows(); 
        $totalRow = ceil($countRow/$perpage);
foreach ($newsDetail->result() AS $data) {
     if($this->session->userdata('weblang') == 'en'){
        $news_title = $data->news_title;
        $news_detail = $data->news_detail;
        $news_date_add = $this->Product_model->getDayMonthYear($data->news_date_add);
        }else{
        $news_title = $data->news_title_th;
        $news_detail = $data->news_detail_th;
        $news_date_add = $this->Product_model->GetthaiDate($data->news_date_add);
        }
    $firstImg = $this->Product_model->getNewsImg($data->id);
    ?>
          <div class="bg2-featurebox-4">
            <div class="col-md-5 col-sm-12 col-xs-12 margin-bottom"> <img src="<?php echo base_url('uploadfile/news/') . $firstImg ?>" alt="" class="img-responsive"/> </div>
            <!--end item-->
            
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h4 class="dosis uppercase title"><a href="<?php echo base_url('News/news_detail/').$data->id ?>"><?php echo $news_title?></a></h4>
              <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Admin</span> <span><i class="fa fa-calendar"></i> <?php echo $news_date_add?></span></div>
              <br/>
              <p><?php echo $this->Product_model->str_limit_html($news_detail,300)?></p>
              <br/>
              <br/>
              <a class="btn btn-dark-3 btn-small" href="<?php echo base_url('News/news_detail/').$data->id ?>"><?php echo $this->lang->line('Readdetails');?></a> </div>
            <!--end item--> 
          </div>
          <!--end feature box-->
          <div class="col-divider-margin-3"></div>
          <?php }?>
          <!--end feature box-->
          <div class="clearfix"></div>
          <br/>
          <div class=" divider-line solid light"></div>
          <div class="col-md-12">
                <?php 
                                                    $page2 =$page-1; 
                                                    $page3 =$page+1; 
                                                    
                                                    ?>
            <ul class="blog-pagenation">
              <li <?php if($page == 1){?>class="isDisabled"<?php }?>><a href="<?php echo base_url('News/Page/').$page2?>"><i class="fa fa-angle-left"></i></a></li>
              <?php for($i=1;$i<=$totalRow;$i++){ ?> 
              <li ><a href="<?php echo base_url('News/Page/').$i?>" class=" <?php if($page == $i){ echo 'active'; }?>"><?php echo $i?></a></li>
              <?php }?>
              <li <?php if($totalRow <= 1){?>class="isDisabled"<?php }?>><a href="<?php echo base_url('News/Page/').$page3?>"><i class="fa fa-angle-right"></i></a></li>
            </ul>
              
          </div>
          <!--end pagenation--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
    
     <?php include("footer.php"); ?>   
	  
    <a href="#" class="scrollup"></a><!-- end scroll to top of the page--> 
    
  </div>
  <!--end site wrapper--> 
</div>
<!--end wrapper boxed--> 
<?php include("modal_login_regis.php"); ?>
<!-- Scripts --> 
<script src="<?php echo base_url('HTML/js/jquery/jquery.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/bootstrap/bootstrap.min.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/less/less.min.js')?>" data-env="development"></script> 
<script src="<?php echo base_url('HTML/js/sticky/js/jquery.sticky.js')?>"></script> 
<!-- Scripts END --> 

<!-- Template scripts --> 
<script src="<?php echo base_url('HTML/js/megamenu/js/main.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/owl-carousel/custom.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/tabs/js/responsive-tabs.min.js')?>" type="text/javascript"></script> 
 
<script>
    $(window).load(function(){
      setTimeout(function(){

        $('.loader-live').fadeOut();
      },1000);
    })

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
