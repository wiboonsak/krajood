<!-- Bootstrap fileupload css -->
<link href="<?php echo base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css') ?>" rel="stylesheet" />

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <h4 class="page-title">Add / Edit Category</h4>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card m-b-30 card-body">
                                <h5 class="card-title">
                                    <div class="progress mb-0" style="display: none">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                    <div class="pull-right">
                                        <?php if($dataID!=''){?>
                                        <button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('Control/category_add') ?>'"><i class="icon-plus"></i>&nbsp;&nbsp;Add New Category</button>
                                        &nbsp;&nbsp;<?php }?>
                                        <button type="button" class="btn btn-info btn-sm" onClick="window.location.href = '<?php echo base_url('Control/category') ?>'"><i class=" icon-arrow-left-circle"></i>&nbsp;&nbsp;Back</button></div>
                                </h5>


                                <!----->
                                <form id="categoryForm" name="categoryForm">
                                    <div class="form-group row">
                                        <label class="col-sm-3">
                                            Category Name English
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="category_title" name="category_title" type="text" class="form-control form-control-sm" value="<?php echo $category_title ?>" > 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3">
                                            Category Name Thai
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="category_title_th" name="category_title_th" type="text" class="form-control form-control-sm" value="<?php echo $category_title_th?>" > 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3">
                                            Category Title English
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="title1" name="title1" type="text" class="form-control form-control-sm" value="<?php echo $title1?>" > 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3">
                                            Category Title Thai
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="title1_th" name="title1_th" type="text" class="form-control form-control-sm" value="<?php echo $title1_th?>" > 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3">
                                            Category Title 2 English
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="title2" name="title2" type="text" class="form-control form-control-sm" value="<?php echo $title2?>" > 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3">
                                            Category Title 2 Thai
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="title2_th" name="title2_th" type="text" class="form-control form-control-sm" value="<?php echo $title2_th?>" > 
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-sm-3">
                                            Category Images 
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="category_img" name="category_img" type="file" class="form-control form-control-sm" value="" > 
                                             <br><a>(Supported image file extensions jpg, gif, png. File size should not exceed 2MB. Picture size 300 x 255 pixels.)</a>
                                        </div>
                                    </div>
                                    <div>		 
                                        <input type="hidden" name="dataID" id="dataID" value="<?php echo $dataID ?>"> 
                                    </div>




                                    <div class="form-group row" >
                                        <div class="col-sm-12" style="text-align: center">
                                            <button type="button" class="btn btn-success btn-sm" onClick="AddCateGory()">Add / Edit</button>
                                        </div>
                                    </div>
                                    <?php if($category_img != ''){?>
                                    <div class="row">
							<div class="col-lg-12">
								<div class="card m-b-30">
									<h6 class="card-header">Images</h6>
									<div class="card-body">
										<div id="showImage" style="margin-top: 5px;"></div>
                                                                                <input type="hidden" id="imgold" name="imgold" value="<?php echo $category_img?>" />
									</div>
								</div>
							</div>

							
					</div>	
                                    <?php }?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!----->


            </div>
        </div>

    </div>
</div>

<!-- end page title end breadcrumb -->

