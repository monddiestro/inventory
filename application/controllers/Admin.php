<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


        function __construct() {
                parent::__construct();
                $this->load->model('computer_model');
                $this->load->model('employee_model');
                $this->load->model('mouse_model');
        }

        public function index()
	{
                // title 
                $title["page_title"] = "Dashboard";
                // computer count
                $computer_count = $this->computer_model->pull_computers('available');
                $data["computers"] = $computer_count->num_rows();
                // mouse count

                $this->load->view('head',$title);
                $this->load->view('sidebar');
                $this->load->view('topbar');
                $this->load->view('body',$data);
                $this->load->view('prefooter');
                $this->load->view('footer');
                $this->load->view('script');
        }
        
        function add_computers() {
                $referer = $this->input->server('HTTP_REFERRER');
                $tag = $this->input->post('tag');
                $brand = $this->input->post('brand');
                $model = $this->input->post('model');
                $type = $this->input->post('type');
                $memory = $this->input->post('memory');
                $processor = $this->input->post('processor');
                $status = "available";
                $date_created = date('Y-m-d H:i:s');

                // check if tag exist
                $exist = $this->computer_model->pull_tag_exist($tag);

                if($exist == 0) {
                        // create array of data
                        $data = array(
                                'tag' => $tag,
                                'brand' => $brand,
                                'model' => $model,
                                'type' => $type,
                                'memory' => $memory,
                                'processor' => $processor,
                                'status' => $status,
                                'date_created' => $date_created
                        );
                        // pass data to model
                        $this->computer_model->push_computer($data);
                        // return error password
                        $result = array(
                                'message' => '<strong>Success!</strong> Computer '.$tag.' was added to inventory.',
                                'class' => 'success'
                        );
                        $this->session->set_flashdata($result);
                } else {
                        // warning notification to avoid duplicate
                        $result = array(
                                'message' => '<strong>Warning!</strong> Computer '.$tag.' was already in the inventory.',
                                'class' => 'warning'
                        );
                        $this->session->set_flashdata($result);
                }
               
                redirect($referer);
        }

        function add_employee() {
                $referer = $this->input->server('HTTP_REFERRER');
                $fname = $this->input->post('fname');
                $lname = $this->input->post('lname');

                // check if exist 
                $exist = $this->employee_model->check_if_exist($fname,$lname);

                if($exist == 0) {
                        $data = array(
                                'fname' => $fname,
                                'lname' => $lname
                        );
                        // pass data array to model
                        $this->employee_model->push_employee($data);
                        // return error password
                        $result = array(
                                'message' => '<strong>Success!</strong> Employee '.$fname.' '.$lname.' was added to records.',
                                'class' => 'success'
                        );
                        $this->session->set_flashdata($result);
                } else {
                         // return error password
                        $result = array(
                                'message' => '<strong>Warning!</strong> Employee '.$fname.' '.$lname.' already exist.',
                                'class' => 'warning'
                        );
                        $this->session->set_flashdata($result);
                }
                
                redirect($referer);
        }

        function add_mouse() {
                $referer = $this->input->server('HTTP_REFERER');
                $tag = $this->input->post('tag');
                $brand = $this->input->post('brand');
                $type = $this->input->post('type');
                $date_created = date('Y-m-d H:i:s');

                // check if exist
                $exist = $this->mouse_model->check_if_exist($tag);
                if($exist == 0) {
                        $data = array(
                                'tag' => $tag,
                                'brand' => $brand,
                                'type' => $type,
                                'status' => 'available',
                                'date_created' => date('Y-m-d H:i:s')
                        );
                        // pass data array to model
                        $this->mouse_model->push_mouse($data);
                        // return error password
                        $result = array(
                                'message' => '<strong>Success!</strong> Mouse '.$brand.' was added to inventory.',
                                'class' => 'success'
                        );
                        $this->session->set_flashdata($result);
                } else {
                        // return error password
                        $result = array(
                                'message' => '<strong>Warning!</strong> Mouse '.$brand.' was added to inventory.',
                                'class' => 'warning'
                        );
                        $this->session->set_flashdata($result);
                }
                // redirect 
                redirect($referer);
        }
}

