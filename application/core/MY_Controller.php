<?php
    class MY_Controller extends CI_Controller{
        public $view = null;
        public $object      = null;
        public $method      = null;
        public $edit        = 'edit';
        public $create      = 'create';
        function __construct(){
            parent::__construct();
            /** xu ly dang nhap **/
            $this->load->helper('admin_helper');
            $this->load->library(array('form_validation','auth','paginationextends'));
            $segment1 = $this->uri->segment(1);
            $segment2 = $this->uri->segment(2);
            $segment3 = $this->uri->segment(3);
            if (!$this->session->has_userdata('logined') && $segment2 != 'logincontroller') {
                return redirect(admin_url('logincontroller'));
            }
            if ($this->session->has_userdata('logined') && $segment2 == 'logincontroller') {
                return redirect(admin_url('dashboardcontroller'));
            }
            $info_admin = $this->session->userdata('logined');
            
            /** xu ly view **/
            $this->view = 'admincp/' . $this->router->fetch_class() .'/' . $this->router->fetch_method();
            $this->object   = $this->router->fetch_class();
            $this->method   = $this->router->fetch_method();
        }
         
        function loadview($url = null ,$data = null){
            $data['view']  = !empty($url)?$url:$this->view;
            $this->load->view('admincp/layout/index',$data);
        }
    }
?>