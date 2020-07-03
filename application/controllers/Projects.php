<?php
class Projects extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
         $this->load->model('Projects_m');
    }
    
    public function view($project = FALSE)
    {
        $this->load->view('templates/header');
        
        if($project === FALSE) {
            //show all projects
            $data['projects'] = $this->Projects_m->get_projects($project);
            $this->load->view('pages/projects',$data);
        } else {
            // show single project
            $data['projects'] = $this->Projects_m->get_projects($project);
            $this->load->view('pages/project',$data);
        }
        
        $this->load->view('templates/footer');
    }
}