<?php
class Employees extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('employees_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['employees'] = $this->employees_model->get_employees();
                $data['title'] = 'Employees data';

                $this->load->view('employees/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
            $data['employees_member'] = $this->employees_model->get_employees($slug);

            if (empty($data['employees_member']))
            {
                    show_404();
            }
    
            $data['fullName'] = $data['employees_member']['fullName'];
    
            $this->load->view('employees/view', $data);
            $this->load->view('templates/footer');
        }
        public function submit()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Submit a new employee';

        $this->form_validation->set_rules('fullName', 'FullName', 'required');
        $this->form_validation->set_rules('birthday', 'Birthday', 'required');
        $this->form_validation->set_rules('phoneNumber', 'PhoneNumber', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('identificationNum', 'IdentificationNum', 'required');
        $this->form_validation->set_rules('issueDate', 'IssueDate', 'required');
        $this->form_validation->set_rules('issuePlace', 'IssuePlace', 'required');

        if ($this->form_validation->run() === FALSE)
        {
        $this->load->view('employees/submit');
        $this->load->view('templates/footer');

        }
        else
        {
        $this->employees_model->set_employees();
        $this->load->view('employees/success');
        }
    }
        public function deletedata($slug)
        {
                $this->load->model("employees_model");
                $this->employees_model->did_delete_row($slug);
            }
        
}