<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    private $account;
    private $about;

    public function __construct() {
        parent::__construct();
    }

    // Pages user
    public function index() {
        $data['main_content'] = "user/home/v_home";
        $this->load->view('user/template', $data);
    }

    public function home() {
        $data['main_content'] = "user/home/v_home";
        $this->load->view('user/template', $data);
    }

    public function register() {
        $data['main_content'] = "user/account/v_register";
        $this->load->view('user/template', $data);
    }

    public function login() {
        $data['main_content'] = "user/account/v_login";
        $this->load->view('user/template', $data);
    }

    public function about()
    {
         $data['main_content'] = "user/about/v_tentang";
         $this->load->view('user/template', $data);
    }

    public function blog()
    {
        $data['main_content'] = "user/blog/v_blog";
        $this->load->view("user/template",$data);
    }

    public function view_cart()
    {
        $data['main_content'] = "user/cart/v_view_cart";
        $this->load->view("user/template",$data);
    }



    public function download_android()
    {
        $data['main_content'] = "user/download_android/download_android";
        $this->load->view("user/template", $data);
    }
    // Pages admin //
    public function admin() {
        $this->load->view('admin/account/v_login');
    }

    public function dashboard() {
        $data['main_content'] = "admin/dashboard/v_dashboard";
        $this->load->view('admin/template', $data);
    }

}

?>