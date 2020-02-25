<?php $this->lang->load('content', $this->session->userdata('weblang'));
$shoping_cart = $this->uri->segment(2);
?>


<script type="text/javascript" src="https://gateway.autodigi.net/bundle.js?wid=5dfb3c6c0ebf63001383171f"></script>
<div class="topbar topbar-padding">
      <div class="container">
        <div class="topbar-left-items">
          <ul class="toplist toppadding pull-left paddtop1">            
            <li style="padding: 0px !important"><i class="fa fa-phone"></i> (+66) 089-7240699</li>
          </ul>
        </div>
        <!--end left-->
        
        <div class="topbar-right-items pull-right">
          <ul class="toplist toppadding">
              <?php if($this->session->userdata('user_idfontend')==""){?>
            <li class="lineright"><a href="#" data-toggle="modal" data-target="#Login"><?php echo $this->lang->line('Login');?></a></li>
            <li class="lineright"><a href="#" data-toggle="modal" data-target="#Register"><?php echo $this->lang->line('Register');?></a></li>
              <?php }else{?>
             <li class="lineright"><a href="#" ><?php if($this->session->userdata('user_type')=='m'){echo $this->session->userdata('user_namefontend');}else{echo $this->session->userdata('user_namefontend').' '.$this->session->userdata('user_lastnamefontend');}?></a></li>
             <li class="lineright"><a href="<?php echo base_url('Welcome/logoutdata')?>" ><?php echo $this->lang->line('Logout');?></a></li>
              <?php }?>
            <li><a href="<?php echo base_url('SwitchLang/index/th')?>"><img src="<?php echo base_url('HTML/images/icon-th.png')?>"></a>&nbsp;&nbsp;<a href="<?php echo base_url('SwitchLang/index/en')?>"><img src="<?php echo base_url('HTML/images/icon-en.png')?>"></a></li>
           
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!--end topbar-->
	    
	  
    <div class="col-md-12 nopadding">
      <div class="header-section white dark-dropdowns style1 links-dark light pin-style">
        <div class="container">
          <div class="mod-menu">
            <div class="row">
              <div class="col-sm-2"> <a href="<?php echo base_url('Welcome');?>" title="" class="logo mar-4"> <img src="<?php echo base_url('HTML/images/logo/logo.png')?>" alt=""> </a> </div>
              <div class="col-sm-10">
                <div class="main-nav">
                  <ul class="nav navbar-nav top-nav">
                    <li class="search-parent"> <a href="javascript:void(0)" title=""><i aria-hidden="true" class="fa fa-search" style="font-size: 20px !important"></i></a>
                      <div class="search-box">
                        <div class="content">
                          <div class="form-control">
                            <input type="text" placeholder="คำค้นหา เช่น กระเป๋า หมวก เสื่อ กระจูด" style="color:#EDEDED" />
                            <a href="#" class="search-btn"><i aria-hidden="true" class="fa fa-search" style="font-size: 20px; color: #151515 !important"></i></a> </div>
                          <a href="#" class="close-btn">x</a> </div>
                      </div>
                    </li>
                    <?php  if($this->session->userdata('OrderNumber')!=''){?>
                    <li id="activeli" class="cart-parent" style="font-family: 'Mitr', sans-serif;"> <a href="javascript:void(0)" onclick="cartdata('<?php echo $this->session->userdata('OrderNumber')?>')"> <i aria-hidden="true" class="fa fa-shopping-cart" style="font-size: 20px !important"></i> <?php if($this->session->userdata('OrderNumber')!=''){
                    $sumamount = $this->Product_model->countcart($this->session->userdata('OrderNumber'));    }else{
                    $sumamount = '0';
                    }
                    
?>
                            <span class="number" id="cartnumber"> <?php echo $sumamount?> </span> 
                        </a>
                      <div class="cart-box">
                          <div class="content" id="cartdiv">
                          
                        </div>
                      </div>
                    </li>
                    <?php }else{?>
                    <li id="activeli" class="cart-parent" style="font-family: 'Mitr', sans-serif;"> <a href="javascript:void(0)" > <i aria-hidden="true" class="fa fa-shopping-cart" style="font-size: 20px !important"></i> <span class="number" id="cartnumber"> 0 </span> 
                        </a>
                      <div class="cart-box">
                          <div class="content" id="cartdiv">
                          <div class="row">
           <div class="col-xs-4"> <span style="color:#727272" id="numorder">0</span> <?php echo $this->lang->line('Order');?> </div>
                            <div class="col-xs-8 text-right"> <span><?php echo $this->lang->line('Total');?></span> <span id="total">0.00</span> <span><?php echo $this->lang->line('Baht');?></span> </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-6" > <a href="javascript:void(0)" title="View Cart" class="btn btn-block btn-warning" style="cursor:not-allowed" disabled ><?php echo $this->lang->line('Shoppingcart');?></a> </div>
                            <div class="col-xs-6"> <a href="javascript:void(0)" title="Check out" class="btn btn-block btn-primary" style="cursor:not-allowed" disabled ><?php echo $this->lang->line('ShopingCheckout');?></a> </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php }?>
                     <form action="<?php echo base_url('Welcome/fblogin')?>" method="post" name="form2" enctype="multipart/form-data" >
                                            <input style="font-family: 'Prompt', sans-serif !important" type="hidden" class="field-text" name="Emailfb" id="Emailfb"  value="">
                                            <input style="font-family: 'Prompt', sans-serif !important" type="hidden" class="field-text" name="fristnamefb" id="fristnamefb"  value="">
                                            <input style="font-family: 'Prompt', sans-serif !important" type="hidden" class="field-text" name="lastnamefb" id="lastnamefb"  value="">
                                            <input style="font-family: 'Prompt', sans-serif !important" type="hidden" class="field-text" name="idfb" id="idfb"  value="">

                                            <input type='hidden' value='2' name='adminlogin'>
   
                          
                                    
                                </form>
                    <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                  </ul>
<!--                    <button onclick="closesecsion()">close</button>-->
                  <div id="menu" class="collapse">
                    <ul class="nav navbar-nav">
                        <li class="mega-menu six-col active"> <a href="<?php echo base_url('Welcome');?>"><?php echo $this->lang->line('home');?></a></li>
                        <li> <a style="cursor: pointer"><?php echo $this->lang->line('Product');?></a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                            <?php $getCategory = $this->Product_model->getCategory('1');
                                    foreach ($getCategory->result() AS $Category){
                                        if($this->session->userdata('weblang') == 'en'){
                                        $category_title = $Category->category_title;
                                        }else{
                                        $category_title = $Category->category_title_th;
                                        }
                                        ?>
                          <li> <a href="<?php echo base_url('Product/index/'.$Category->id)?>"><?php echo $category_title?> <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                               <?php $getdetailcateid = $this->Product_model->getdetailcateid($Category->id);
                                    foreach ($getdetailcateid->result() AS $detailcateid){
                                         if($this->session->userdata('weblang') == 'en'){
                                        $product_name = $detailcateid->product_name;
                                        }else{
                                        $product_name = $detailcateid->product_name_th;
                                        }
                                        ?> 
                              <li> <a href="<?php echo base_url('Product/product_detail/'.$Category->id.'/'.$detailcateid->id)?>"><?php echo $product_name?></a> </li>
                                    <?php }?>
                            </ul>
                          </li>
                            <?php }?>
                        </ul>
                      </li>
                      <li> <a href="<?php echo base_url('Welcome/aboutus')?>"><?php echo $this->lang->line('Aboutus');?></a></li>
					  <li> <a href="<?php echo base_url('News')?>"><?php echo $this->lang->line('News');?></a></li>
					  <li> <a href="<?php echo base_url('Payment')?>"><?php echo $this->lang->line('Payment');?></a></li>
					  <li> <a href="<?php echo base_url('Welcome/contact')?>"><?php echo $this->lang->line('Contact');?></a></li>
                                          <input type="hidden" id="shoping_cart" value="<?php echo $shoping_cart?>">
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
    </div>
    <!--end menu-->
    
    <div class="clearfix"></div>