<?php
class Projects_m extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function get_projects($project = FALSE) {
        if($project === FALSE && $project !== '') {
            //get all projects
            $query = $this->db->get('projects');
            return $query->result_array();
        } elseif(is_numeric($project)) {
            //get project by id
            $query = $this->db->get_where('projects', array('id' => $project));
            return $query->row_array();
        }
        //get project by slug
        $query = $this->db->get_where('projects', array('slug' => $project));
        return $query->row_array();
    }
}