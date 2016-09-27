<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function login(){
        $this->load->view('admin/login');
    }

    public function check_login(){
        //1. 接数据
        $admin_name = $this -> input -> post('admin_name');
        $admin_pwd = $this -> input -> post('admin_pwd');

        //2. 查数据
        $this -> load -> model('admin_model');
        $row = $this -> admin_model -> get_by_name_pwd($admin_name, $admin_pwd);

        //跳转
        if($row){
            $this->load->view('admin/admin-index');
        }else{
            $this->load->view('admin/login');
        }
    }

    public  function admin_mgr(){
        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_all();
        if($result){
            $data = array(
                'admins' => $result
            );
            $this -> load -> view('admin/admin-mgr', $data);
        }
    }

}



















