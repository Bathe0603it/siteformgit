<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    /**
     * 
     * function action login admin
     * 
     * */
    class LoginController extends MY_Controller
    {
        public function __construct(){
            parent::__construct();
        }
    
        public function index(){
            if (is_post()) {
                $this->loginPost();
            }
            $this->load->view('admincp/logincontroller/index');
        }
        
        public function loginPost(){
            $input  = $this->input->post();
            if ($this->form_validation->run('admin_login'))
            {
                $arr_input  = array(
                    $input['email'],$input['password']
                );
                if($this->auth->process_login($arr_input)){
                    redirect(admin_url('dashboardcontroller'));
                }
                else{
                    echo 'login false';
                }
                //return 'false';
            }
            else
            {
                echo 'none';
            }
        }
    }
