 <?php  if(!isset($currentID)){ $currentID='';}
		if(!isset($slide_title)){ $slide_title ='';}
		if(!isset($slide_title_th)){ $slide_title_th ='';}
		if(!isset($slide_detail)){ $slide_detail ='';}
		if(!isset($slide_detail_th)){ $slide_detail_th ='';}
		if(!isset($slide_desc)){ $slide_desc ='';}
		if(!isset($slide_desc_th)){ $slide_desc_th ='';}
		if(!isset($learnMore)){ $learnMore ='';}
		
$slideImg = $this->Product_model->loadSlideImg($currentID,'1');
$slideback = $this->Product_model->loadSlideImg($currentID,'2');
$numslide = $slideImg->num_rows();
$numback = $slideback->num_rows();
if($numslide!=''){
foreach($slideImg->result() AS $data){ }
}
if($numback!=''){
foreach($slideback->result() AS $databack){ }
}

?>  

<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">Slide Add</h4>
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
								<button type="button" class="btn btn-success btn-sm" onClick="window.location.href='<?php echo base_url('Control/slide_add')?>'"><i class="fa fa-plus"></i> Add Slide</button> 
						    &nbsp;&nbsp;
                                                             <?php }?>
								<button type="button" class="btn btn-info btn-sm" onClick="window.location.href='<?php echo base_url('Control/slide_list')?>'">Back</button></div>
										</h5>
						<form enctype="multipart/form-data" id="slideForm" name="slideForm">
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Topic English</label>
								<div class="col-sm-9">
									<input type="text" id="slide_title" name="slide_title" class="form-control form-control-sm" value="<?php echo $slide_title?>" >
								</div>
							   
						</div>
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Topic Thai</label>
								<div class="col-sm-9">
									<input type="text" id="slide_title_th" name="slide_title_th" class="form-control form-control-sm" value="<?php echo $slide_title_th?>" >
								</div>
							   
						</div>
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Text1 English</label>
								<div class="col-sm-9">
                                                                    <input type="text" id="slide_detail" name="slide_detail" class="form-control form-control-sm" value="<?php echo $slide_detail?>" >
								</div>
							   
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Text1 Thai</label>
								<div class="col-sm-9">
                                                                      <input type="text" id="slide_detail_th" name="slide_detail_th" class="form-control form-control-sm" value="<?php echo $slide_detail_th?>" >
								</div>
							  
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Text2 English</label>
								<div class="col-sm-9">
                                                                    <textarea id="slide_desc" name="slide_desc" class="ex" ><?php echo $slide_desc?></textarea>
                                                                     <input type="hidden" name="comment2" id="comment2" >
								</div>
							  
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Text2 Thai</label>
								<div class="col-sm-9">
                                                                    <textarea id="slide_desc_th" name="slide_desc_th" class="ex"><?php echo $slide_desc_th?></textarea>
                                                                    <input type="hidden" name="comment3" id="comment3" >
								</div>
							
						</div>
                                                    <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Read More</label>
								<div class="col-sm-9">
                                                                    <input type="text" id="learnMore" name="learnMore" class="form-control form-control-sm" value="<?php echo $learnMore?>"> 
                                                                    <p style="color:red">(Please fill http://  or https://  Ex. http://kra-joodthailand.com/Welcome)</p>
								</div>
							  
						</div>
						 
                                                <div class="row">
							<div class="col-lg-6">
								<div class="card m-b-30">
									<h6 class="card-header">Add Images Banner</h6>
									<div class="card-body">
									<input   type="file" id="ImagesFiles" name="userFiles[]"  /> 
                                                                        <br><a>(Supported image file extensions jpg, gif, png. File size should not exceed 2MB. Picture size 720 x 620 pixels.)</a>
										<div id="showImage" style="margin-top: 5px;"></div>
									</div>
								</div>
							</div>
<div class="col-lg-6">
    <div class="card m-b-30">
									<h6 class="card-header">Add Background Images</h6>
									<div class="card-body">
									<input   type="file" id="ImagesFiles1" name="BackgroundFiles[]"/>
                                                                                                  <br><a>(Supported image file extensions jpg, gif, png. File size should not exceed 2MB. Picture size 1,920 x 860 pixels.)</a>
										<div id="showBackground" style="margin-top: 5px;"></div>
									</div>
								</div>
							</div>
					</div>
						<div class="form-group row" >
							<div class="col-sm-12" style="text-align: center">
							<button type="button" class="btn btn-success btn-sm" onClick="AddSlide()">Add / Edit Data</button>
							<input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID?>">
                                                        <input type="hidden" name="img_old" id="img_old" value="<?php if ($numslide!=''){echo $data->image_name;}?>">
                                                        <input type="hidden" name="Backgroundimg_old" id="Backgroundimg_old" value="<?php if ($numback!=''){echo $databack->image_name;}?>">
							</div>
					</div>					
						</form>	
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>