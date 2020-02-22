<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('home');
    }

    public function login() {
        $_SESSION['current_page'] = 'login';
        $this->load->view('login');
    }

    public function dologin() {
        if ($this->input->post()) {
            $data = $this->input->post();
            $api_data = array(
                'email' => $data['username'],
                'password' => $data['password'],
            );
            if (strtolower(trim($data['usertype'])) == 'lawyer') {
                $respo = execute_data('lawyer/login', json_encode($api_data), 'POST');
                if (is_array($respo) && $respo['msg'] == 'lawyer loggedin successfully') {
                    $_SESSION['data'] = $respo['payload'];
                    $_SESSION['username'] = $respo['payload']['name']['first_name'] . ' ' . $respo['payload']['name']['last_name'];
                    $_SESSION['login'] = true;
                    $_SESSION['usertype'] = strtolower(trim($data['usertype']));
                    $data['result'] = true;
                } else {
                    $data['result'] = false;
                    $_SESSION['login'] = false;
                }
            } else {
                $respo = execute_data('clients/login', json_encode($api_data), 'POST');

                if (is_array($respo) && $respo['msg'] == 'client login successfully') {
                    $_SESSION['data'] = $respo['payload'];
                    $_SESSION['username'] = $respo['payload']['name']['first_name'];
                    $_SESSION['login'] = true;
                    $_SESSION['usertype'] = strtolower(trim($data['usertype']));
                    $data['result'] = true;
                } else {
                    $data['result'] = false;
                    $_SESSION['login'] = false;
                }
            }

            redirect(base_url() . 'home');
        }
    }

    public function logout() {
        unset($_SESSION['login']);
        session_destroy();
        redirect(base_url() . 'home');
    }

    public function lawyer() {
        $response = execute_data('lawyer/', '', 'GET');
        
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['lawyer'] = $response['payload'];
        $this->load->view('lawyer', $data);
        $_SESSION['current_page'] = 'lawyer';
    }

    public function c_registration() {
        $_SESSION['current_page'] = 'registration';
        $this->load->view('c_registration');
    }

    public function l_registration() {
        $_SESSION['current_page'] = 'registration';
        $this->load->view('l_registration');
    }

    public function lawyerRegister() {
        $data = $this->input->post();
        $lawyerImage="";
        if (isset($_FILES['filename']['name'])) {
            if (!is_dir('./backend/images/lawyers')) {
                mkdir('./backend/images/lawyers', 0777, true);
            }
            $image_file = pathinfo($_FILES['filename']['name']);
            $lawyerImage = time() . '.' . $image_file['extension'];
            $config['upload_path'] = './backend/images/lawyers';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = $lawyerImage;
            $this->upload->initialize($config);
            $this->upload->do_upload('filename');
        }

        $api_data = array(
            'name' => array('first_name' => $data['Firstname'],
                'last_name' => $data['Lastname']
            ),
            'phone_no' => $data['phone_no'],
            'email' => $data['Email'],
            'gender' => $data['gender'],
            'city' => $data['city_select'],
            'password' => $data['Password'],
            'file'=>$lawyerImage,
            'usertype' => "lawyer",
        );
        $respon = execute_data('lawyer/register', json_encode($api_data), 'POST');

        redirect(base_url() . 'home');
    }

    public function clientRegister() {
        $data = $this->input->post();
        $api_data = array(
            'name' => array('first_name' => $data['Firstname'],
                'last_name' => $data['Lastname']
            ),
            'phone_no' => $data['Contact'],
            'email' => $data['Email'],
            'gender' => $data['gender'],
            'city' => $data['city_select'],
            'password' => $data['Password'],
        );
        $respon = execute_data('clients/register', json_encode($api_data), 'POST');

        redirect(base_url() . 'home');
    }

    public function finalProfile() {
       if ($this->input->post()) {
            $data = $this->input->post();
           
            if (isset($_FILES['filename']['name'])) {
                if (!is_dir('./backend/images/lawyers')) {
                    mkdir('./backend/images/lawyers', 0777, true);
                }
                $image_file = pathinfo($_FILES['filename']['name']);
                $lawyerImage = time() . '.' . $image_file['extension'];
                $config['upload_path'] = './backend/images/lawyers';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] = $lawyerImage;
                $this->upload->initialize($config);
                $this->upload->do_upload('filename');
            }
            $api_data = array(
                "id"=>$_SESSION['data']['id'],	
                'edulist' => $data['edulist'],
                'aboutme' => $data['aboutme'],
                'barcoucilno' => $data['barcoucilno'],
                'statebarcouncil_select' => $data['statebarcouncil_select'],
                'experienceText' => $data['experienceText'],
                'designation' => $data['designation'],
                'explist' => $data['explist'],
                'secondaryexpertise' => $data['secondaryexpertise'],
                'phonefees' => $data['phonefees'],
                'phonefeesremarks' => $data['phonefeesremarks'],
                'meetingfees' => $data['meetingfees'],
                'meetingfeesremarks' => $data['meetingfeesremarks'],
                'reviewdocfees' => $data['reviewdocfees'],
                'reviewdocremarks' => $data['reviewdocremarks'],
                'fillcaseincourtfees' => $data['fillcaseincourtfees'],
                'fillcaseincourtremarks' => $data['fillcaseincourtremarks'],
                'hearingfees' => $data['hearingfees'],
                'hearingfeesremarks' => $data['hearingfeesremarks'],
                'servicesname' => $data['servicesname'],
                'otherfees' => $data['otherfees'],
                'otherremarks' => $data['otherremarks'],
            );
            $respon = execute_data('editprofile/edit', json_encode($api_data), 'POST');
            redirect(base_url() . 'home');
        }
        $_SESSION['current_page'] = 'Lawyer Edit profile';
        $this->load->view('finalprofile');
    }

}
