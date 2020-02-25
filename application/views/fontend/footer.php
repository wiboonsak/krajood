  <section style="background-color: #e4ddd3; padding: 40px 0 40px 0 !important">
      <div class="container ">
        <div class="row"> <br/>
          <div class="col-md-4 col-sm-12 colmargin clearfix margin-bottom">
            <div class="footer-logo"><img src="<?php echo base_url('HTML/images/logo/logo.png')?>" alt=""/></div>
            <ul class="fo-address-info border-light">
              <li><?php echo $this->lang->line('address');?></li>
              <li><i class="fa fa-phone"></i> <?php echo $this->lang->line('Telephone');?> <a href="tel:+660897240699">(+66) 089-7240699</a></li>
			  <li><i class="fa fa-envelope"></i> <?php echo $this->lang->line('email');?> <a href="mailto:Chalinee072@hotmail.com" target="_blank">Chalinee072@hotmail.com</a> </li>
			  <li class="last"><i class="fa fa-wechat"></i>  <?php echo $this->lang->line('line');?> <a href="https://line.me/R/ti/p/~ttxp003" target="_blank">ttxp003</a></li>
			  <li><a href="https://line.me/R/ti/p/~ttxp003" target="_blank"><img src="<?php echo base_url('HTML/images/line.jpg')?>" class="img-responsive" style="width: 30%"></a></li>             
            </ul>
          </div>
          <!--end item-->
          
                   
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <h4 class="uppercase less-mar3 font-weight-5"><?php echo $this->lang->line('Menu');?></h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip dark"></div>
            <ul class="footer-quick-links-4 dark-hover">
              <li><a href="<?php echo base_url('Welcome');?>"><i class="fa fa-angle-right"></i> <?php echo $this->lang->line('home');?></a></li>
              <li><a href="<?php echo base_url('Product')?>"><i class="fa fa-angle-right"></i> <?php echo $this->lang->line('Product');?></a></li>
              <li><a href="<?php echo base_url('Welcome/aboutus')?>"><i class="fa fa-angle-right"></i> <?php echo $this->lang->line('Aboutus');?></a></li>
              <li><a href="<?php echo base_url('News')?>"><i class="fa fa-angle-right"></i> <?php echo $this->lang->line('News');?></a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> <?php echo $this->lang->line('Payment');?></a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> <?php echo $this->lang->line('Paymentnotify');?></a></li>
			  <li><a href="<?php echo base_url('Welcome/contact')?>"><i class="fa fa-angle-right"></i> <?php echo $this->lang->line('Contact');?></a></li>
            </ul>
          </div>
          <!--end item-->
          
          <div class="col-md-5 col-sm-12 col-xs-12 bmargin clearfix margin-bottom">
            <div class="item-holder">
              <h4 class="uppercase less-mar3 font-weight-5"><?php echo $this->lang->line('Follow');?></h4>
              <div class="footer-title-bottomstrip dark"></div>
              <div class="clearfix"></div>
            	<iframe src="https://www.facebook.com/plugins/page.php?	href=https%3A%2F%2Fwww.facebook.com%2FOTOPNakornsri86%2F&tabs=timeline&width=400&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=359720631385500" width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              <div class=" divider-line solid dark opacity-1 "></div>
            </div>
          </div>
          <!--end item--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->
	  

    <section class="sec-moreless-padding">
      <div class="container">
        <div class="row">
          <div class="fo-copyright-holder text-center">
            <div class="social-iconbox">
              <ul class="sc-icons">
              
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
            Copyright © 2019 Kra-Jood Thailand. All rights reserved. Development by ME-FI.com</div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section --> 
    
    <a href="#" class="scrollup"></a><!-- end scroll to top of the page--> 
    <script type="text/javascript">
//     //---------------------------------
//          window.fbAsyncInit = function() {
//    // FB JavaScript SDK configuration and setup
//    FB.init({
//      appId      : '490686098549343', // FB App ID
//      cookie     : true,  // enable cookies to allow the server to access the session
//      xfbml      : true,  // parse social plugins on this page
//      version    : 'v3.3' // use graph api version 2.8
//    });
//    
//    // Check whether the user already logged in
//    FB.getLoginStatus(function(response) {
//        if (response.status === 'connected') {
//            //display user data
//            getFbUserData(false);
//        }
//    });
//};
//
//// Load the JavaScript SDK asynchronously
//(function(d, s, id) {
//    var js, fjs = d.getElementsByTagName(s)[0];
//    if (d.getElementById(id)) return;
//    js = d.createElement(s); js.id = id;
//    js.src = "//connect.facebook.net/en_US/sdk.js";
//    fjs.parentNode.insertBefore(js, fjs);
//}(document, 'script', 'facebook-jssdk'));
//
//// Facebook login with JavaScript SDK
//function fbLogin(clk) {
//    FB.login(function (response) {
//        if (response.authResponse) {
//            // Get and display the user profile data
//            getFbUserData(clk);
//        } else {
//            document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
//        }
//    }, {scope: 'email'});
//}
//
//// Fetch the user profile data from facebook
//function getFbUserData(clk){
//    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
//    function (response) {
////        document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
////        document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
////        document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
////        document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
//    $('#idfb').val(response.id);
//    $('#Emailfb').val(response.email);
//    $('#fristnamefb').val(response.first_name);
//    $('#lastnamefb').val(response.last_name);
//    if(clk == true){
//    document.form2.submit();
//    }
//    });
//}






                window.fbAsyncInit = function() {
    FB.init({
      appId      : '490686098549343',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.3'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            if(response.status){
            if(response.status=="connected"){
               getFbUserData();
            }}
        } else {
            // document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        }
    }, {scope: 'email'});
     $('#login').modal('hide');
}

function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
    function (response) {
 var mem_id = response.id;
         var name = response.first_name;
         var last = response.last_name;
         var email = response.email;
        // alert('fid'+mem_id+'-n-'+name+'-l-'+last.'-e-'+email);
   $.post('<?php echo base_url('Welcome/get_fac') ?>', {fid:mem_id,name:name,last:last,email:email}, function (data) {
                        if(data!=''){
                          //alert(data);
                           window.location.reload(true);
                }
                 });
    });
}


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
//                      if(data!=''){
//                     window.location.reload(true);
//                      }
//                  }
//         });
//
//    return response.id;
//    });
//}




                function cartdata(order_id){
                   
                    $.post('<?php echo base_url('Product/cartdata') ?>', {order_id:order_id}, function (data) {
                        if(data!=''){
                          
                           $('#cartdiv').empty();
                           $('#cartdiv').html(data);
                }
                 });
                }
     //---------------------------------
                function chageamount(amount,orderdetail_id){
                   var shoping_cart = $('#shoping_cart').val();
                    $.post('<?php echo base_url('Product/chageamount') ?>', {amount:amount,orderdetail_id:orderdetail_id}, function (data) {
                        if(data!=''){
                           $('#total').text(data);
                           $.post('<?php echo base_url('Product/countcart') ?>', {}, function (data1) { 
                                if(data1!=''){
                                    $('#cartnumber').text(data1);
                                    if(shoping_cart == 'shoping_cart'){
                               $('#shopamount'+orderdetail_id).val(amount);
                               $('#shopsumprice').text(data);
                               $('#shopsumprice1').val(data);
                               $.post('<?php echo base_url('Product/sumcartbyid') ?>', {id:orderdetail_id}, function (data2) { 
                                if(data2!=''){
                                    $('#pricesum'+orderdetail_id).text(data2);
                                }else{
                                    $('#pricesum'+orderdetail_id).text('0');
                                }
                                });
                                          if ($('#radio1').is(':checked')) {
                 shipingrate(60,10);
                 }
                 if ($('#radio2').is(':checked')) {
                 shipingrate(80,10);
                }
                           }
                                }else{
                                    $('#cartnumber').text('0');
                                }
                                });
                           
                }
                 });
                 
                }
     //---------------------------------
                function deletecart(orderdetail_id,OrderNumber){
                   var shoping_cart = $('#shoping_cart').val();
                    $.post('<?php echo base_url('Product/deletecart') ?>', {orderdetail_id:orderdetail_id}, function (data) {
                        if(data!=''){
                            $('#li'+orderdetail_id).remove();
                            
                          $.post('<?php echo base_url('Product/sumcart') ?>', {order_id:OrderNumber}, function (data1) {
                        if(data1!=''){
                            $('#total').text(data1);
                            $.post('<?php echo base_url('Product/numorder') ?>', {order_id:OrderNumber}, function (data3) { 
                                if(data3!=''){
                                    $('#numorder').text(data3);
                                }
                                });
                           
                           $.post('<?php echo base_url('Product/countcart') ?>', {}, function (data2) { 
                                if(data2!=''){
                                    $('#cartnumber').text(data2);
                                    if(shoping_cart == 'shoping_cart'){
                             $('#tr'+orderdetail_id).remove();
                              $('#shopsumprice').text(data1);
                              $('#shopsumprice1').val(data1);
                                        if ($('#radio1').is(':checked')) {
                 shipingrate(60,10);
                 }
                 if ($('#radio2').is(':checked')) {
                 shipingrate(80,10);
                }
                             }
                                    
                                }else{
                                    $('#cartnumber').text('0');
                                }
                                });
                           
                }
                 });
                            
                }
                 });
                }
     //---------------------------------
                function closesecsion(){
                   
                    $.post('<?php echo base_url('Product/closesecsion') ?>', {}, function (data) {
                        if(data!=''){
                        
                           
                           
                }
                 });
                }
    </script> 