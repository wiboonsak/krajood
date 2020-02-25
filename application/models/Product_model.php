<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class Product_model extends CI_Model
 {
      public function get_user_id_from_username($username) {
        		$this->db->select('id');
        		$this->db->from('users');
        		$this->db->where('username', $username);
        		return $this->db->get()->row('id');
	   }
     
     //---------------------------  
	function GetthaiDateTime($day){
		$DateTimeArray= explode(" ",$day);
		$dateArray = explode("-",$DateTimeArray[0]);
		$date= $dateArray[2];
		$mon= $dateArray[1];
		$year= $dateArray[0]+543 ;
		$monthArray = array("01"=>"January","02"=>"February","03"=>"March","04"=>"April", "05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
      // $monthArray=Array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน","05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฎาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;".$monthArray[$mon]."&nbsp;".$year."<br>".$DateTimeArray[1];
	}
     //---------------------------  
	function GetthaiDate($day){
		$dateArray = explode("-",$day);
		$date= $dateArray[2];
		$mon= $dateArray[1];
		$year= $dateArray[0]+543 ;
		$monthArray = array("01"=>"January","02"=>"February","03"=>"March","04"=>"April", "05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
       //$monthArray=Array("01"=>"มกราคม ","02"=>"กุมภาพันธ์ ","03"=>"มีนาคม ","04"=>"เมษายน ","05"=>"พฤษภาคม ","06"=>"มิถุนายน ","07"=>"กรกฎาคม ","08"=>"สิงหาคม ","09"=>"กันยายน ","10"=>"ตุลาคม ","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;".$monthArray[$mon]."&nbsp;".$year;
	}
            //-------------------------
    function getCategory($datatype = null,$limit = null,$id = null) {
        if($id!=''){
            $txtwhere = 'AND id != "'.$id.'" ';
        }else{
            $txtwhere = '';
        }
        if($limit!=''){
            $txt = 'LIMIT '.$limit.'';
        }else{
            $txt = '';
        }
        $sql = $this->db->query("SELECT * FROM tb_category WHERE category_status='" . $datatype . "' $txtwhere ORDER BY category_order ASC $txt ");
        return $sql;
    }
       //---------------------
    function pCategoryDetail($cateID) {
        $sql = $this->db->query("SELECT * FROM tb_category WHERE id='" . $cateID . "' ");
        return $sql;
    }
       //---------------------
    function DoAddProductCategory($category_title = NULL,$category_title_th = NULL, $dataID = NULL , $img = NULL,$title1= NULL,$title1_th= NULL,$title2= NULL,$title2_th= NULL) {
        if ($dataID == '') {
            $sql = $this->db->query("SELECT MAX(category_order) AS nNax FROM tb_category WHERE category_status='1' ");
            foreach ($sql->result() AS $data) {
                
            }
            $nMaxIns = $data->nNax + 1;

            $data = array('category_title' => $category_title,
                'category_title_th' => $category_title_th,
                'title1' => $title1,
                'title1_th' => $title1_th,
                'title2' => $title2,
                'title2_th' => $title2_th,
                'category_order' => $nMaxIns,
                'images' => $img);
            if ($this->db->insert('tb_category', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
            $data = array('category_title' => $category_title,
                'category_title_th' => $category_title_th,
                'title1' => $title1,
                'title1_th' => $title1_th,
                'title2' => $title2,
                'title2_th' => $title2_th,
                'images' => $img);
            $this->db->where('id', $dataID);
            if ($this->db->update('tb_category', $data)) {
                $pass = $dataID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }
    //-----------------------------
    function updateOrderCate($dataID, $changeValue) {
        $data = array('category_order' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tb_category', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
        //---------------------
    function deletePcate($DataID) {
        $this->db->where('id', $DataID);
        if ($this->db->delete('tb_category')) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }
                //-------------------------
    function getdetailcateid($dataid = null) {
        $sql = $this->db->query("SELECT * FROM tb_data_detail WHERE product_category = '".$dataid ."'  ");
        return $sql;
    }
       //-------------------------------------
    function getDetail($productID) {
        $sql = $this->db->query("SELECT * FROM tb_data_detail WHERE id = '" . $productID . "' ");
        return $sql;
    }
    //----------------------------------------
      function addProduct($currentID = null,$comment = null,$comment_th = null,$product_price = null,$product_category = null,$product_name = null,$product_name_th = null,$product_title= NULL,$product_title_th= NULL) {
        $dateUpdate = date("Y-m-d H:i:s");
        $data = array('product_category' => $product_category,
            'product_desc' => $comment,
            'product_desc_th' => $comment_th,
            'product_price' => $product_price,
            'product_name' => $product_name,
            'product_name_th' => $product_name_th,
            'product_title' => $product_title,
            'product_title_th' => $product_title_th,
            'date_update' => $dateUpdate
        );

        if ($currentID == '') {

            if ($this->db->insert('tb_data_detail', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tb_data_detail', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }

        return $currentID;
    }
    //---------------------------------
     function AddImagesData($file_name, $Accessories_ID) {
        $data = array('imge_name' => $file_name,
            'product_id' => $Accessories_ID
        );
        $result = $this->db->insert('tb_img_data', $data);
    }
       //--------------------------------
        function AddCatalogueData($file_name, $AccessoriesID) {
        $data = array('imge_name' => $file_name,
            'product_id' => $AccessoriesID);
        $result = $this->db->insert('tb_file_data', $data);
    }
    //---------------------------------
       function loadProductImg($ProID=null,$limit=null) {
            if($limit!=''){
                 $txt = 'LIMIT '.$limit.'';
             }else{
                 $txt = '';
             }
        $sql = $this->db->query("SELECT * FROM `tb_img_data` WHERE product_id ='" . $ProID . "' ORDER BY id ASC $txt ");
        return $sql;
    }
    //---------------------------------
       function loadcateImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tb_category` WHERE id ='" . $ProID . "'  ");
        return $sql;
    }
    //----------------------------------
       function loadProductFile($ProID) {
        $sql = $this->db->query("SELECT * FROM `tb_file_data` WHERE product_id ='" . $ProID . "'  ");
        return $sql;
    }
 
    //------------------------------------------
     function deleteProductFile1($DataID, $fileType, $fileName) {
        if ($fileType == 'imgfile') {
            $this->db->where('imge_name', $fileName);
            if ($this->db->delete('tb_img_data')) {
                $pass = 1;
                @unlink('./uploadfile/product/' . $fileName);
            } else {
                $pass = 0;
            }
        } else if ($fileType == 'catalgoue') {
            $this->db->where('imge_name', $fileName);
            if ($this->db->delete('tb_file_data')) {
                $pass = 1;
                @unlink('./uploadfile/catalogue/' . $fileName);
            } else {
                $pass = 0;
            }
        }
        return $pass;
    }
    //------------------------------------------
     function deletecateimg($DataID, $fileName,$img) { 
         $data = array('images' => $img
        );
            $this->db->where('id', $DataID);
            if ($this->db->update('tb_category', $data)) {
                $pass = 1;
                @unlink('./uploadfile/' . $fileName);
            } else {
                $pass = 0;
            }
        return $pass;
    }
        //----------------------------------
       function getlinkyoutube($dataid) {
        $sql = $this->db->query("SELECT * FROM `tbl_youtube_link` WHERE product_id = '".$dataid."'  ");
        return $sql;
    }
        //----------------------------------
       function getlinkyoutubenew($dataid) {
        $sql = $this->db->query("SELECT * FROM `tbl_youtube_News` WHERE news_id = '".$dataid."'  ");
        return $sql;
    }
        //----------------------------------
       function getlinkyoutubereference($dataid) {
        $sql = $this->db->query("SELECT * FROM `tbl_youtube_reference` WHERE reference_id = '".$dataid."'  ");
        return $sql;
    }
            //-------------------------------
    	function addyoutube ($dataID=null , $value=null) {
       		$today = date("Y-m-d H:i:s");
        	$data = array('linkyoutube' => $value,
            	'product_id' =>$dataID,
            	'date_add' => $today
        	);
            if ($this->db->insert('tbl_youtube_link', $data)) {
                $dataID = $this->db->insert_id();
            } else {
                $dataID = 'Error';
            }   
    	}
            //-------------------------------
    	function addyoutubeNew ($dataID=null , $value=null) {
       		$today = date("Y-m-d H:i:s");
        	$data = array('linkyoutube' => $value,
            	'news_id' =>$dataID,
            	'date_add' => $today
        	);
            if ($this->db->insert('tbl_youtube_News', $data)) {
                $dataID = $this->db->insert_id();
            } else {
                $dataID = 'Error';
            }   
    	}
            //-------------------------------
    	function addyoutubereference ($dataID=null , $value=null) {
       		$today = date("Y-m-d H:i:s");
        	$data = array('linkyoutube' => $value,
            	'reference_id' =>$dataID,
            	'date_add' => $today
        	);
            if ($this->db->insert('tbl_youtube_reference', $data)) {
                $dataID = $this->db->insert_id();
            } else {
                $dataID = 'Error';
            }   
    	}
              //------------------------------------------
        function delete_data($dataID = NULL, $table = NULL) {
			$data = array('id' => $dataID,);
			if ($this->db->delete($table, $data)) {
				$pass = 1;
			} else {
				$pass = 0;
				//$this->db->_error_message(); 
			}
			return $pass;
    	}
        //----------------------------------------
          function getproductList($category=NULL) {
              if($category!=''){
              $sql = $this->db->query("SELECT a.* ,  b.category_title FROM tb_data_detail a LEFT JOIN tb_category b ON a.product_category=b.id WHERE a.data_status='1' AND b.category_status='1' AND a.product_category = '$category' ORDER BY b.category_order ASC  ");    
              }else{
        $sql = $this->db->query("SELECT a.* ,  b.category_title FROM tb_data_detail a LEFT JOIN tb_category b ON a.product_category=b.id WHERE a.data_status='1' AND b.category_status='1' ORDER BY b.category_order ASC  ");
              }
        return $sql;
    }
        //------------------------------------
    function getNewDetail($curentID) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tbl_news_data');
        return $sql;
    }
        //------------------------------------
    function getreferenceDetail($curentID) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tbl_reference_data');
        return $sql;
    }
        //------------------------------------
    function deleteNewsImg($imageID, $imageName) {
        $this->db->where('id', $imageID);
        if ($this->db->delete('tbl_news_images')) {
            @unlink('./uploadfile/news/' . $imageName);
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
        //------------------------------------
    function deletereferenceImg($imageID, $imageName) {
        $this->db->where('id', $imageID);
        if ($this->db->delete('tbl_reference_images')) {
            @unlink('./uploadfile/reference/' . $imageName);
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
      //------------------------------------
    function addNews($news_title=NULL,$news_title_th =NULL, $news_detail=NULL,$news_detail_th =NULL,$currentID =NULL, $news_date_add=NULL) {
        $data = array('news_title' => $news_title,
            'news_title_th' => $news_title_th, 
            'news_detail' => $news_detail, 
            'news_detail_th' => $news_detail_th, 
            'news_date_add' => $news_date_add);
        if ($currentID == '') {
            if ($this->db->insert('tbl_news_data', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_news_data', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }
      //------------------------------------
    function addreference($reference_title, $reference_detail, $currentID, $reference_date_add) {
        $data = array('reference_title' => $reference_title, 'reference_detail' => $reference_detail, 'reference_date_add' => $reference_date_add);
        if ($currentID == '') {
            if ($this->db->insert('tbl_reference_data', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_reference_data', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }
      //------------------------------------
    function AddNewsImg($file_name, $ProductID) {
        $data = array('images_name' => $file_name,
            'news_id' => $ProductID
        );
        if ( $this->db->insert('tbl_news_images', $data)) {
            $pass = '';
        } else {
            $pass = 'Error';
        }
    }
      //------------------------------------
    function AddreferenceImg($file_name, $ProductID) {
        $data = array('images_name' => $file_name,
            'reference_id' => $ProductID
        );
        if ( $this->db->insert('tbl_reference_images', $data)) {
            $pass = '';
        } else {
            $pass = 'Error';
        }
    }
       //----------------------------
    function loadNewsImg($ProID=null,$limit=null) {
        if($limit!=''){
                 $txt = 'LIMIT '.$limit.'';
             }else{
                 $txt = '';
             }
        $sql = $this->db->query("SELECT * FROM `tbl_news_images` WHERE news_id ='" . $ProID . "' ORDER BY id ASC $txt ");
        return $sql;
    }
       //----------------------------
    function loadreferenceImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_reference_images` WHERE reference_id ='" . $ProID . "'  ");
        return $sql;
    }
     //------------------------------------
    function news_list() {
        $sql = $this->db->query("SELECT * FROM tbl_news_data WHERE news_status = '1' ORDER BY news_date_add DESC ");
        return $sql;
    }
     //------------------------------------
    function reference_list() {
        $sql = $this->db->query("SELECT * FROM tbl_reference_data WHERE reference_status = '1' ORDER BY id ");
        return $sql;
    }
    //------------------------------------
    function getDay($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $date2;
    }

//------------------------------------
    function getMonth($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $monthArray[$mon];
    }

//------------------------------------
    function getYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $year;
    }

    //$strMonthCut =array("01"=>"Jan","02"=>"Feb","03"=>"Mar","04"=>"Apr","05"=>"May","06"=>"Jun","07"=>"Jul","08"=>"Aug","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dec");
    //------------------------------------
    function getDayMonthYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $day;
    }
     //------------------------------------
    function deleteNews($DataID) {
        $sql = $this->db->query("SELECT * FROM tbl_news_images WHERE news_id ='" . $DataID . "' ");
        foreach ($sql->result() AS $data) {
            @unlink('./uploadfile/news/' . $data->images_name);
        }
        $this->db->where('news_id', $DataID);
        $this->db->delete('tbl_news_images');
        
        $this->db->where('id', $DataID);
        if ($this->db->delete('tbl_news_data')) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }
     //------------------------------------
    function deletereference($DataID) {
        $sql = $this->db->query("SELECT * FROM tbl_reference_images WHERE reference_id ='" . $DataID . "' ");
        foreach ($sql->result() AS $data) {
            @unlink('./uploadfile/reference/' . $data->images_name);
        }
        $this->db->where('reference_id', $DataID);
        $this->db->delete('tbl_reference_images');
        
        $this->db->where('id', $DataID);
        if ($this->db->delete('tbl_reference_data')) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }
      //------------------------------------
    function getslideDetail($curentID=null) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tbl_slide_data');
        return $sql;
    }
   //----------------------------
    function loadSlideImg($ProID=NULL,$type=NULL){
        $sql = $this->db->query("SELECT * FROM `tbl_slide_img` WHERE slide_id = '".$ProID."' AND type = '".$type."' ");
        return $sql;
    }
     //------------------------------------
    function deleteSlideImg($DataID, $imge_name) {
        $this->db->where('slide_id', $DataID);
        $this->db->where('image_name', $imge_name);
        if ($this->db->delete('tbl_slide_img')) {
            @unlink('./uploadfile/banner/' . $imge_name);
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
      //------------------------------------
    function addSlide($slide_title,$slide_title_th, $slide_detail,$slide_detail_th, $currentID, $slide_desc,$slide_desc_th,$learnMore) { 
        $data = array('slide_title' => $slide_title, 
            'slide_title_th' => $slide_title_th, 
            'slide_detail' => $slide_detail, 
            'slide_detail_th' => $slide_detail_th, 
            'slide_desc' => $slide_desc,
            'slide_desc_th' => $slide_desc_th,
            'learnMore' =>$learnMore);
        if ($currentID == '') {
            if ($this->db->insert('tbl_slide_data', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_slide_data', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }
     //------------------------------------
    function AddSlideImg($file_name, $ProductID,$type) {
        $data = array('image_name' => $file_name,
            'slide_id' => $ProductID,
            'type' => $type
        );
        if ($result = $this->db->insert('tbl_slide_img', $data)) {
            $pass = '';
        } else {
            $pass = 'Errpr';
        }
    }
    //---------------------------	 
    function update_ShowOnWeb($dataID = NULL, $check = NULL, $table = NULL) {
        $data = array(
            'show_onweb' => $check
        );
        $this->db->where('id', $dataID);
        if ($this->db->update($table, $data)) {
            $pass = 1;
        } else {
            $pass = 0;
            //$this->db->_error_message(); 
        }
        return $pass;
    }
    //------------------------------------
    function deleteSlide($DataID=null) {
        $sql = $this->db->query("SELECT * FROM tbl_slide_img WHERE slide_id ='" . $DataID . "' ");
        foreach ($sql->result() AS $data) {
            @unlink('./uploadfile/banner/' . $data->image_name);
        }
        $this->db->where('slide_id', $DataID);
        $this->db->delete('tbl_slide_img');
      $this->db->where('id', $DataID);
        if($this->db->delete('tbl_slide_data')){
            $pass = '1';
        }else{
            $pass = 'Error';
        }
        return $pass;
    }
      //---------------------------
    function slide_list() {
        $sql = $this->db->query("SELECT * FROM tbl_slide_data WHERE show_onweb = '1' ORDER BY id ");
        return $sql;
    }
     //-------------------------------------
    function doChangePass($newpass,$id) {
        $newpass = md5($newpass);
        $sql = "UPDATE tbl_user_data SET `password` = '" . $newpass . "' WHERE id = '".$id."' ";
        if ($this->db->query($sql)) {
            return 1;
        } else {
            return 0;
        }
    }
        //---------------------
    function getuserdata($dataID) {
        $sql = $this->db->query("SELECT * FROM tbl_user_data WHERE id ='".$dataID."' ");
        return $sql;
    }
        //---------------------
    function chk_user($username=null) {
        $sql = $this->db->query("SELECT * FROM tbl_user_data WHERE user_name ='" .$username. "' ");
        return $sql;
    }
        //---------------------
    function add_admin($Name=null,$username=null,$Password=null,$password_old=null,$dataID=null) {
       if ($dataID == '') {
                            $Password1 = md5($Password);
                            $data = array(
				'name_sname' => $Name,
				'user_name' => $username,
				'password' => $Password1,
				'user_type' => '2');
				if ($this->db->insert('tbl_user_data', $data)) {
					$dataID = $this->db->insert_id();
				} else {
					$dataID = 'Error';
				}
			} else {
                        if($Password ==''){
                            $Password1 = $password_old;
                        }else{
                            $Password1 = md5($Password);
                        }
				$data = array(
				'name_sname' => $Name,
				'user_name' => $username,
				'password' => $Password1,
				'user_type' => '2');
				$this->db->where('id', $dataID);
				if($this->db->update('tbl_user_data', $data)){
					$dataID = $dataID;
				} else {
					$dataID = 'Error';
				}
			}
			return $dataID;
    }
      //---------------------------
    function admin_list() {
        $sql = $this->db->query("SELECT * FROM tbl_user_data WHERE user_type != '1' ORDER BY id ");
        return $sql;
    }
    //--------------------
    function productListByCate($cateID = null, $limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }
        if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }

        $sql = "SELECT * FROM tb_data_detail WHERE product_category = '" . $cateID . "' AND data_status='1' $txtNot ORDER BY id DESC $txtWhere  $txtStart ";
        $query = $this->db->query($sql);
        return $query;
    }
     //---------------------
    function getSlideImg($dataId) {
        $sql = $this->db->query("SELECT * FROM tbl_slide_img WHERE slide_id = '" . $dataId . "' ORDER BY id ASC LiMIT 0,1 ");
        $numsql = $sql->num_rows();
        if($numsql!=0){
        foreach ($sql->result() AS $data) {}
        return $data->image_name;
        
       // if($numsql!=''){
        
        }else{
            return 0;
        }
    }
      //----------------------------------------
    function getNewsDetail1($limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        $sql = $this->db->query("SELECT * FROM  tbl_news_data WHERE news_status = '1' $txtNot ORDER BY news_date_add DESC  $txtWhere  $txtStart  " );
        return $sql;
    }
      //----------------------------------------
    function getreferenceDetail1($limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        $sql = $this->db->query("SELECT * FROM  tbl_reference_data WHERE reference_status = '1' ORDER BY reference_date_add DESC  $txtWhere $txtNot $txtStart  " );
        return $sql;
    }
     //--------------------------------
    function getSlideDetail1(){
        $sql = $this->db->query("SELECT * FROM  tbl_slide_data WHERE show_onweb = '1'") ;
        return $sql;
    }
     //--------------------------------
    function getcateDetail(){
        $sql = $this->db->query("SELECT * FROM tb_category WHERE category_status = '1' ORDER BY category_order ASC") ;
        return $sql;
    }
        //---------------------
    function getreferenceImg($dataId) {
        $sql = $this->db->query("SELECT * FROM tbl_reference_images WHERE reference_id = '" . $dataId . "' ORDER BY id ASC LiMIT 0,1 ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->images_name;
    }
        //---------------------
    function getNewsImg($dataId) {
        $sql = $this->db->query("SELECT * FROM tbl_news_images WHERE news_id = '" . $dataId . "' ORDER BY id ASC LiMIT 0,1 ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->images_name;
    }
     //------------------------------
    function str_limit_html($value, $limit) {

        if (mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }

        // Strip text with HTML tags, sum html len tags too.
        // Is there another way to do it?
        do {
            $len = mb_strwidth($value, 'UTF-8');
            $len_stripped = mb_strwidth(strip_tags($value), 'UTF-8');
            $len_tags = $len - $len_stripped;

            $value = mb_strimwidth($value, 0, $limit + $len_tags, '', 'UTF-8');
        } while ($len_stripped > $limit);

        // Load as HTML ignoring errors
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $value, LIBXML_HTML_NODEFDTD);

        // Fix the html errors
        $value = $dom->saveHtml($dom->getElementsByTagName('body')->item(0));

        // Remove body tag
        $value = mb_strimwidth($value, 6, mb_strwidth($value, 'UTF-8') - 13, '', 'UTF-8'); // <body> and </body>
        // Remove empty tags
        return preg_replace('/<(\w+)\b(?:\s+[\w\-.:]+(?:\s*=\s*(?:"[^"]*"|"[^"]*"|[\w\-.:]+))?)*\s*\/?>\s*<\/\1\s*>/', '', $value);
    }
        //---------------------
    function getFirstImg($dataId) {
        $sql = $this->db->query("SELECT * FROM tb_img_data WHERE product_id = '" . $dataId . "' ORDER BY id ASC LiMIT 0,1 ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->imge_name;
    }
     function search($txtSearch=null){
		 	 
		 $sql="SELECT a.*,b.imge_name,c.category_title FROM  tb_data_detail a LEFT JOIN tb_img_data b ON a.id=b.product_id LEFT JOIN tb_category c ON a.product_category = c.id  WHERE a.product_nameen LIKE '%".$txtSearch."%' OR a.product_nameth LIKE '%".$txtSearch."%' AND a.data_status = '1' GROUP BY a.id ";
		 $query=$this->db->query($sql);
		 return $query;
	 }
            //---------------------SELECT * FROM `tb_product_catalogue` ORDER BY `tb_product_catalogue`.`id` ASC
    function getPdetailcatalogue($productID) {
        $sql = "SELECT * FROM tb_file_data WHERE product_id ='" . $productID . "' ORDER BY id ASC ";
        $query = $this->db->query($sql);
        return $query;
    }
     //---------------------
    function getPdetailCategory($productID = NULL) {
        $sql = "SELECT a.* , b.id AS CategoryID, a.id AS productID , b.product_topic,b.product_desc,b.product_nameth,b.product_nameen FROM tb_data_detail b LEFT JOIN tb_category a ON b.product_category=a.id WHERE  b.id='" . $productID . "' ";
        $query = $this->db->query($sql);
        return $query;
    }
     //---------------------- 
    function getCategory1($datatype = null) {

        $sql = $this->db->query("SELECT COUNT(*) AS TotalCount, b.id,b.category_title FROM tb_data_detail a INNER JOIN tb_category b ON a.product_category = b.id where b.category_status = '" . $datatype . "' GROUP BY b.id,b.category_title");
        return $sql;
    }
       //----------------------------------------
    function getNewsDetailByID($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_news_data WHERE id = '" . $productID . "' AND news_status = '1' ");
        return $sql;
    }
       //----------------------------------------
    function getreferenceDetailByID($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_reference_data WHERE id = '" . $productID . "' AND reference_status = '1' ");
        return $sql;
    }
     //----------------------------------------
          function getproductdetail($limit=NULL) {
             if($limit!=''){
                 $txt = 'LIMIT '.$limit.'';
             }else{
                 $txt = '';
             }
              $sql = $this->db->query("SELECT * FROM tb_data_detail  WHERE data_status='1' ORDER BY date_update DESC  $txt");    
             
        return $sql;
    }
       //----------------------------------------
    function getproductDetail1($limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        $sql = $this->db->query("SELECT * FROM  tb_data_detail WHERE data_status = '1' $txtNot ORDER BY date_update DESC  $txtWhere  $txtStart  " );
        return $sql;
    }
    //---------------------------  
	function addtocart($product_id=NULL,$amount=NULL,$price=NULL){
            $x = '';
            $today = date("Y-m-d H:i:s");
                if($this->session->userdata('OrderNumber')==''){
                    $alphabet = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		$keygroup = implode($pass); 
                $data = array('OrderNumber' => $keygroup,
                              'date_booking' => $today);
				if ($this->db->insert('tbl_order', $data)) {
                                    $x = $this->db->insert_id();
                                    $Order = array(
                                        'OrderNumber' => $x);
                                    $this->session->set_userdata($Order);
                                    $data1 = array( 'order_id' => $x,
                                                    'product_id' => $product_id,
                                                    'date_booking' => $today,
                                                    'price' => $price,
                                                    'amount' => $amount
                                        );
                                    $this->db->insert('tbl_order_detail', $data1);
				} else {
					$x = 'Error';
				}
                }else{
                    $sql = "SELECT *  FROM `tbl_order_detail` WHERE product_id = '".$product_id."' AND order_id = '".$this->session->userdata('OrderNumber')."'";
                    $query = $this->db->query($sql);
                    $numproduct = $query->num_rows();
                    if($numproduct>0){
                        $sql2 = "UPDATE `tbl_order_detail` SET amount = amount+$amount WHERE order_id = '".$this->session->userdata('OrderNumber')."' AND product_id = '".$product_id."' ";
				if($this->db->query($sql2)){ 
					$x = 1;
				}
                    }else{
                        $data2 = array( 'order_id' => $this->session->userdata('OrderNumber'),
                                        'product_id' => $product_id,
                                        'date_booking' => $today,
                                        'price' => $price,
                                        'amount' => $amount
                                        );
                        if ($this->db->insert('tbl_order_detail', $data2)) {
                                    $x = 1;
                    }
                }
                
	}
        return $x;
        }
        //--------------------------------
        function countcart($OrderNumber=NULL){
            $sql = "SELECT SUM(amount) AS sumamount FROM tbl_order_detail WHERE order_id = '.$OrderNumber.'";
                    $query = $this->db->query($sql);
                    foreach ($query->result() AS $query2){}
                    return $query2->sumamount;
        }
        //--------------------------------
        function getorder_detail($OrderNumber=NULL){
            $sql = "SELECT a.*,b.product_name,b.product_name_th,b.product_title,b.product_title_th FROM tbl_order_detail AS a LEFT JOIN tb_data_detail AS b ON a.product_id = b.id WHERE a.order_id = '.$OrderNumber.'";
                    $query = $this->db->query($sql);
                    return $query;
        }
        //--------------------------------
        function sumcart($OrderNumber=NULL){
            $sql = "SELECT SUM(amount*price) AS totalprice FROM tbl_order_detail WHERE order_id = '".$OrderNumber."'";
                    $query = $this->db->query($sql);
                    foreach ($query->result() AS $query2){}
                    return $query2->totalprice;
        }
        //--------------------------------
        function sumcartbyid($id=NULL){
            $sql = "SELECT SUM(amount*price) AS totalprice FROM tbl_order_detail WHERE id = '".$id."'";
                    $query = $this->db->query($sql);
                    foreach ($query->result() AS $query2){}
                    return $query2->totalprice;
        }
           //---------------------
    function chageamount($amount=null,$orderdetail_id=null,$OrderNumber=NULL) {

  
				$data = array(
				'amount' => $amount);
				$this->db->where('id', $orderdetail_id);
				if($this->db->update('tbl_order_detail', $data)){
					$dataID = $orderdetail_id;
				} else {
					$dataID = 'Error';
				}
                                $sumcart = number_format($this->sumcart($OrderNumber),2);
			return $sumcart;
    }
           //---------------------
    function deletecart($orderdetail_id=null) {

  
				$this->db->where('id', $orderdetail_id);
				if($this->db->delete('tbl_order_detail')){
					$dataID = 1;
				} else {
					$dataID = 'Error';
				}
                                
			return $dataID;
    }
    //--------------------------------
        function getorder($order_id=NULL){
            $sql = "SELECT * FROM tbl_order WHERE id = '".$order_id."'";
                    $query = $this->db->query($sql);
                    return $query;
        }
    //--------------------------------
        function getprovince($name=NULL){
            $sql = "SELECT * FROM provinces ORDER BY ".$name."";
                    $query = $this->db->query($sql);
                    return $query;
        }
    //--------------------------------
        function getamphures($province=NULL,$name=NULL){
            $sql = "SELECT * FROM amphures WHERE province_id = '".$province."' ORDER BY ".$name."";
                    $query = $this->db->query($sql);
                    return $query;
        }
    //--------------------------------
        function getPostalcode($amphure_id=NULL){
            $sql = "SELECT * FROM districts WHERE amphure_id = '".$amphure_id."' LIMIT 1";
                    $query = $this->db->query($sql);
                    return $query;
        }
    //--------------------------------
        function updateorder($order_id=NULL,$shipping1=NULL,$totalall1=NULL,$checkdata=NULL){
        $data = array('Delivery_Cost' => $shipping1,
            'checkdata' => $checkdata,
            'total_price' => $totalall1 );
        $this->db->where('id', $order_id);
        if ($this->db->update('tbl_order', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
        }
    //--------------------------------
        function proceed($order_id=NULL,$NameSurname=NULL,$Telephone=NULL,$email=NULL,$address=NULL,$province=NULL,$amphures=NULL,$Postal=NULL,$member_id=NULL){
        $data = array('customer_name' => $NameSurname,
            'customer_email' => $email,
            'customer_telephone' => $Telephone,
            'province_id' => $province,
            'amphure_id' => $amphures,
            'postalCode' => $Postal,
            'booking_status' => '1',
            'cf_status' => '0',
            'customer_id' => $member_id,
            'address' => $address );
        $this->db->where('id', $order_id);
        if ($this->db->update('tbl_order', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
        }
     //--------------------------------
        function getorderbyordernum($order_num=NULL){
            $sql = "SELECT * FROM tbl_order WHERE OrderNumber = '".$order_num."'";
                    $query = $this->db->query($sql);
                    return $query;
        }
     //--------------------------------
        function getprovincesbyid($province_id=NULL){
            $sql = "SELECT * FROM provinces WHERE id = '".$province_id."'";
                    $query = $this->db->query($sql);
                    return $query;
        }
        //--------------------------------
        function getamphuresbyid($amphure_id=NULL){
            $sql = "SELECT * FROM amphures WHERE id = '".$amphure_id."' ";
                    $query = $this->db->query($sql);
                    return $query;
        }
          //--------------------------------
        function gettotalorder($cf_status=NULL){
            $sql = "SELECT * FROM tbl_order WHERE booking_status = '1' AND cf_status = '".$cf_status."' ORDER BY date_booking DESC";
                    $query = $this->db->query($sql);
                    return $query;
        }
        //--------------------------------
        function updatecf($dataid=NULL,$cf_status=NULL){
        $data = array('cf_status' => $cf_status);
        $this->db->where('id', $dataid);
        if ($this->db->update('tbl_order', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
        }
         //------------------------------------
    function addpayment($Ordernumber=NULL,$Transferamount=NULL,$name=NULL,$telephone=NULL,$comment=NULL,$dateadd=NULL,$timeadd=NULL,$radioadd=NULL) {
        $today = date("Y-m-d H:i:s");
        $data = array('order_id' => $Ordernumber,
            'NameSurname' => $name, 
            'Telephone' => $telephone, 
            'TransferAmount' => $Transferamount, 
            'TransferDate' => $dateadd, 
            'Time' => $timeadd, 
            'Bank' => $radioadd, 
            'AdditionalText' => $comment, 
            'date_add' => $today);
        
            if ($this->db->insert('tbl_payment_notify', $data)) {
                $pass = $this->db->insert_id();
                $data = array('payment_notify' => '1');
                $this->db->where('id', $Ordernumber);
                $this->db->update('tbl_order', $data);
            } else {
                $pass = 'Error';
            }

        return $pass;
    }
       //------------------------------------
    function AddpaymentImg($file_name, $ProductID) {
        $data = array('file' => $file_name);
        $this->db->where('id', $ProductID);
        if ( $this->db->update('tbl_payment_notify', $data)) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
    }
           //------------------------------------
    function getpayment() {
         $sql = "SELECT * FROM tbl_payment_notify ORDER BY date_add DESC";
         $query = $this->db->query($sql);
        return $query;
    }
           //------------------------------------
    function getpaymentDetail($curentID) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tbl_payment_notify');
        return $sql;
    }
           //------------------------------------
    function getpaymentbyorderid($orderid) {
        $this->db->where('order_id', $orderid);
        $sql = $this->db->get('tbl_payment_notify');
        return $sql;
    }
           //------------------------------------
    function searchdata($searchdata,$cateid) {
        if($this->session->userdata('weblang') == 'en'){
         $sql = "SELECT * FROM tb_data_detail WHERE product_category = '".$cateid."' AND product_name LIKE '%".$searchdata."%' ORDER BY date_update DESC";
        }else{
         $sql = "SELECT * FROM tb_data_detail WHERE product_category = '".$cateid."' AND product_name_th LIKE '%".$searchdata."%' ORDER BY date_update DESC";
        }
         $query = $this->db->query($sql);
        return $query;
    }
    //-----------------------------
    function chk_facb_ty($id){
$query = $this->db->query("SELECT (id) as cus_id FROM `tbl_customers` WHERE facebook_id ='$id'");
$row = $query->num_rows();
if ($row>0){
    foreach ($query->result() AS $query2){}
        return $query2->cus_id;
 }else{
        return 0;
 }
}
//---------------------------------
function add_cus_face($fid,$name,$last,$email){
    $today = date("Y-m-d H:i:s");
  $data = array(
             "first_name" =>$name,
             "last_name" =>$last,
             "cus_email" =>$email,
              "facebook_id"=>$fid,
              "date_add"=>$today,
              "last_login"=>$today
              );
  if ($this->db->insert('tbl_customers', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }

                return $pass;
}
//-------------------------------------
    function get_member_fac($idcus){
$sql = "SELECT * FROM `tbl_customers` WHERE id = '".$idcus."'";
$datare = $this->db->query($sql)->result();


           return $datare;
}
//-------------------------------------
    function get_member(){
$sql = "SELECT * FROM `tbl_customers` GROUP BY cus_email ORDER BY date_add DESC";
$datare = $this->db->query($sql)->result();


           return $datare;
}
    //--------------------------------
        function getordermember($memberid=NULL){
            $sql = "SELECT * FROM tbl_order WHERE booking_status = '1' AND customer_id = '".$memberid."' ORDER BY date_booking DESC";
                    $query = $this->db->query($sql);
                    return $query;
        }
           //-----------------------------
    function checkmail($email){
$query = $this->db->query("SELECT * FROM `tbl_customers` WHERE cus_email = '".$email."'");
$row = $query->num_rows();

        return $row;
 
}
 //--------------------------------
        function getorderbyemail($email=NULL){
            $sql = "SELECT a.*,b.id AS member_id FROM tbl_order AS a LEFT JOIN tbl_customers AS b ON a.customer_id = b.id WHERE b.cus_email = '".$email."' ORDER BY a.date_booking DESC";
                    $query = $this->db->query($sql);
                    return $query;
        }
        //-------------------------------------
    function get_memberbyid($id=NULL){
$sql = "SELECT * FROM `tbl_customers` WHERE id = '".$id."'";
$datare = $this->db->query($sql);


           return $datare;
}
 }
