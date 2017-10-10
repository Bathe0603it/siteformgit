<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    
    class RoleModel extends MY_Model{
        public $table = 'role';
        public function __construct(){
            $this->load->database();
        }
    
        public function getAll($input = null){
            $result = $this->db->select()
                                ->from($this->table)
                                ->get()
                                ->result_array();
            return $result;
        }

        public function getWhere($where = null){
            $result = $this->db->select()
                                ->from($this->table)
                                ->where($where)
                                ->get()
                                ->result_array();
            return $result;
        }

        public function getLike($like = null){
            $result = $this->db->select()
                                ->from($this->table)
                                ->like($like)
                                ->get()
                                ->result_array();
            return $result;
        }

        public function getParam(){

        }
    
    }
