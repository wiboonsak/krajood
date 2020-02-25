<!DOCTYPE html>
<?php
 foreach ($newsDetail->result() AS $data) {}
  if($this->session->userdata('weblang') == 'en'){
        $news_title = $data->news_title;
        $news_detail = $data->news_detail;
        $news_date_add = $this->Product_model->getDayMonthYear($data->news_date_add);
        }else{
        $news_title = $data->news_title_th;
        $news_detail = $data->news_detail_th;
        $news_date_add = $this->Product_model->GetthaiDate($data->news_date_add);
        }
$imgnew = $this->Product_model->loadNewsImg($data->id);  
 foreach ($imgnew->result() AS $imgnew3){}
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Kra-Jood Thailand | กระจูด ไทยแลนด์ ผลิตภัณฑ์กระจูด จากภูมิปัญญาท้องถิ่น สร้างสรรค์เครื่องจักสานอันทรงคุณค่า สร้างรายได้ให้กับครอบครัวและชุมชน</title>
<meta name="keywords" content="กระจูด, จูด, ต้นกก, กก,  งานฝีมือ, งานแฮนด์เมด, แฮนด์เมด, กระเป๋า, ซองเอกสาร, หมวก, งานสาน, หัตถกรรม, ศิลปะหัตถกรรม, หัตถกรรมจักสาน, จักสาน, โอท๊อป, ชะอวด, นครศรีธรรมราช, ภาคใต้, สินค้าโอท๊อป, สินค้าท้องถิ่น, ภูมิปัญญา" />
<meta name="description" content="ผลิตภัณฑ์กระจูด จากภูมิปัญญาท้องถิ่น สร้างสรรค์เครื่องจักสานอันทรงคุณค่า สร้างรายได้ให้กับครอบครัวและชุมชน">
<meta name="author" content="ME-FI.COM">
<meta property="fb:app_id"        content="355179808591281"/>
<meta property="og:url"           content="<?php echo base_url('News/news_detail/').$data->id?>"/>
<meta property="og:type"          content="website"/>
<meta property="og:title"         content="<?php echo $data->news_title?>"/>
<meta property="og:description"   content="<?php echo strip_tags($data->news_detail)?>"/>
<meta property="og:image"         content="<?php echo base_url('uploadfile/news/').$imgnew3->images_name?>"/>
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
<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
<script type="text/javascript">LineIt.loadButton();</script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="stylesheet/less" type="text/css" href="<?php echo base_url('HTML/less/skin.less')?>">


<!-- Skin stylesheet -->

</head>
<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  </script>
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
                <li class="current"><a href="<?php echo base_url('News/news_detail')?>"><?php echo $this->lang->line('News');?></a></li>
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
          <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="bg2-featurebox-3">
              <div class="img-box">
                <!--<div class="postdate-box">
                  <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Admin</span> <span><i class="fa fa-calendar"></i> 5 ธ.ค. 2562</span> </div>
                </div>-->
                <?php $firstImg = $this->Product_model->getNewsImg($data->id);?>
                <img src="<?php echo base_url('uploadfile/news/') . $firstImg ?>" alt="" class="img-responsive"/>
			  </div>
              <div class="postinfo-box">
                <h4 class="dosis uppercase title"><a href="#"><?php echo $news_title?></a></h4>
                <div class="blog-post-info"><span><i class="fa fa-user"></i> By Admin</span> <span><i class="fa fa-calendar"></i> <?php echo $news_date_add?></span></div>
                <br/>
                <p><?php echo $news_detail?></p>
                <br/>
                
                                                         
							<a href="javascript:void(0)"><span>Share on</span></a>
                                                       <br>
                                                       <br>
                                                         
                                                         <div class="col-md-1" >
                                                            
                                                             <a href="javascript:void(0)"  onclick="windowOpener('500', '700', 'facebook-share', 'https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('News/news_detail/'.$data->id)?>')">
                                                             <img src="<?php echo base_url('HTML/images/facebook1.png')?>" alt="image" width="28px">
</a>
<!--                                                        <div class="fb-share-button" 
    data-href="<?php //echo base_url('News/news_detail/').$data->id?>" 
    data-layout="button">
                                                            </div>-->
  </div>
                                                        <div class="col-md-2">
							<div class="line-it-button" data-lang="th" data-type="share-b" data-ver="3" data-url="<?php echo base_url('News/news_detail/'.$data->id)?>" data-color="default" data-size="small" data-count="false" style="display: none;"></div>  
                                                        
                                                              
						</div>
                                                         


						
              </div>
                
            </div>
              
            <!--end post item-->            
            <div class="clearfix"></div>  
			</div>
          <!--end left col main-->
          
          <div class="col-md-4 col-sm-12 col-xs-12 section-white"> 
            <div class="bg2-right-col-item-holder">
              <h5 class="dosis uppercase bg2-right-col-item-title"><?php echo $this->lang->line('News');?></h5>
              <?php foreach ($getNewsDetail1->result() AS $getNewsDetail) {
     if($this->session->userdata('weblang') == 'en'){
        $news_title = $getNewsDetail->news_title;
        $news_date_add = $this->Product_model->getDayMonthYear($getNewsDetail->news_date_add);
        }else{
        $news_title = $getNewsDetail->news_title_th;
        $news_date_add = $this->Product_model->GetthaiDate($getNewsDetail->news_date_add);
        }
    $firstImg = $this->Product_model->getNewsImg($getNewsDetail->id);?>
              <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="imgbox-small left"> <img src="<?php echo base_url('uploadfile/news/') . $firstImg ?>" alt="" class="img-responsive"/></div>
                <div class="text-box-right">
                  <h6 class="uppercase nopadding dosis"><a href="<?php echo base_url('News/news_detail/').$getNewsDetail->id ?>" class="text-hover-gyellow"><?php echo $news_title?></a></h6>
                  <div class="blog-post-info padding-top-1"> <span><i class="fa fa-user"></i> By Admin</span> <span><i class="fa fa-calendar"></i> <?php echo $news_date_add?></span></div>
                </div>
              </div>
              <!--end post-->
              
              <div class="divider-line solid light margin"></div>
              <?php }?>
              <!--end post--> 
            </div>
            <!--end item holder-->
            
            <div class="bg2-right-col-item-holder">
              <h5 class="dosis uppercase bg2-right-col-item-title">Tags</h5>
              <ul class="bg2-tags">
                  <li><a href="#">กระจูด</a></li>
                  <li><a href="#">งานแฮนด์เมด</a></li>
                  <li><a href="#">กระเป๋า</a></li>
                  <li><a href="#">งานฝีมือ</a></li>
                  <li><a href="#">งานจักสาน</a></li>
                  <li><a href="#">ต้นกก</a></li>
				  <li><a href="#">ภูมิปัญญาท้องถิ่น</a></li>
              </ul>
            </div>
            <!--end item holder-->       
            
          </div>
          <!--end right col--> 
          
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
   //--------------------------------------
        	 function windowOpener(windowHeight, windowWidth, windowName, windowUri)
			{
					var centerWidth = (window.screen.width - windowWidth) / 2;
					var centerHeight = (window.screen.height - windowHeight) / 2;
    				newWindow = window.open(windowUri, windowName, 'resizable=1,scrollbars=yes,width=' + windowWidth +  ',height=' + windowHeight +  ',left=' +centerWidth + ',top=' + centerHeight);
					newWindow.focus();
					return newWindow.name;
		}
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
