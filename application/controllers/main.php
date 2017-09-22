<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('/main_model');
    }

	public function index(){
        $this->load->helper(array('form', 'url'));

	    $user=$this->main_model->get_where_row('user', array('id'=>8));
	    $blog=$this->main_model->get_where_row('blog_info', array('id'=>8));

		$this->load->view('main', array('user'=>$user,'blog'=>$blog));
	}

	/* COMMON */
	public function save_info_ajax(){
	    $profile=($this->input->post('profile')=='한글, 영문, 숫자 혼용가능 (한글 기준 25자 이내)')? '' : $this->input->post('profile');
	    $location=($this->input->post('location')=='선택')? '' : $this->input->post('location');
	    $main_interest=($this->input->post('main_interest')=='선택')? '' : $this->input->post('sport');
	    $favorite_league=($this->input->post('fav_league')=='0')? '' : $this->input->post('fav_league');
        $result=array('profile'=>$profile,'network_allow'=>$this->input->post('network'),'location'=>$location,'main_interest'=>$main_interest,'favorite_league'=>$favorite_league);

        $this->main_model->insert_update('user', array('nickname'=>$this->input->post('nick')), array('id'=>$this->input->post('id')));
        $this->main_model->insert_update('blog_info', $result, array('id'=>$this->input->post('id')));
    }

    public function check_nick_ajax(){
	    echo $this->main_model->get_num_row('user', array('nickname'=>$this->input->post('nick')));
    }

    public function do_upload($id){
        $upload_dir=$_SERVER['DOCUMENT_ROOT'].'/public/uploads/'.$id;
        $config['upload_path'] = $upload_dir;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '5000';
        $config['max_width']  = '2500';
        $config['max_height']  = '1500';
        $this->load->library('upload', $config);
        $this->upload->do_upload();

        if(!is_dir($upload_dir)) mkdir($upload_dir);

        if($this->upload->do_upload()) $this->main_model->insert_update('blog_info', array('profile_image'=>$this->upload->data()['file_name']), array('id'=>$id));
        else echo $this->upload->display_errors();
    }

    /* TEST */
    public function test(){
        var_dump($_POST);
//        $this->load->view('test');
    }
}