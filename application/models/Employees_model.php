<?php
class Employees_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
        public function get_employees($slug = FALSE)
        {
                if ($slug === FALSE)
                {
                        $query = $this->db->get('employees');
                        return $query->result_array();
                }
        
                $query = $this->db->get_where('employees', array('slug' => $slug));
                return $query->row_array();
        }
        public function set_employees()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('fullName'), 'dash', TRUE);

        $data = array(
        'fullName' => $this->input->post('fullName'),
        'hometown' => $this->input->post('hometown'),
        'birthday' => $this->input->post('birthday'),
        'phoneNumber' => $this->input->post('phoneNumber'),
        'position' => $this->input->post('position'),
        'department' => $this->input->post('department'),
        'identificationNum' => $this->input->post('identificationNum'),
        'issueDate' => $this->input->post('issueDate'),
        'issuePlace' => $this->input->post('issuePlace'),
        'slug' => $slug
        );

        return $this->db->insert('employees', $data);
    }
    public function did_delete_row($slug){
        $this -> db -> where('slug', $slug);
        $this -> db -> delete('employees');
    }
}