<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    /**
     * 
     * function action login admin
     * 
     * */
    class DashboardController extends MY_Controller
    {
        public function __construct(){
            parent::__construct();
        }
    
        public function index(){
            $this->load->view('admincp/dashboardcontroller/index');
        }
        
        
    }
