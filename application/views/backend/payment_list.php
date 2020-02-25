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
                           
                            <h4 class="page-title">List All Payment notify
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
                                    <th>Order Number</th>
                                    <th>Customer Name </th>
                                    <th>Product Name </th>
                                    <th>Price </th>
                                    <th style="text-align:center">Date </th>
                                    <th width="50" style="text-align:center">Detail </th>
                                    
                                    <th  width="50" style="text-align:center">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php $n=1; foreach($getpayment->result() AS $data){
             $getorder_detail = $this->Product_model->getorder_detail($data->order_id); 
              $getorder = $this->Product_model->getorder($data->order_id);
             foreach($getorder_detail->result() AS $getorder_detail2){}
             foreach($getorder->result() AS $getorder2){}
             ?>	
                                <tr id="row<?php echo $data->id?>">
                                    <th scope="row"><?php echo $n?></th>
                                    <td><?php echo $getorder2->OrderNumber?></td>
                                    <td><?php echo $data->NameSurname?></td>
                                    <td><?php echo $getorder_detail2->product_name?></td>
                                    <td><?php echo number_format($data->TransferAmount,2)?></td>
                                    <td style="text-align:center"><?php echo $this->Product_model->GetthaiDateTime($data->TransferDate.' '.$data->Time)?></td>
                                    
                                    <td style="text-align:center"><button type="button" class="btn btn-info btn-sm" onClick="windowOpener('770', '1200', 'windowName', 'Payment_Detail/<?php echo $getorder2->OrderNumber?>')">Detail</button></td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-sm" onClick="comfirmDelete('<?php echo $data->id?>' ,'tbl_payment_notify' , '<?php echo $getorder2->OrderNumber?>')">Delete</button></td>
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