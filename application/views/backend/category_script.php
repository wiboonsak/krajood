<script>
	function updateOrder(dataID,FieldName,changeValue){
		var returnValue = $('#chkOrder'+dataID).val();
		console.log('returnValue:-'+returnValue)
		 if((changeValue=='')){
							swal({
								title: 'Warning !',
								text: "Please enter the numbers in order.",
								type: 'warning',
								confirmButtonClass: 'btn btn-confirm mt-2'
							}) 
			 $('#order'+dataID).val(returnValue);
			 return false;   
		}else{
			$.post('<?php echo base_url('Control/updateOrderCate')?>',{ dataID:dataID , FieldName:FieldName , changeValue:changeValue }
				  ,function(data){ 
						if(data==1){
										swal({
                        title: 'Data saved successfully',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });	
                    setTimeout(function(){ window.location.href = "<?php echo base_url('Control/category/')?>"; }, 2000);
				
						}else{
							 swal({
                        title: 'Can not be saved!',
                        //text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
						}
			   })
		}
	}

	//-------------------------
	function comfirmDelete(DataID , cateName) {
       swal({
                title: 'Delete ?'+cateName,
                text: "Please confirm the deletion of the data. !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
		   		$.post('<?php echo base_url('Control/deletePcate')?>', { DataID : DataID }, function(data){  
					console.log(data);
					   if(data=='1'){
						     swal({
								title: 'Deleted !',
								text: "Data has been deleted successfully.",
								type: 'success',
								confirmButtonClass: 'btn btn-confirm mt-2'
							}) 
						    $('#row'+DataID).remove();
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
	//---------------------------------
	function AddCateGory(){
		
		var files = $('#files').val()
		var category_title = $('#category_title').val();
		var category_title_th = $('#category_title_th').val();
		var title1 = $('#title1').val();
		var title1_th = $('#title1_th').val();
		var title2 = $('#title2').val();
		var title2_th = $('#title2_th').val();
		var oldImg=$('#oldImg').val();
		console.log(files);
		var postData = new FormData($("#categoryForm")[0]);
		
		 if(category_title==''){
						alert('Please Enter Product Category Name English.');
						 return false;
                 }else if(category_title_th==''){
                     alert('Please Enter Product Category Name Thai.');
						 return false;
		}else{
				$.ajax({
						 type:'POST',
						 url:'<?php echo base_url('Control/DoAddProductCategory')?>',
						 processData: false,
						 contentType: false,
						 data : postData,
						 xhr: function(){
							//upload Progress
							var xhr = $.ajaxSettings.xhr();
							if (xhr.upload) {
								$(".progress").show();
								xhr.upload.addEventListener('progress', function(event) {
									var percent = 0;
									var position = event.loaded || event.position;
									var total = event.total;
									if (event.lengthComputable) {
										percent = Math.ceil(position / total * 100);
									}
									//update progressbar
									$(".progress-bar").css("width", + percent +"%");
									$('#progress_bar_id' + " .status").text(percent +"%");
								}, true);
							}
							return xhr;
						},
						 success:function(data, status){
						  // console.log("File Uploaded");
						    console.log('data->'+data+'  status->'+status);
						  	$('#oldImg').val(data);
							$(".progress-bar").css("width", + 0 +"%");
							$(".progress").hide();
							if(status=='success'){
								$('#dataID').val(data);
								swal({
                        title: 'Data saved successfully',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                     setTimeout(function(){ window.location.href = "<?php echo base_url('Control/category_add/')?>"+data; }, 2000);
                     
							}else{
								 swal({
                        title: 'Can not be saved!',
                        //text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
						    }
							if(oldImg==''){ window.location.href="<?php echo base_url('Control/category_add/')?>"+data;  } 
							
							 
						 }
				});
		}

	}
	//-----------------------
	function  loadImages(ProID){
		$.post('<?php echo base_url('Control/loadcateImg')?>' , { ProID : ProID }, function(data){
			$('#showImage').empty();
			$('#showImage').html(data);
			
		})
		
	}
        	function imgDelete(DataID , FileName){
		var currentID = $('#dataID').val();
       swal({
                title: 'Delete ?',
                text: "Please confirm the delete of the data. !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
		   		$.post('<?php echo base_url('Control/deletecateimg')?>', { DataID : DataID ,  FileName : FileName }, function(data){  
					console.log(data);
					   if(data=='1'){
						     swal({
								title: 'Deleted !',
								text: "Data has been deleted successfully.",
								type: 'success',
								confirmButtonClass: 'btn btn-confirm mt-2'   
							}) 
 setTimeout(function(){ window.location.href = "<?php echo base_url('Control/category_add/')?>"+currentID; }, 2000);
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
	//-----------------
	$(".progress").hide();
	
	$(document).ready(function () {
            
            var currentID = $('#dataID').val();
            loadImages(currentID);
  //called when key is pressed in textbox
		  $(".OrderCate").keypress(function (e) {
			 //if the letter is not digit then display error and don't type anything
			 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				//display error message
				//$("#errmsg").html("Digits Only").show().fadeOut("slow");
					   return false;
			}
		   });
	});
	
</script>
