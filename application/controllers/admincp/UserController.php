<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    /**
     * 
     * function action login admin
     * 
     * */
    class UserController extends MY_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('usermodel');
        }
    
        public function index(){
            $getall = $this->usermodel->getAll();
            $data['getall'] = $getall;
            $this->loadview($this->view,$data);
        }
        
        public function edit(){
            
        }
        
        public function create(){
            if (is_post()) {
                $this->postCreate();
            }
            $this->loadview($this->view);
        }
        private function postCreate(){
            // xu ly formvalidate
            
            // neu ok
            
            // neu k ok
        }
        
        
    }
