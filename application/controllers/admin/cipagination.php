<?php
class cipagination extends CI_Controller{
 
  function __construct()
{
parent::__construct();
$this->load->model("admin/cipaginationmodel");
$this->load->library("pagination");
}
public function example() {
        $config = array();
        $config["base_url"] = base_url() . "admin/cipagination";
        $config["total_rows"] = $this->cipaginationmodel->record_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['cur_tag_open'] = ' ';
        $config['cur_tag_close'] = '';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $this->pagination->initialize($config);
        // echo $this->uri->segment(3);
        // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //Find offset
        $per_page = $config["per_page"];
        preg_match("/[^\/]+$/", $this->uri->uri_string(), $values);     
        if($values[0]){ 
            $offset = (($values[0]-1)*$per_page); 
        }else{
            $offset = 0;
        }   
        // echo $page;
        $data["results"] = $this->cipaginationmodel->fetch_employees($config["per_page"], $offset);
        $data["links"] = $this->pagination->create_links();
        if($this->input->post('ajax')) {
         $this->load->view('admin/ciajaxpagination',$data);
        } 
        else {
         $this->load->view('admin/cipagination',$data);
       }
    }
}
?>