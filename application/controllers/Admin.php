<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
   
   
   
    public function index(){ 
        $this->loggedIn();  
        $this->load->view('admin/login');
        }
        
    public function login(){  
        if ($this->input->post()){
            $data = $this->input->post();
            $api_data = array(
                'email' => $data['username'],
                'password' => $data['password'],
            );
            $respo = execute_data('lawyer/login', json_encode($api_data), 'POST');
//            echo '<pre>';
//            print_r($respo);
//            die;
                if (is_array($respo) && $respo['msg'] == 'lawyer loggedin successfully' && $respo['payload']['usertype']) {
                    $_SESSION['data'] = $respo['payload'];
                    $_SESSION['username'] = $respo['payload']['name']['first_name'] .' '.$respo['payload']['name']['last_name'];
                    $_SESSION['login'] = true;
                    $_SESSION['usertype'] = strtolower(trim($data['usertype']));
                    $data['result'] = true;
                     redirect(base_url() . 'admin/home');
                } else {
                    $data['result'] = false;
                    $_SESSION['login'] = false;
                }
          }
          redirect(base_url() . 'admin');
        }

    public function home() {
         $_SESSION['current_page'] = 'login';
        $this->load->view('admin/index');
   }
    public function edit($id) {
    echo "dfgfh";
    die;
        $_SESSION['current_page'] = 'login';
        $this->load->view('admin/index');
   }
    public function checkIsLogin() {
        if (!isset($_SESSION['username']) && trim($_SESSION['username']) == '') {            
            redirect(base_url() . 'admin');
        }
    }
    public function loggedIn() {        
        if (isset($_SESSION['username']) && trim($_SESSION['username']) != '') {
            redirect(base_url() . 'admin/home/'.$_SESSION['userId']);
        }        
    }
    public function logout(){
        session_destroy();
        redirect(base_url() . 'admin');
    }

}
