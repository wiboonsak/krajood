 <?php  if(!isset($currentID)){ $currentID='';}
		if(!isset($news_title)){ $news_title ='';}
		if(!isset($news_title_th)){ $news_title_th ='';}
		if(!isset($news_detail)){ $news_detail ='';}
		if(!isset($news_detail_th)){ $news_detail_th ='';}
		if(!isset($news_date_add)){ $news_date_add =date("d-m-Y");}


?>  
<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">News Data</h4>
                            <br>
							<div class="row">
                    			<div class="col-sm-12">
									<div class="card m-b-30 card-body">
										<h5 class="card-title">
											<div class="progress mb-0" style="display: none">
										<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
										</div>
                                                                                    <div class="pull-right">
                                                             <?php if($currentID!=''){?>
								<button type="button" class="btn btn-success btn-sm" onClick="window.location.href='<?php echo base_url('Control/news_add')?>'"><i class="fa fa-plus"></i> Add News</button> 
						    &nbsp;&nbsp;
                                                             <?php }?>
								<button type="button" class="btn btn-info btn-sm" onClick="window.location.href='<?php echo base_url('Control/news_list')?>'">Back</button></div>
										</h5>
						<form enctype="multipart/form-data" id="productForm" name="productForm">
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News Topic English</label>
								<div class="col-sm-9">
									<input type="text" id="news_title" name="news_title" class="form-control form-control-sm" value="<?php echo $news_title?>" >
								</div>
							  
						</div>
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News Topic Thai</label>
								<div class="col-sm-9">
									<input type="text" id="news_title_th" name="news_title_th" class="form-control form-control-sm" value="<?php echo $news_title_th?>" >
								</div>
							 
						</div>
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News Details English</label>
								<div class="col-sm-9">
									<textarea id="news_detail" name="news_detail" class="form-control form-control-sm" ><?php echo $news_detail?></textarea>
								</div>
							 
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News Details Thai</label>
								<div class="col-sm-9">
									<textarea id="news_detail_th" name="news_detail_th" class="form-control form-control-sm" ><?php echo $news_detail_th?></textarea>
								</div>
							 
						</div>	
							 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Date</label>
								<div class="col-sm-9">
									<input   type="date" id="news_date_add" name="news_date_add" value="<?php echo $news_date_add?>" class="form-control form-control-sm"/> 
								</div>
							   
						</div>	
                                                      <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">link Youtube</label>
                                       
<!--                                            <input id="linkyoutube" name="linkyoutube" class="form-control form-contol-sm" >-->
                                          
                                             <div id="linkyoutube_a" class="col-sm-6">
                                                                                                      <input id="youtube" name="youtube[]" type="text" class="form-control form-control-sm youtube3"  autocomplete="off"   >
                                                                                                     
                                             </div>
                                            <div class="col-sm-3">	
                                        <a  id="bt1" class="btn btn-primary btn-sm" onclick="ADDyoutube()">Add Clip Video</a>
                                        </div>
                                                     
                                        
                                       
                                    </div> 
                                                         <?php 
                                                      $youtube = $this->Product_model->getlinkyoutubenew($currentID);
                                                      $numyoutube = $youtube->num_rows();
                                                      if($numyoutube>0){
                                                      foreach ($youtube->result() AS $youtube2){?>
                                                    <div class="form-group row">
                                   <label class="col-sm-3 col-form-label"></label>
                                    
                                         <div id="linkyoutube_a" class="col-sm-6">
                                            <input id="youtube<?php echo $youtube2->id?>" name="youtube1[]" type="text" class="form-control form-control-sm youtube3" readonly value='<?php echo $youtube2 ->linkyoutube;?>'>
                                         </div>
                                               <div class="col-sm-3">
                                                        <a  id="bt2"class="btn btn-danger btn-sm entypo-cancel" onclick="deleteyoutube('<?php echo $youtube2->id ?>', 'tbl_youtube_News')"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                         
                                                    </div>
                                    </div> 
                                                      <?php }}?>
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Images</label>
								<div class="col-sm-9">
									<input   type="file" id="ImagesFiles" name="userFiles[]"  /> 
                                                                        <br><a>(Supports image file extension jpg, gif, png. File size should not exceed 2MB. Picture size 630 x 360 pixels.)</a>
								</div>
							  
						</div>	
											
						<div class="form-group row" >
							<div class="col-sm-12" style="text-align: center">
							<button type="button" class="btn btn-success btn-sm" onClick="AddNews()">Add / Edit Data</button>
							<input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID?>">
							</div>
					</div>					
											
						</form>					
										<div id="showImage"></div>
									</div>
								</div>
								
							</div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>