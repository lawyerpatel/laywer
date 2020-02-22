<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Lawyer extends CI_Controller {
    public function index(){ 
        $_SESSION['current_page'] = 'lawyer_list';
        $response = execute_data('lawyer/','','GET');
        if(!is_array($response))
        {
            echo "server not response";
        }
        $data['lawyers'] = $response['payload'];        
        $this->load->view('admin/lawyer_list', $data);
    }
        
    public function login(){  
        if ($this->input->post()){
            $data = $this->input->post();
            $api_data = array(
                'email' => $data['username'],
                'password' => $data['password'],
            );
            $respo = execute_data('lawyer/login', json_encode($api_data), 'POST');
        //    echo '<pre>';
        //    print_r($respo);
        //    die;
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
         $_SESSION['current_page'] = 'home';
        $this->load->view('admin/index');
   }
    public function edit($id) {
        $_SESSION['current_page']='final_profile';
        $response = execute_data('lawyer/','','POST');
        // $id based on this need to fetch record and pass it as $data
        // $this->load->view('admin/editprofile',$data);
        $this->load->view('admin/editprofile');
   }
}