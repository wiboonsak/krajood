  <!-- DataTables -->
        <link href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/plugins/datatables/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/plugins/datatables/select.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />


<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">>List All Member
								<div class="pull-right">
								</div>
							</h4>
							 </div>
							
							
								
                    			<div class="col-sm-12">
									
										<h5 class="card-title">
											<div class="progress mb-0" style="display: none">
										<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
										</div>

										</h5>
										<div class="card-box table-responsive" id="showData">
										<table id="datatable" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Telephone</th>
                                    <th style="text-align:center">Date </th>
                                    <th width="50" style="text-align:center">Detail </th>
                                </tr>
                                </thead>
                                <tbody>
								<?php $n=1; foreach($get_member AS $data){
             
             ?>	
                                <tr id="row<?php echo $data->id?>">
                                    <th scope="row"><?php echo $n?></th>
                                    <td><?php if($data->facebook_id=='-'){echo $data->first_name;}else{echo $data->first_name.' '.$data->last_name;}?></td>
                                    <td><?php echo $data->cus_email?></td>
                                    <td><?php echo $data->cus_tel?></td>
                                    <td style="text-align:center"><?php echo $this->Product_model->GetthaiDateTime($data->date_add)?></td>
                                    
                                    <td style="text-align:center"><a type="button" class="btn btn-info btn-sm" href="<?php echo base_url('Control/member_detail/'.$data->id)?>" >Detail</a></td>
                                    
                                </tr>
                                <?php  $n++;  }?>
                                </tbody>
                            </table>
											
										</div>
									
								</div>
								
							
                       
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>