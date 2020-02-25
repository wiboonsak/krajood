<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
       parent::__construct();
		 if($this->session->userdata('user_id')==''){
			    redirect(base_url('login'), 'refresh');
			    exit();
			 
		  }
			
          $this->load->model('Product_model');  
          $this->load->model('User_model');  
		 
    }
	//---------------------
	public function index()
	{
		
		$data['productList']=$this->Product_model->getproductList();
		$this->load->view('backend/header');
		$this->load->view('backend/product_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/product_list_script');
	}
        	//---------------------
     public function category(){
		$data['categoryList']=$this->Product_model->getCategory('1');
		$this->load->view('backend/header');
		$this->load->view('backend/category',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/category_script');
	 }
         //-----------------
	public function category_add($cateID=NULL){
		if($cateID!=''){
			$selectData=$this->Product_model->pCategoryDetail($cateID);
			foreach($selectData->result() AS $abc){ }
			$data['category_title']= $abc->category_title;			
			$data['category_title_th']= $abc->category_title_th;			
			$data['title1']= $abc->title1;			
			$data['title1_th']= $abc->title1_th;			
			$data['title2']= $abc->title2;			
			$data['title2_th']= $abc->title2_th;			
			$data['category_img']= $abc->images;			
			$data['dataID']= $cateID;
		}else{
			$data['category_title']='';			
			$data['category_title_th']='';
                        $data['title1']= '';			
			$data['title1_th']= '';			
			$data['title2']= '';			
			$data['title2_th']= '';
			$data['category_img']='';			
			$data['dataID']= $cateID;
		}

		$this->load->view('backend/header');
		$this->load->view('backend/category_add',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/category_script');
	 }
		//---------------
	public function DoAddProductCategory(){
				$category_title = $this->input->post('category_title');
				$category_title_th = $this->input->post('category_title_th');
				$title1 = $this->input->post('title1');
				$title1_th = $this->input->post('title1_th');
				$title2 = $this->input->post('title2');
				$title2_th = $this->input->post('title2_th');
				$dataID = $this->input->post('dataID');
				$imgold = $this->input->post('imgold');
				$category_img = $this->input->post('category_img');
                                if(($category_img!='')&&($imgold !='')){
                                    @unlink('./uploadfile/' . $imgold);
                                }
	$upload_path = './uploadfile';
				$upload_pathName = 'uploadfile';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);         
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['category_img']['name'];
                $_FILES['userFile']['type'] = $_FILES['category_img']['type'];
                $_FILES['userFile']['tmp_name'] = $_FILES['category_img']['tmp_name'];
                $_FILES['userFile']['error'] = $_FILES['category_img']['error'];
                $_FILES['userFile']['size'] = $_FILES['category_img']['size'];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData['file_name'] = $fileData['file_name'];
				$resultUpdateBooking = $this->Product_model->DoAddProductCategory($category_title,$category_title_th , $dataID , $uploadData['file_name'],$title1,$title1_th,$title2,$title2_th);
                }else{
                    $resultUpdateBooking = $this->Product_model->DoAddProductCategory($category_title,$category_title_th , $dataID,$imgold,$title1,$title1_th,$title2,$title2_th );
                }
				

		echo $resultUpdateBooking;
	}
        //---------------------------
        	public  function updateOrderCate(){
		$dataID = $this->input->post('dataID');
		$changeValue = $this->input->post('changeValue');
		$result = $this->Product_model->updateOrderCate($dataID,$changeValue);
		echo $result;
		
	}
        //------------------------
	public function deletePcate(){
		$DataID=$this->input->post('DataID');
		$result = $this->Product_model->deletePcate($DataID);
		echo $result;
	}
        //---------------------------
        public function Product_add($curentID=NULL){
		$datatype='1';
		$data['categoryList']=$this->Product_model->getCategory($datatype);
		$productData = $this->Product_model->getDetail($curentID);
		
		if($productData->num_rows() > 0){
			foreach($productData->result() AS $product){}
			$data['product_name_th']=$product->product_name_th;
			$data['product_name']=$product->product_name;
			$data['product_title']=$product->product_title;
			$data['product_title_th']=$product->product_title_th;
			$data['product_category']=$product->product_category;
			$data['product_desc']=$product->product_desc;
			$data['product_desc_th']=$product->product_desc_th;
                        $data['product_price']=$product->product_price;
                        
			$data['currentID']=$product->id;
		
		 }else{
			$data['product_category']=0;
			
		}
		$this->load->view('backend/header');
		$this->load->view('backend/product_add',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/product_script');
	}
        //-----------------------------------------------
                 public function addProduct(){
		 $product_name =$this->input->post('product_name');
		 $product_name_th =$this->input->post('product_name_th');
		 $product_title =$this->input->post('product_title');
		 $product_title_th =$this->input->post('product_title_th');
		 $comment = $this->input->post('comment');
		 $comment_th = $this->input->post('comment_th');
		 $youtube =$this->input->post('youtube');
		 $product_price =$this->input->post('product_price');
		 $currentID =$this->input->post('currentID');
		 $product_category =$this->input->post('product_category');
		 
		 
		 $currentID = $this->Product_model->addProduct($currentID ,$comment,$comment_th , $product_price,$product_category,$product_name,$product_name_th,$product_title,$product_title_th );
		 
                 if($youtube!=''){
                    foreach($youtube AS $value){
                     if($value !=''){
                         $result_id2 = $this->Product_model->addyoutube($currentID , $value);
                        
                     }  
                 }
                 }
		 
		  //--------upload file------------//
		 
			$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile/product';
				$upload_pathName = 'uploadfile/product';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Product_model->AddImagesData($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}

		//--------------------------
		 
		 echo $currentID;
		
	 }
         //------------------------------------
          public function loadProductImg(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Product_model->loadProductImg($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowImg'.$data->id.'">';
			 echo '<td><span class="text-danger"><img src="'.base_url('uploadfile/product/').$data->imge_name.'" style="width:150px;" class="thumbnail"></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\''.$data->id.'\' , \'imgfile\', \''.$data->imge_name.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
	 } 
         //------------------------------------
          public function loadcateImg(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Product_model->loadcateImg($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowImg'.$data->id.'">';
			 echo '<td><span class="text-danger"><img src="'.base_url('uploadfile/').$data->images.'" style="width:150px;" class="thumbnail"></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="imgDelete(\''.$data->id.'\' , \''.$data->images.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
	 } 
   //-------------------------------
	 public function deletePorductFile1(){ 
	 	 $fileType = $this->input->post('fileType');
	 	 $DataID = $this->input->post('DataID');
	 	 $FileName = $this->input->post('FileName');
		 $result = $this->Product_model->deleteProductFile1($DataID, $fileType, $FileName);
		 echo $result;
	 }
   //-------------------------------
	 public function deletecateimg(){
             $img = '';
	 	 $DataID = $this->input->post('DataID');
	 	 $FileName = $this->input->post('FileName');
		 $result = $this->Product_model->deletecateimg($DataID, $FileName,$img);
		 echo $result;
	 }
          //----------------------------------------------- 
	 public function loadProductFile(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Product_model->loadProductFile($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowFile'.$data->id.'">';
			 echo '<td><span class="text-suceess">';
			 echo'<a href="'.base_url('uploadfile/catalogue/').$data->imge_name.'" target="_blanl"><i class="icon-arrow-down-circle">&nbsp;File SIMATIC '.$data->id.'</i></a></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\''.$data->id.'\' , \'catalgoue\' , \''.$data->imge_name.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
	 }
    //-------------------
    public function deleteyoutube(){
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $result = $this->Product_model->delete_data($dataID, $table);
        echo $result;
    }  
    //-----------------------
        public function Product_list(){
		$data['productList']=$this->Product_model->getproductList();
		$this->load->view('backend/header');
		$this->load->view('backend/product_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/product_list_script');
	}
        //-------------------------------
	public function news_add($curentID=NULL){
		
		$NewDetail = $this->Product_model->getNewDetail($curentID);
		if($NewDetail->num_rows() > 0){
			foreach($NewDetail->result() AS $news){}
			$data['news_title']=$news->news_title;
			$data['news_title_th']=$news->news_title_th;
			$data['news_detail']=$news->news_detail; 
			$data['news_detail_th']=$news->news_detail_th; 
			$data['currentID']=$news->id;
			$data['news_date_add']=$news->news_date_add;
		 }else{
			$data['news_title']='';
                        $data['news_title_th']='';
			$data['news_detail']=''; 
			$data['news_detail_th']=''; 
			$data['currentID']='';
			$data['news_date_add']='';
		}
		$this->load->view('backend/header');
		$this->load->view('backend/news_add',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/news_add_script');		
	}
        //-------------------------------
	public function reference_add($curentID=NULL){
		
		$referenceDetail = $this->Product_model->getreferenceDetail($curentID);
		if($referenceDetail->num_rows() > 0){
			foreach($referenceDetail->result() AS $reference){}
			$data['reference_title']=$reference->reference_title;
			$data['reference_detail']=$reference->reference_detail; 
			$data['currentID']=$reference->id;
			$data['reference_date_add']=$reference->reference_date_add;
		 }else{
			$data['reference_title']='';
			$data['reference_detail']=''; 
			$data['currentID']='';
			$data['reference_date_add']='';
		}
		$this->load->view('backend/header');
		$this->load->view('backend/reference_add',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/reference_add_script');		
	}
        	//-------------------------------   // imageID 
	public function deleteNewsImg(){
		$imageID = $this->input->post('imageID');
		$imageName = $this->input->post('imageName');
		$result = $this->Product_model->deleteNewsImg($imageID,$imageName);
		echo $result;
	} 
        	//-------------------------------   // imageID 
	public function deletereferenceImg(){
		$imageID = $this->input->post('imageID');
		$imageName = $this->input->post('imageName');
		$result = $this->Product_model->deletereferenceImg($imageID,$imageName);
		echo $result;
	} 
        //-------------------------------    
	public function addNews(){
		 $currentID =$this->input->post('currentID');
		 $news_detail_th =$this->input->post('news_detail_th');
		 $news_detail =$this->input->post('news_detail');
		 $news_title_th =$this->input->post('news_title_th');
		 $news_title =$this->input->post('news_title');
		 $news_date_add =$this->input->post('news_date_add');
		 $youtube =$this->input->post('youtube');
		 
		 $currentID = $this->Product_model->addNews($news_title,$news_title_th,$news_detail,$news_detail_th ,$currentID,$news_date_add );
                 
                  if($youtube!=''){
                    foreach($youtube AS $value){
                     if($value !=''){
                         $result_id2 = $this->Product_model->addyoutubeNew($currentID , $value);
                        
                     }  
                 }
                 }
		 //--------uploadfile------------//
		$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile/news';
				$upload_pathName = 'uploadfile/news';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Product_model->AddNewsImg($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}
		
		 echo $currentID;
		 
	}
        //-------------------------------    
	public function addreference(){
		 $currentID =$this->input->post('currentID');
		 $reference_detail =$this->input->post('reference_detail');
		 $reference_title =$this->input->post('reference_title');
		 $reference_date_add =$this->input->post('reference_date_add');
		 $youtube =$this->input->post('youtube');
		 
		 $currentID = $this->Product_model->addreference($reference_title , $reference_detail ,$currentID , $reference_date_add );
                 
                  if($youtube!=''){
                    foreach($youtube AS $value){
                     if($value !=''){
                         $result_id2 = $this->Product_model->addyoutubereference($currentID , $value);
                        
                     }  
                 }
                 }
		 //--------uploadfile------------//
		$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile/reference';
				$upload_pathName = 'uploadfile/reference';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Product_model->AddreferenceImg($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}
		
		 echo $currentID;
		 
	}
        //-------------------------------
	public function loadNewsImages(){
		$ProID=$this->input->post('ProID');
		$data['newsImg'] = $this->Product_model->loadNewsImg($ProID);
		$this->load->view('backend/news_images_list',$data);
		
	}
        //-------------------------------
	public function loadreferenceImages(){
		$ProID=$this->input->post('ProID');
		$data['referenceImg'] = $this->Product_model->loadreferenceImg($ProID);
		$this->load->view('backend/reference_images_list',$data);
		
	}
        	//-------------------------------
	public function news_list(){
		$data['NewsList']=$this->Product_model->news_list();
		$this->load->view('backend/header');
		$this->load->view('backend/news_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/news_list_script');	
	}
        	//-------------------------------
	public function reference_list(){
		$data['referenceList']=$this->Product_model->reference_list();
		$this->load->view('backend/header');
		$this->load->view('backend/reference_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/reference_list_script');	
	}
                //------------------------------- deleteNews 
	public function deleteNews(){
		$DataID = $this->input->post('dataID');
		$result = $this->Product_model->deleteNews($DataID);
		echo $result;
	}
                //------------------------------- deleteNews 
	public function deletereference(){
		$DataID = $this->input->post('dataID');
		$result = $this->Product_model->deletereference($DataID);
		echo $result;
	}
        //-------------------------------
	public function slide_add($curentID=NULL){
		
		$slideDetail = $this->Product_model->getslideDetail($curentID);
		if($slideDetail->num_rows() > 0){
			foreach($slideDetail->result() AS $slide){}
			$data['slide_title']=$slide->slide_title;
			$data['slide_title_th']=$slide->slide_title_th;
			$data['slide_detail']=$slide->slide_detail;
			$data['slide_detail_th']=$slide->slide_detail_th;
			$data['slide_desc']=$slide->slide_desc;
			$data['slide_desc_th']=$slide->slide_desc_th;
			$data['learnMore']=$slide->learnMore;
			$data['currentID']=$slide->id;
			
		 }else{
			$data['slide_title']='';
			$data['slide_title_th']='';
			$data['slide_detail']='';
			$data['slide_detail_th']='';
			$data['slide_desc']='';
			$data['slide_desc_th']='';
			$data['learnMore']='';
			$data['currentID']='';
			
		}
		$this->load->view('backend/header');
		$this->load->view('backend/slide_add',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/slide_add_script');		
	}
        	//-------------------------------deleteSlideImg 
	public function deleteSlideImg(){
		$DataID=$this->input->post('imageID');
		$imge_name=$this->input->post('imageName');
		$result = $this->Product_model->deleteSlideImg($DataID,$imge_name);
		echo $result;
	}
        //-------------------------------    
	public function addSlide(){
		$currentID =$this->input->post('currentID');
		 $slide_title =$this->input->post('slide_title');
		 $slide_title_th =$this->input->post('slide_title_th');
		 $slide_detail =$this->input->post('slide_detail');
		 $slide_detail_th =$this->input->post('slide_detail_th');
		 $slide_desc =$this->input->post('comment2');
		 $slide_desc_th =$this->input->post('comment3');
		 $learnMore =$this->input->post('learnMore');
                 $img = $this->input->post('img_old');
                 $Backgroundimg = $this->input->post('Backgroundimg_old');
		 $currentID = $this->Product_model->addSlide($slide_title ,$slide_title_th, $slide_detail,$slide_detail_th ,$currentID , $slide_desc,$slide_desc_th,$learnMore );
		 //--------uploadfile------------//
		$countFiles = count($_FILES['userFiles']['name']);
		  
		 		$upload_path = './uploadfile/banner';
				$upload_pathName = 'uploadfile/banner';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    if($img!=''){$this->Product_model->deleteSlideImg($currentID,$img);}
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $this->Product_model->AddSlideImg($uploadData[$i]['file_name'],$currentID,'1');
                }
			}
		}
                $countFiles1 = count($_FILES['BackgroundFiles']['name']);
		  
		 		$upload_path = './uploadfile/banner';
				$upload_pathName = 'uploadfile/banner';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles1>0){ 
			for($i=0; $i<$countFiles1; $i++)
			{           
				//---------------------------
		$_FILES['BackgroundFile']['name'] = $_FILES['BackgroundFiles']['name'][$i];
                $_FILES['BackgroundFile']['type'] = $_FILES['BackgroundFiles']['type'][$i];
                $_FILES['BackgroundFile']['tmp_name'] = $_FILES['BackgroundFiles']['tmp_name'][$i];
                $_FILES['BackgroundFile']['error'] = $_FILES['BackgroundFiles']['error'][$i];
                $_FILES['BackgroundFile']['size'] = $_FILES['BackgroundFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('BackgroundFile')){
                    if($Backgroundimg!=''){$this->Product_model->deleteSlideImg($currentID,$Backgroundimg);}
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $this->Product_model->AddSlideImg($uploadData[$i]['file_name'],$currentID,'2');
                }
                 
				
			}
		}
		
		 echo $currentID;
		 
	}
        //-------------------------------
	public function loadSlideImages(){
		$ProID=$this->input->post('ProID');
		$data['slideImg'] = $this->Product_model->loadSlideImg($ProID,'1');
                $this->load->view('backend/slide_images_list',$data);

		
	}
        //-------------------------------
	public function loadSlidebackImages(){
		$ProID=$this->input->post('ProID');
		$data['slideImg'] = $this->Product_model->loadSlideImg($ProID,'2');
                $this->load->view('backend/slide_images_list',$data);

		
	}
                //-------------------
        public function set_ShowOnWeb() {
            $dataID = $this->input->post('dataID');
            $check = $this->input->post('check');
            $table = $this->input->post('table');
            $result = $this->Product_model->update_ShowOnWeb($dataID, $check, $table);
            echo $result;
    }
    //-------------------------------
        public function deleteSlide(){
		$DataID=$this->input->post('DataID');
		$result = $this->Product_model->deleteSlide($DataID);
		echo $result;
	}
        //-------------------------------
	public function slide_list(){
            
		$data['SlideList']=$this->Product_model->slide_list();
		$this->load->view('backend/header');
		$this->load->view('backend/slide_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/slide_list_script');	
	}
        	//-------------------------------	
   public function cangePassForm(){
	   $this->load->view('backend/changepassform');
   }
   	//-------------------------------  doChangePass') ', { newpass
    public function doChangePass(){
		$id = $this->input->post('id');
		$newpass = trim($this->input->post('newpass'));
		
		$result = $this->Product_model->doChangePass($newpass,$id);
		echo $result;
	}
           //-----------------
	public function admin_add($dataID=NULL){
		if($dataID!=''){
			$selectData=$this->Product_model->getuserdata($dataID);
			foreach($selectData->result() AS $abc){ }
			$data['name_sname']= $abc->name_sname;			
			$data['user_name']= $abc->user_name;			
			$data['password']= $abc->password;			
			$data['dataID']= $dataID;
		}else{
			$data['name_sname']= '';			
			$data['user_name']= '';			
			$data['password']= '';			
			$data['dataID']= '';
		}

		$this->load->view('backend/header');
		$this->load->view('backend/addmin_add',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/addmin_add_script');
	 }
         //-----------------------------
         public function chk_user() {
             $username = $this->input->post('username');
             $result = $this->Product_model->chk_user($username);
             $numresult = $result->num_rows();
		echo $numresult;
         }
         //-----------------------------
         public function add_admin() {
             $Name = $this->input->post('Name');
             $username = $this->input->post('username');
             $Password = $this->input->post('Password');
             $password_old = $this->input->post('password_old');
             $dataID = $this->input->post('dataID');
             $result = $this->Product_model->add_admin($Name,$username,$Password,$password_old,$dataID);

		echo $result;
         }
         //-------------------------------
	public function admin_list(){
            
		$data['adminList']=$this->Product_model->admin_list();
		$this->load->view('backend/header');
		$this->load->view('backend/admin_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/admin_list_script');	
	}
        //---------------------
	public function Reservation()
	{
		$data['cf_status'] = '0';
		$data['gettotalorder']=$this->Product_model->gettotalorder($data['cf_status']);
		$this->load->view('backend/header');
		$this->load->view('backend/reservation_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/reservation_list_script');
	}
        //---------------------
	public function Reservation_Detail()
	{
		$this->load->view('backend/shoping_checkout_end');
	}
        //---------------------
	public function updatecf()
	{
             $dataid = $this->input->post('dataid');
             $cf_status = $this->input->post('cf_status');
             $result = $this->Product_model->updatecf($dataid,$cf_status);

		echo $result;
	}
        public function report()
	{
		$data['cf_status'] = '2';
		$data['gettotalorder']=$this->Product_model->gettotalorder($data['cf_status']);
		$this->load->view('backend/header');
		$this->load->view('backend/reservation_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/reservation_list_script');
	}
        public function report_cancel()
	{
		$data['cf_status'] = '3';
		$data['gettotalorder']=$this->Product_model->gettotalorder($data['cf_status']);
		$this->load->view('backend/header');
		$this->load->view('backend/reservation_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/reservation_list_script');
	}
        public function payment()
	{
		$data['getpayment']=$this->Product_model->getpayment();
		$this->load->view('backend/header');
		$this->load->view('backend/payment_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/payment_list_script');
	}
        //---------------------
	public function Payment_Detail()
	{
		$this->load->view('backend/paymet_detail');
	}
         public function member()
	{
		
		$data['get_member']=$this->Product_model->get_member();
		$this->load->view('backend/header');
		$this->load->view('backend/member_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/member_list_script');
	}
         public function member_detail($id=NULL)
	{
		$get_memberbyid=$this->Product_model->get_memberbyid($id);
                foreach ($get_memberbyid->result() AS $memberbyid){}
                $email = $memberbyid->cus_email;
		$data['getordermember']=$this->Product_model->getorderbyemail($email);
		$this->load->view('backend/header');
		$this->load->view('backend/member_detail',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/member_detail_script');
	}
}