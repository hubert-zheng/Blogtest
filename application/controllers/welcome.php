<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    //构造方法
    public function __construct(){
        parent::__construct(); //父类构造方法被覆盖，显式调用父类构造方法
        $this->load->library('session');  //session在不同控制器之间跳转，每个控制器都需要load
    }

	public function index()
	{

        $this->load->helper('url');
        //$this->load->view('register');
		//加载数据
		$this->load->model('Load_blog_model');
		$result['articlelist']=$this->Load_blog_model->get_artclelist(0);
		//var_dump($result);
        $this->load->view('contentlist',$result);

	}

    /**
     *下拉到底部加载更多文章
     */
    public function loadmore(){

            $this->load->helper('url');
            //加载数据
            $page = intval($_GET['page']);  //获取请求的页数
            $start = $page * 5;
            $this->load->model('Load_blog_model');
            $result['articlelist'] = $this->Load_blog_model->get_artclelist($start);
            echo json_encode($result);


        //$this->load->view('contentlist',$result);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */