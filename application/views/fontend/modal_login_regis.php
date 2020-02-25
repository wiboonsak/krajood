
<!-- Modal Login -->
  <div class="modal fade" id="Login" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $this->lang->line('Login');?></h4>
        </div>
        <div class="modal-body">		
				  <div class="row">
					<div class="smart-wrap">
					<div class="smart-forms">
						<form method="post" action="/" id="contact">
							<div class="form-body">
								<div class="spacer-b30">
									<div class="tagline"><span><?php echo $this->lang->line('Login');?></span></div><!-- .tagline -->
								</div>   

								<div class="section">
									<label class="field prepend-icon">
										<input type="text" name="usernamelogin" id="usernamelogin" class="gui-input" placeholder="Email">
										<span class="field-icon"><i class="fa fa-user"></i></span>  
									</label>
								</div><!-- end section -->                    

								<div class="section">
									<label class="field prepend-icon">
                                                                            <input type="password" name="passwordlogin" id="passwordlogin" class="gui-input" placeholder="Password">
										<span class="field-icon"><i class="fa fa-lock"></i></span>  
									</label>
								</div><!-- end section -->  

								<div class="section">
									<label class="switch block">
										<input type="checkbox" name="remember" id="remember" checked>
										<span class="switch-label" for="remember" data-on="YES" data-off="NO"></span> 
										<span style="font-family: 'Mitr', sans-serif; "> <?php echo $this->lang->line('Remember');?></span>
									</label>
									<div style="float: right; margin-top: -25px;"><a href="#"><i class="fa fa-question-circle"></i> <?php echo $this->lang->line('Forgot');?></a></div>
								</div><!-- end section -->       
								
								<div style="text-align: center;">
                                                                    <button type="button" class="button btn-primary" style="font-family: 'Mitr', sans-serif; " onclick="login()"> <?php echo $this->lang->line('Login');?> </button>
								</div><!-- end .form-footer section -->      
								
																

								<div class="spacer-t30 spacer-b30">
									<div class="tagline"><span> <?php echo $this->lang->line('Orlogin');?> </span></div><!-- .tagline -->
								</div>
								
								
								<div class="section" style="text-align: center;">
									<a href="#" class="button btn-social facebook span-left" onclick="fbLogin()" id="fbLink" data-dismiss="modal"> <span><i class="fa fa-facebook"></i></span> Facebook </a>
									<!--<a href="#" class="button btn-social twitter span-left">  <span><i class="fa fa-twitter"></i></span> Twitter </a>-->
								</div><!-- end section -->
								<div class="spacer-t30 spacer-b30">
									<div class="tagline"><span> <?php echo $this->lang->line('Orlogin');?> </span></div><!-- .tagline -->
								</div>
								
								<div class="section" style="text-align: center;">
									<a href="#" data-toggle="modal" data-target="#Register" class="button btn-social twitter span-left"> <span><i class="fa fa-user-plus"></i></span> <?php echo $this->lang->line('Orlogin');?> </a>
									<!--<a href="#" class="button btn-social twitter span-left">  <span><i class="fa fa-twitter"></i></span> Twitter </a>-->
								</div><!-- end section -->
								
								
							</div><!-- end .form-body section -->
							
						</form>
                                           
					</div><!-- end .smart-forms section -->
				</div><!-- end .smart-wrap section -->

				  </div>
			
         
        </div>
    <!--    <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
    </div>
  </div>
	
	
	
<!-- Modal Register -->
  <div class="modal fade" id="Register" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $this->lang->line('Register');?></h4>
        </div>
        <div class="modal-body">		
				  <div class="row">
					<div class="smart-wrap">
					<div class="smart-forms">
                                            <form method="post"  id="Registerform" name="Registerform">
							<div class="form-body">
								<div class="spacer-b30">
									<div class="tagline"><span><?php echo $this->lang->line('Fillout');?></span></div><!-- .tagline -->
								</div>   
								
								
								<div class="section">
									<label class="field prepend-icon">
										<input type="text" name="nameRegister" id="nameRegister" class="gui-input" placeholder="<?php echo $this->lang->line('NameSurname');?>">
										<span class="field-icon"><i class="fa fa-lock"></i></span>  
									</label>
								</div><!-- end section --> 
								
								<div class="section">
									<label class="field prepend-icon">
										<input type="text" name="telRegister" id="telRegister" class="gui-input" placeholder="<?php echo $this->lang->line('Telephone');?>">
										<span class="field-icon"><i class="fa fa-lock"></i></span>  
									</label>
								</div><!-- end section --> 
								
								<div class="section">
									<label class="field prepend-icon">
										<input type="text" name="LineRegister" id="LineRegister" class="gui-input" placeholder="<?php echo $this->lang->line('line');?>">
										<span class="field-icon"><i class="fa fa-lock"></i></span>  
									</label>
								</div><!-- end section --> 

								<div class="section">
									<label class="field prepend-icon">
                                                                            <input type="text" name="usernameRegister" id="usernameRegister" class="gui-input" placeholder="<?php echo $this->lang->line('email');?>" onchange="checkmail(this.value)">
										<span class="field-icon"><i class="fa fa-user"></i></span>  
									</label>
								</div><!-- end section -->                    

								<div class="section">
									<label class="field prepend-icon">
                                                                            <input type="password" name="passwordRegister" id="passwordRegister" class="gui-input" placeholder="password">
										<span class="field-icon"><i class="fa fa-lock"></i></span>  
									</label>
								</div><!-- end section -->  

								  
								
								<div style="text-align: center;">
                                                                    <button type="button" class="button btn-primary" style="font-family: 'Mitr', sans-serif; " onclick="register()"> <?php echo $this->lang->line('Register');?> </button>
								</div><!-- end .form-footer section -->      
								
																

								<div class="spacer-t30 spacer-b30">
									<div class="tagline"><span> <?php echo $this->lang->line('Orlogin');?> </span></div><!-- .tagline -->
								</div>
								
								
								<div class="section" style="text-align: center;">
									<a href="#" class="button btn-social facebook span-left " onclick="fbLogin()" id="fbLink" data-dismiss="modal"> <span><i class="fa fa-facebook"></i></span> Facebook </a>
									<!--<a href="#" class="button btn-social twitter span-left">  <span><i class="fa fa-twitter"></i></span> Twitter </a>-->
								</div><!-- end section -->

							</div><!-- end .form-body section -->
							
						</form>

					</div><!-- end .smart-forms section -->
				</div><!-- end .smart-wrap section -->

				  </div>
			
         
        </div>
    <!--    <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
    </div>
  </div>
		
	
	
	