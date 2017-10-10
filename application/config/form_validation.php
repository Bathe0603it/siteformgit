<?php
defined('BASEPATH') or exit('No direct script access allowed');
$config = array(
    /** VALIDATE đăng nhập **/
    'admin_login' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email',
            'errors' => array(
                'required' => '%s không được để trống.',
                'valid_email' => '%s không đúng định dạng',
                )),

        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[6]|max_length[12]',
            'errors' => array(
                'required' => '%s không được để trống.',
                'min_length' => '%s phải có số ký tự tối thiểu là 6',
                'max_length' => '%s có số ký tự tối đa là 12')),

    ),

    'user_create' => array(
        array(
            'field' => 'fullname',
            'label' => 'Thông tin tên',
            'rules' => 'trim|required|max_length[100]',
            'errors' => array(
                'required' => '%s không được để trống.',
                'max_length' => '%s có chiều dài không lớn hơn 100',
                )),

        array(
            'field' => 'email',
            'label' => 'Thông tin Email',
            'rules' => 'trim|required|min_length[6]|max_length[12]|valid_email',
            'errors' => array(
                'required' => '%s không được để trống.',
                'valid_email'   => '%s nhập đúng định dạng.',
                'min_length' => '%s phải có số ký tự tối thiểu là 6',
                'max_length' => '%s có số ký tự tối đa là 12')),

        array(
            'field' => 'phonenumber',
            'label' => 'Thông tin số điện thoại',
            'rules' => 'trim|required|min_length[9]|max_length[15]',
            'errors' => array(
                'required' => '%s không được để trống.',
                'min_length' => '%s phải có số ký tự tối thiểu là 9',
                'max_length' => '%s có số ký tự tối đa là 15')),

        array(
            'field' => 'address',
            'label' => 'Thông tin địa chỉ',
            'rules' => 'trim|required|min_length[6]|max_length[255]',
            'errors' => array(
                'required' => '%s không được để trống.',
                'min_length' => '%s phải có số ký tự tối thiểu là 6',
                'max_length' => '%s có số ký tự tối đa là 255')),

        array(
            'field' => 'description',
            'label' => 'Password',
            'rules' => 'trim',
            'errors' => array(
                'required' => '%s không được để trống.',
                'min_length' => '%s phải có số ký tự tối thiểu là 6',
                'max_length' => '%s có số ký tự tối đa là 12')),

        array(
            'field' => 'receive',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[6]|max_length[12]',
            'errors' => array(
                'required' => '%s không được để trống.',
                'min_length' => '%s phải có số ký tự tối thiểu là 6',
                'max_length' => '%s có số ký tự tối đa là 12')),

        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[6]|max_length[12]',
            'errors' => array(
                'required' => '%s không được để trống.',
                'min_length' => '%s phải có số ký tự tối thiểu là 6',
                'max_length' => '%s có số ký tự tối đa là 12')),

        array(
            'field' => 'confirmpassword',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[6]|max_length[12]',
            'errors' => array(
                'required' => '%s không được để trống.',
                'min_length' => '%s phải có số ký tự tối thiểu là 6',
                'max_length' => '%s có số ký tự tối đa là 12')),

    ),

    
);
