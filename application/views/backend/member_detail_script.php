<script>
	function comfirmDelete(dataID,table,product_name){  
            	
       swal({
                title: 'Delete '+product_name + '?',
                text: "Please confirm the delete of the data. !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
		   		$.post('<?php echo base_url('Control/deleteyoutube')?>', { dataID : dataID , table : table }, function(data){  
					console.log(data);
					   if(data=='1'){
						     swal({
								title: 'Deleted !',
								text: "Data has been deleted successfully.",
								type: 'success',
								confirmButtonClass: 'btn btn-confirm mt-2'   
							}) 
						  $('#row'+dataID).remove();
						   //------ images RowImg   file RowFile
					   }else{
						   swal({
							title: 'Error',
							text: "Cannot delete data",
							type: 'error',
							confirmButtonClass: 'btn btn-confirm mt-2'
                    		})
					   }
				});
               
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal({
                        title: 'Cancelled',
                        text: "You have canceled the data deletion.",
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                }
            })

	} 
         //--------------------------------------
        	 function windowOpener(windowHeight, windowWidth, windowName, windowUri,windowUri2)
			{
					var centerWidth = (window.screen.width - windowWidth) / 2;
					var centerHeight = (window.screen.height - windowHeight) / 2;
    				newWindow = window.open(windowUri+windowUri2, windowName, 'resizable=1,scrollbars=yes,width=' + windowWidth +  ',height=' + windowHeight +  ',left=' +centerWidth + ',top=' + centerHeight);
					newWindow.focus();
					return newWindow.name;
		}    
         //--------------------------------------
        	 function updatecf(dataid, cf_status){
			$.post('<?php echo base_url('Control/updatecf') ?>', {dataid:dataid,cf_status:cf_status}, function (data1) { 
                                if(data1!=''){
                                    window.location.href="<?php echo base_url('Control/Reservation')?>";
                                }
                                
                                });		
		}    

	//--------------------------------
	$('#datatable').DataTable();
	$(document).ready(function(){
		//loadListProduct();
	})
</script>