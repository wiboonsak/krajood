<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

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
        $this->load->model('Product_model');
    }
	
	
	//---------------------------------
	public function index($page=null)
	{
            $perpage = 5; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
               $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
                $data['newsDetail'] = $this->Product_model->getNewsDetail1($limit,$notUse,$start,$perpage);
           $this->load->view('fontend/news_list',$data);
	}
        public function Page($page=null)
	{
                $perpage = 5; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
               $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
                $data['newsDetail'] = $this->Product_model->getNewsDetail1($limit,$notUse,$start,$perpage);
		
		//--------------------------------
		//$this->load->view('fontend/header',$data);
		$this->load->view('fontend/news_list',$data);
		//$this->load->view('fontend/footer');

        }
        public function news_detail($dataID=null)
	{
                $data['newsDetail'] = $this->Product_model->getNewsDetailByID($dataID);
                $data['imagesList']=$this->Product_model->loadNewsImg($dataID);
                $data['linkyoutube']=$this->Product_model->getlinkyoutubenew($dataID);
                $data['getNewsDetail1']=$this->Product_model->getNewsDetail1('3',$dataID,'-100','-100');
		$this->load->view('fontend/news_detail',$data);
        }
}
