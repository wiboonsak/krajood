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
<link rel="stylesheet" href="<?php echo base_url('HTML/css/creative.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/font-awesome/css/font-awesome.min.css')?>" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css')?>" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('HTML/fonts/et-line-font/et-line-font.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/settings.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/layers.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/revolution-slider/css/navigation.css')?>">
<link href="<?php echo base_url('HTML/js/owl-carousel/owl.carousel.css')?>" rel="stylesheet">
<link href="<?php echo base_url('HTML/js/owl-carousel/owl.theme.css')?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('HTML/js/jFlickrFeed/style.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/cubeportfolio/cubeportfolio.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/pro-landing.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('HTML/css/shop.css')?>" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/smart-forms/smart-forms.css')?>">
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
    
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper"> 
      <!-- START REVOLUTION SLIDER 5.0 auto mode -->
      <div id="rev_slider" class="rev_slider"  data-version="5.0">
        <ul>
          <!-- SLIDE  1 -->
          <?php foreach ($SlideList->result() AS $Slide){
              if($this->session->userdata('weblang') == 'en'){
              $slide_title = $Slide->slide_title;
              $slide_detail = $Slide->slide_detail;
              $slide_desc = $Slide->slide_desc;
              }else{
              $slide_title = $Slide->slide_title_th;
              $slide_detail = $Slide->slide_detail_th;
              $slide_desc = $Slide->slide_desc_th;
              }
            $slideImg = $this->Product_model->loadSlideImg($Slide->id,'1');
            $slideback = $this->Product_model->loadSlideImg($Slide->id,'2');
            $numslide = $slideImg->num_rows();
            $numback = $slideback->num_rows();
            if($numslide!=''){
            foreach($slideImg->result() AS $data){ }
            $img = base_url('uploadfile/banner/').$data->image_name;
            }
            if($numback!=''){
            foreach($slideback->result() AS $databack){ }
            $imgback = base_url('uploadfile/banner/').$databack->image_name;
            }
              ?>
          <li data-transition="fade"> 
            
            <!-- MAIN IMAGE --> 
            <img src="<?php echo $imgback?>" alt=""  width="1920" height="1280"> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption" 
			data-x="['left','left','center','center']" data-hoffset="['10','40','0','0']" 
			data-y="['top','top','top','top']" data-voffset="['50','120','30','10']" 
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
			data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
			 data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;" 
			data-start="1000" 
			data-responsive_offset="off" 
			data-responsive="on"			
			style="z-index: 5;text-transform:left;"> <img src="<?php echo $img?>" alt="" width="720" height="620" data-ww="['720px','302px','450','290']" data-hh="['620px','260px','387','249']" data-no-retina> </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption ce3-text-1 tp-resizeme" 
			data-x="['left','left','left','left']" data-hoffset="['820','395','80','80']" 
			data-y="['top','top','top','top']" data-voffset="['210','180','180','120']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"						 
			data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
			data-transform_out="opacity:0;s:1000;s:1000;" 
			data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
			data-start="1500" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on" 
			style="z-index: 5; white-space: nowrap;"></div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption roboto bold text-dark tp-resizeme" 
           data-x="['left','left','left','left']" data-hoffset="['870','450','100','100']" 
			data-y="['top','top','top','top']" data-voffset="['150','150','420','220']"
            data-width="['auto','auto','auto','auto']"
            data-height="['auto','auto','auto','auto']"
            data-transform_idle="o:1;"
            data-fontsize="['44','44','30','20']"
            data-lineheight="['80','80','80','60']"
            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
            data-start="2000" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on"     
            style="z-index: 5; white-space: nowrap; font-family: 'Mitr', sans-serif; font-size: 24px; line-height: 70px;"><?php echo $slide_title?> </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption roboto bold text-dark tp-resizeme" 
           data-x="['left','left','left','left']" data-hoffset="['870','450','100','100']" 
			data-y="['top','top','top','top']" data-voffset="['200','200','450','250']"
            data-width="['auto','auto','auto','auto']"
            data-height="['auto','auto','auto','auto']"
            data-transform_idle="o:1;"
            data-fontsize="['30','30','20','16']"
            data-lineheight="['150','150','150','130']"                             
            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
            data-start="2500" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on"     
            style="z-index: 5; white-space: nowrap; font-family: 'Mitr', sans-serif; font-size: 20px; line-height: 30px;"><?php echo $slide_detail?> </div>
            
            <!-- LAYER NR. 3 -->
<!--            <div class="tp-caption roboto bold text-dark tp-resizeme" 
           data-x="['left','left','left','left']" data-hoffset="['870','450','100','100']" 
			data-y="['top','top','top','top']" data-voffset="['250','250','490','290']"
            data-width="['auto','auto','auto','auto']"
            data-height="['auto','auto','auto','auto']"
            data-transform_idle="o:1;"
            data-fontsize="['26','26','18','14']"
            data-lineheight="['130','130','130','100']"                             
            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
            data-start="3000" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on" 
    
            style="z-index: 5; white-space: nowrap; font-family: 'Mitr', sans-serif; font-size: 16px; line-height: 30px;">อ.ชะอวด นครศรีธรรมราช</div>-->
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption br-text-3 tp-resizeme" 
			data-x="['left','left','left','left']" data-hoffset="['870','450','100','100']" 
			data-y="['top','top','top','top']" data-voffset="['370','370','580','380']" 
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
			data-fontsize="['16','16','14','12']"
			data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
			data-transform_out="opacity:0;s:1000;s:1000;" 
			data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
			data-start="3500" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on" 
			style="z-index: 5; white-space: nowrap; font-family: 'Mitr', sans-serif; font-size: 16px; "><?php echo $slide_desc?></div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption sbut2"
			data-x="['left','left','left','left']" data-hoffset="['870','450','100','100']" 
			data-y="['top','top','top','top']" data-voffset="['470','450','680','480']"
			data-speed="800"
			data-start="4000"
			data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
			data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;" 
			data-endspeed="300"
			data-captionhidden="off"
                        style="z-index: 6"> <a href="<?php echo $Slide->learnMore?>"><?php echo $this->lang->line('Viewproducts');?></a> </div>
          </li>
          <?php }?>
        </ul>
      </div>
      <!-- END REVOLUTION SLIDER --> 
    </div>
    <div class="clearfix"></div>
    <!-- END OF SLIDER WRAPPER -->
    
	  
	  
	  
	 <section class="sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 nopadding">
            <div class="sec-title-container text-center">
              <div class="pl-title-line-1"></div>
              <h3 class="uppercase font-weight-7 less-mar-1"><?php echo $this->lang->line('KrajoodProduct');?></h3>
              <div class="clearfix"></div>
              <p class="by-sub-title"><?php echo $this->lang->line('Creating');?></p>
            </div>
          </div>
          <div class="clearfix"></div>
          <!--end title-->
          
          <div class="col-md-6 margin-bottom">
            <h3 class="uppercase font-weight-5"><?php echo $this->lang->line('KrajoodNot');?></h3>
            <p><?php echo $this->lang->line('Withthewisdom');?></p>
            <div class="clearfix"></div>
            <br/>
            <ul class="pl-thumbs-list">
              <li><img src="<?php echo base_url('HTML/images/product/s-product-1.jpg')?>" alt="" class="img-responsive"/></li>
              <li><img src="<?php echo base_url('HTML/images/product/s-product-2.jpg')?>" alt="" class="img-responsive"/></li>
              <li><img src="<?php echo base_url('HTML/images/product/s-product-3.jpg')?>" alt="" class="img-responsive"/></li>
            </ul>
            <div class="clearfix"></div>
            <br/>
            <a class="btn btn-dark-3 uppercase" href="<?php echo base_url('Welcome/aboutus');?>"><?php echo $this->lang->line('Aboutus');?></a> </div>
          <!--end item-->
          
          <div class="col-md-6"> <img src="<?php echo base_url('HTML/images/product/product5.png')?>" alt="" class="img-responsive"/> </div>
          <!--end item--> 
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
  
	<section class="parallax-56">
      <div class="container-fluid nopadding">
	<div class="parallax-overlay bg-opacity-4">
        <div class="container sec-tpadding-3 sec-bpadding-3">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <div class="col-xs-12 text-center">
                <div class="sec-title-container less-padding-6 text-center">
                  <h2 class="less-mar-1 text-white font-weight-b uppercase title"><?php echo $this->lang->line('KrajoodProduct');?></h2>
                  <h3 class="uppercase font-weight-3 text-white"><?php echo $this->lang->line('Creating');?></h3>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <!--end title-->
              <?php foreach ($getCategory1->result() AS $Category){}?>
              <p style="color:#FFFFFF;"><?php echo $this->lang->line('Withthewisdom2');?></p>
              <br/>
              <br/>
              <a class="btn btn-gyellow-2 btn-medium uppercase" href="<?php echo base_url('Product/index/'.$Category->id)?>"><?php echo $this->lang->line('Allproducts');?></a> </div>
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
            <?php foreach ($getCategory1->result() AS $Category1){}
            if($this->session->userdata('weblang') == 'en'){
            $category_title = $Category1->category_title;
            $title1 = $Category1->title1;
            $title2 = $Category1->title2;
            }else{
            $category_title = $Category1->category_title_th;
            $title1 = $Category1->title1_th;
            $title2 = $Category1->title2_th;
            }
            
            ?>
                
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="sp-feature-box-1">
              <div class="col-md-8 nopadding"><img src="<?php echo base_url('uploadfile/'.$Category1->images)?>" alt="" class="img-responsive"/></div>
              <div class="col-md-4 nopadding"> <br/>
                <h3 class="uppercase font-weight-b less-mar-1"><?php echo $category_title?></h3>
                <h5 class="font-weight-3 uppercase"><?php echo $title1?></h5>
                <p class="uppercase text-gyellow"><?php echo $title2?></p>
                <div class="clearfix"></div>
                <br/>
                <a class="btn btn-border dark uppercase btn-small" href="<?php echo base_url('Product/index/'.$Category1->id)?>"><?php echo $this->lang->line('Viewproducts');?></a> </div>
            </div>
            <!--end feature box--> 
          </div>
          <!--end item--> 
          <div class="col-md-6 col-sm-6 col-xs-12">
              <?php $getCategoryno1 = $this->Product_model->getCategory('1','2',$Category1->id);
                    foreach ($getCategoryno1->result() AS $Categoryno1){
                    if($this->session->userdata('weblang') == 'en'){
                    $category_titleno1 = $Categoryno1->category_title;
                    $title1no1 = $Categoryno1->title1;
                    $title2no1 = $Categoryno1->title2;
                    }else{
                    $category_titleno1 = $Categoryno1->category_title_th;
                    $title1no1 = $Categoryno1->title1_th;
                    $title2no1 = $Categoryno1->title2_th;
                    }
              ?>
            <div class="sp-feature-box-2 less-padd">
              <div class="col-md-7 nopadding"><img src="<?php echo base_url('uploadfile/'.$Categoryno1->images)?>" alt="" class="img-responsive"/></div>
              <div class="col-md-5"> <br/>
                <h3 class="uppercase font-weight-b less-mar-2"><?php echo $category_titleno1?></h3>
                <h5 class="font-weight-3 uppercase nopadding"><?php echo $title1no1?></h5>
                <p class="uppercase text-gyellow"><?php echo $title2no1?></p>
                <div class="clearfix"></div>
                <br/>
                <a class="btn btn-border dark uppercase btn-small" href="<?php echo base_url('Product/index/'.$Categoryno1->id)?>"><?php echo $this->lang->line('Viewproducts');?></a> </div>
            </div>
            <!--end feature box-->
                    <?php }?>
            <!--end feature box--> 
          </div>
          <!--end item--> 
        </div>
      </div>
    </section>

    <div class="clearfix"></div>
    <!-- end section -->
    

	  
	    
<section class="sec-padding section-light">
  <div class="container">
  <div class="row">
   		<div class="col-xs-12 nopadding">
            <div class="sec-title-container text-center">
              <div class="pl-title-line-1"></div>
              <h3 class="uppercase font-weight-7 less-mar-1"><?php echo $this->lang->line('Newproduct');?></h3>
              <div class="clearfix"></div>
              <p class="by-sub-title"><?php echo $this->lang->line('Creating');?></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <!--end title-->
	  
  	<div class="col-md-12 nopadding">
            <?php foreach ($getproductdetail->result() AS $productdetail){
                    if($this->session->userdata('weblang') == 'en'){
                    $product_name = $productdetail->product_name;
                    $product_title = $productdetail->product_title;
                    }else{
                    $product_name = $productdetail->product_name_th;
                    $product_title = $productdetail->product_title_th;
                    }
                $imglist = $this->Product_model->loadProductImg($productdetail->id,'1');
                foreach ($imglist->result() AS $imglist2){}
                ?>
  		<div class="col-md-4 col-sm-6 col-xs-12">
            <div class="sp-feature-box-3 margin-bottom">
				  <div class="img-box"> <a href="<?php echo base_url('Product/product_detail/'.$productdetail->product_category.'/'.$productdetail->id)?>" class="view-btn uppercase"><?php echo $this->lang->line('Detail');?></a>
					<div class="badge">Hot</div>
					<img src="<?php echo base_url('uploadfile/product/'.$imglist2->imge_name)?>" alt="" class="img-responsive"/> </div>
				  <div class="clearfix"></div>
				  <br/>
				  <h4 class="less-mar-1"><?php echo $product_name?></h4>
				  <p><?php echo $product_title?></p>
				  <h5 class="text-gyellow"><?php echo $this->lang->line('Price');?> <?php echo number_format($productdetail->product_price,2)?> <?php echo $this->lang->line('Baht');?></h5>
				  <br/>
				  <a class="btn btn-border light btn-small" onclick="addtocart('<?php echo $productdetail->id?>','1','<?php echo $productdetail->product_price?>','<?php echo $this->session->userdata('OrderNumber');?>')"><?php echo $this->lang->line('Addtocart');?></a> 
	  		</div>
		</div>
            <?php }?>
        <!--end item-->

  </div>
  <!--end column -->

  
  </div>
  </div>
  </section>
<div class="clearfix"></div>
  <!-- end section -->  

	   
    <section class="sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 nopadding">
            <div class="sec-title-container text-center">
              <div class="pl-title-line-1"></div>
              <h4 class="uppercase font-weight-7 less-mar-1"><?php echo $this->lang->line('News');?></h4>
              <div class="clearfix"></div>
              <p class="by-sub-title"><?php echo $this->lang->line('donotmiss');?></p>
            </div>
          </div>
          <div class="clearfix"></div>
          <!--end title-->
          <?php foreach ($getNewsDetail1->result() AS $NewsDetail1){}
          if($this->session->userdata('weblang') == 'en'){
                    $news_title = $NewsDetail1->news_title;
                    $news_detail = $NewsDetail1->news_detail;
                    $date_add = $this->Product_model->getDayMonthYear($NewsDetail1->news_date_add);
                    
                    }else{
                    $news_title = $NewsDetail1->news_title_th;
                    $news_detail = $NewsDetail1->news_detail_th;
                    $date_add = $this->Product_model->GetthaiDate($NewsDetail1->news_date_add);
                    }
          $loadNewsImg = $this->Product_model->loadNewsImg($NewsDetail1->id,'1');
          foreach ($loadNewsImg->result() AS $loadNewsImg2){}
          ?>
          <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="pl-feature-box-3">
              <h3 class="uppercase font-weight-6 title"><a href="<?php echo base_url('News/news_detail/').$NewsDetail1->id ?>"><?php echo $news_title?></a></h3>
              <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Admin</span> <span><i class="fa fa-calendar"></i> <?php echo $date_add?></span></div>
              <br/>
              <p><?php echo $news_detail?></p>
              <div class="clearfix"></div>
              <br/>
              <a class="btn btn-border dark uppercase" href="<?php echo base_url('News/news_detail/').$NewsDetail1->id ?>"><?php echo $this->lang->line('Readdetails');?></a> </div>
          </div>
          <!--end item-->
          
          <div class="col-md-7 col-sm-7 col-xs-12"> <img src="<?php echo base_url('uploadfile/news/'.$loadNewsImg2->images_name)?>" alt="" class="img-responsive" style="width: 630px;height: 360px;"/> </div>
          <!--end item-->
          <?php  $getNewsDetailno1 = $this->Product_model->getNewsDetail1('1',$NewsDetail1->id,'-100','-100');
                foreach ($getNewsDetailno1->result() AS $NewsDetailno1){}
                if($this->session->userdata('weblang') == 'en'){
                    $news_titleno1 = $NewsDetailno1->news_title;
                    $news_detailno1 = $NewsDetailno1->news_detail;
                    $date_addno1 = $this->Product_model->getDayMonthYear($NewsDetailno1->news_date_add);
                    
                    }else{
                    $news_titleno1 = $NewsDetailno1->news_title_th;
                    $news_detailno1 = $NewsDetailno1->news_detail_th;
                    $date_addno1 = $this->Product_model->GetthaiDate($NewsDetailno1->news_date_add);
                    }
                $loadNewsImg1 = $this->Product_model->loadNewsImg($NewsDetailno1->id,'1');
          foreach ($loadNewsImg1->result() AS $loadNewsImg3){}
          ?>
          <div class="clearfix"></div>
          <div class="col-divider-margin-3"></div>
          <div class="col-md-7 col-sm-7 col-xs-12"> <img src="<?php echo base_url('uploadfile/news/'.$loadNewsImg3->images_name)?>" alt="" class="img-responsive" style="width: 630px;height: 360px;"/> </div>
          <!--end item-->
          
          <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="pl-feature-box-3">
              <h3 class="uppercase font-weight-6 title"><a href="<?php echo base_url('News/news_detail/').$NewsDetailno1->id ?>"><?php echo $news_titleno1?></a></h3>
              <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Admin</span> <span><i class="fa fa-calendar"></i> <?php echo $date_addno1?></span></div>
              <br/>
              <p><?php echo $news_detailno1?></p>
              <div class="clearfix"></div>
              <br/>
              <a class="btn btn-border dark uppercase" href="<?php echo base_url('News/news_detail/').$NewsDetailno1->id ?>"><?php echo $this->lang->line('Readdetails');?></a> </div>
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
		arrows:{enable:true},
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
	gridheight:[740,640,830,580],
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
  <script>
 
//  window.fbAsyncInit = function() {
//    FB.init({
//      appId      : '490686098549343',
//      cookie     : true,
//      xfbml      : true,
//      version    : 'v3.3'
//    });
//      
//    FB.AppEvents.logPageView();   
//      
//  };
//
//  (function(d, s, id){
//     var js, fjs = d.getElementsByTagName(s)[0];
//     if (d.getElementById(id)) {return;}
//     js = d.createElement(s); js.id = id;
//     js.src = "https://connect.facebook.net/en_US/sdk.js";
//     fjs.parentNode.insertBefore(js, fjs);
//   }(document, 'script', 'facebook-jssdk'));
//   function fbLogin() {
//    FB.login(function (response) {
//        if (response.authResponse) {
//            if(response.status){
//            if(response.status=="connected"){
//               getFbUserData();
//            }}
//        } else {
//            // document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
//        }
//    }, {scope: 'email'});
//     $('#login').modal('hide');
//}
//
//function checkLoginState() {
//  FB.getLoginStatus(function(response) {
//    statusChangeCallback(response);
//  });
//}
//// Fetch the user profile data from facebook
//function getFbUserData(){
//
//    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,picture'},
//    function (response) {
//         var mem_id = response.id;
//         var name = response.first_name;
//         var last = response.last_name;
//         var email = response.email;
//         //alert(mem_id);
//         $.ajax({
//                    url: "http://kra-joodthailand.com/DEMO/Welcome/get_fac",
//                    datatype: 'html',
//                    type: "POST",
//                    data: ({
//                      fid:mem_id,
//                      name:name,
//                      last:last,
//                      email:email
//                  }),
//                  success:function(data) {
//                     window.location.reload(true);
//                  }
//         });
//
//    return response.id;
//    });
//}
 //---------------------------------
                function addtocart(product_id,amount,price,OrderNumber){
                    $.post('<?php echo base_url('Product/addtocart') ?>', {product_id:product_id,amount:amount,price:price}, function (data) {
                        if(data!=''){
                            $.post('<?php echo base_url('Product/countcart') ?>', {}, function (data1) { 
                                if(data1!=''){
                                    $('#cartnumber').text(data1);
                                }else{
                                    $('#cartnumber').text('0');
                                }
                                if(OrderNumber==''){
                                    window.location.href = "<?php echo base_url('Welcome')?>";
                                }
                                });
                                $('#activeli').removeClass('active');
                }else{
                alert('ว่าง');
                }
                 });
                }
                //------------------------------------
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

</script>
<script src="<?php echo base_url('HTML/js/functions/functions.js')?>"></script>

</body>
</html>
