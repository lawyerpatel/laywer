<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function index(){ 
        $_SESSION['current_page'] = 'userlist';
        $response = execute_data('user/','','GET');
        if(!is_array($response))
        {
            echo "server not response";
        }
        $data['users'] = $response['payload'];        
        $this->load->view('admin/userlist', $data);
    }
}
?>