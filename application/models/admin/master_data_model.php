<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_data_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  /* ===========            zodiac_sign Model Start       ============ */

  // zodiac_sign - Add Edit Delete View
  public function zodiac_sign($status)
  {
    $model_data['status'] = 0;
    $model_data['error'] = 0;

    //To check whether the data is mapped with already or not
    // $this->db->select('s.state_id');
    // $this->db->from('tr_state s');
    // $this->db->join('tr_district d','s.state_id=d.district_state_id','inner');
    // $this->db->group_by('d.district_state_id');
    // $model_data['mapped_data'] = array_column($this->db->get()->result_array(), 'state_id');
    // print_r($model_data['mapped_data']);

    // Update data
    if($status=='update') {
      if(is_numeric($this->input->post('rid')) && !empty($this->db->get_where('zodiac_sign', array('zodiacsign_id' => $this->input->post('rid')))->row_array()))
      { 
        // if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
          $zodiac_update_data = array( 
                                'name' => $this->input->post('zod_name'),
                                'active_status' => $this->input->post('zod_status')
                              ); 
        // }
        // else {
        //   $zodiac_update_data = array( 
        //                         'name' => $this->input->post('s_name')
        //                       );
        // }
        $zodiac_update_where = '( zodiacsign_id="'.$this->input->post('rid').'")'; 
        $this->db->set($zodiac_update_data); 
        $this->db->where($zodiac_update_where);
        $this->db->update("zodiac_sign", $zodiac_update_data);
        // echo $this->db->last_query(); 
        $model_data['status'] = "Updated Successfully";
        $model_data['error'] = 2;
      }
      else{
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. You may entered incorrect ID";
      }
    }

    // Save data
    else if($status=='save') {
      $zodiac_insert_data = array( 
                            'name' => $this->input->post('zod_name'),
                            'active_status' => $this->input->post('zod_status')
                          );
      $this->db->insert("zodiac_sign", $zodiac_insert_data);
      $model_data['status'] = "Inserted Successfully";
      $model_data['error'] = 2;
    }

    // Delete data
    else if($status =='delete') {
      if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
        $zodiac_delete_where = '(zodiacsign_id="'.$this->input->post('rid').'")';
        $this->db->delete("zodiac_sign", $zodiac_delete_where); 
        $model_data['status'] = "Deleted Successfully";
        $model_data['error'] = 2; 
      }
      else {
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. Please try again with correct details ";
      }
    }
    // Get data by id to send edit page
    else if($status =='edit') {
        if($_POST)
          $id = $this->input->post('rid');
        else
          $id = $this->uri->segment(3);
        $model_data['zodiac_data'] = $this->db->get_where('zodiac_sign', array('zodiacsign_id' => $id ))->row_array();
    }  
    // View
    $model_data['zodiac_values'] = $this->db->order_by('zodiacsign_id','desc')->get_where('zodiac_sign')->result_array();

    return $model_data;
  }

  /* ===========            zodiac_sign Model End       ============ */ 

  /* ===========            Nakshatra Model Start       ============ */

  // zodiac_sign - Add Edit Delete View
  public function nakshathra($status)
  {
    $model_data['status'] = 0;
    $model_data['error'] = 0;

    //To check whether the data is mapped with already or not
    // $this->db->select('s.state_id');
    // $this->db->from('tr_state s');
    // $this->db->join('tr_district d','s.state_id=d.district_state_id','inner');
    // $this->db->group_by('d.district_state_id');
    // $model_data['mapped_data'] = array_column($this->db->get()->result_array(), 'state_id');
    // print_r($model_data['mapped_data']);

    // Update data
    if($status=='update') {
      if(is_numeric($this->input->post('rid')) && !empty($this->db->get_where('nakshathra', array('nakshathra_id' => $this->input->post('rid')))->row_array()))
      { 
        // if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
          $nakshathra_update_data = array( 
                                'name' => $this->input->post('nak_name'),
                                'active_status' => $this->input->post('nak_status')
                              ); 
        // }
        // else {
        //   $zodiac_update_data = array( 
        //                         'name' => $this->input->post('s_name')
        //                       );
        // }
        $nakshathra_update_where = '( nakshathra_id="'.$this->input->post('rid').'")'; 
        $this->db->set($nakshathra_update_data); 
        $this->db->where($nakshathra_update_where);
        $this->db->update("nakshathra", $nakshathra_update_data);
        // echo $this->db->last_query(); 
        $model_data['status'] = "Updated Successfully";
        $model_data['error'] = 2;
      }
      else{
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. You may entered incorrect ID";
      }
    }

    // Save data
    else if($status=='save') {
      $nakshathra_insert_data = array( 
                            'name' => $this->input->post('nak_name'),
                            'active_status' => $this->input->post('nak_status')
                          );
      $this->db->insert("nakshathra", $nakshathra_insert_data);
      $model_data['status'] = "Inserted Successfully";
      $model_data['error'] = 2;
    }

    // Delete data
    else if($status =='delete') {
      if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
        $nakshathra_delete_where = '(nakshathra_id="'.$this->input->post('rid').'")';
        $this->db->delete("nakshathra", $nakshathra_delete_where); 
        $model_data['status'] = "Deleted Successfully";
        $model_data['error'] = 2; 
      }
      else {
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. Please try again with correct details ";
      }
    }
    // Get data by id to send edit page
    else if($status =='edit') {
        if($_POST)
          $id = $this->input->post('rid');
        else
          $id = $this->uri->segment(3);
        $model_data['nakshathra_data'] = $this->db->get_where('nakshathra', array('nakshathra_id' => $id ))->row_array();
    }  
    // View
    $model_data['nakshathra_values'] = $this->db->order_by('nakshathra_id','desc')->get_where('nakshathra')->result_array();

    return $model_data;
  }

  /* ===========            zodiac_sign Model End       ============ */

  /* ===========            Mother_tongue Model Start       ============ */

  // mother_tongue - Add Edit Delete View
  public function mother_tongue($status)
  {
    $model_data['status'] = 0;
    $model_data['error'] = 0;

    //To check whether the data is mapped with already or not
    // $this->db->select('s.state_id');
    // $this->db->from('tr_state s');
    // $this->db->join('tr_district d','s.state_id=d.district_state_id','inner');
    // $this->db->group_by('d.district_state_id');
    // $model_data['mapped_data'] = array_column($this->db->get()->result_array(), 'state_id');
    // print_r($model_data['mapped_data']);

    // Update data
    if($status=='update') {
      if(is_numeric($this->input->post('rid')) && !empty($this->db->get_where('mother_tongue', array('mothertongue_id' => $this->input->post('rid')))->row_array()))
      { 
        // if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
          $mothertongue_update_data = array( 
                                'name' => $this->input->post('mt_name'),
                                'active_status' => $this->input->post('mt_status')
                              ); 
        // }
        // else {
        //   $mothertongue_update_data = array( 
        //                         'name' => $this->input->post('s_name')
        //                       );
        // }
        $mothertongue_update_where = '( mothertongue_id="'.$this->input->post('rid').'")'; 
        $this->db->set($mothertongue_update_data); 
        $this->db->where($mothertongue_update_where);
        $this->db->update("mother_tongue", $mothertongue_update_data);
        // echo $this->db->last_query(); 
        $model_data['status'] = "Updated Successfully";
        $model_data['error'] = 2;
      }
      else{
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. You may entered incorrect ID";
      }
    }

    // Save data
    else if($status=='save') {
      $mothertongue_insert_data = array( 
                            'name' => $this->input->post('mt_name'),
                            'active_status' => $this->input->post('mt_status')
                          );
      $this->db->insert("mother_tongue", $mothertongue_insert_data);
      $model_data['status'] = "Inserted Successfully";
      $model_data['error'] = 2;
    }

    // Delete data
    else if($status =='delete') {
      if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
        $mothertongue_delete_where = '(mothertongue_id="'.$this->input->post('rid').'")';
        $this->db->delete("mother_tongue", $mothertongue_delete_where); 
        $model_data['status'] = "Deleted Successfully";
        $model_data['error'] = 2; 
      }
      else {
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. Please try again with correct details ";
      }
    }
    // Get data by id to send edit page
    else if($status =='edit') {
        if($_POST)
          $id = $this->input->post('rid');
        else
          $id = $this->uri->segment(3);
        $model_data['mothertongue_data'] = $this->db->get_where('mother_tongue', array('mothertongue_id' => $id ))->row_array();
    }  
    // View
    $model_data['mothertongue_values'] = $this->db->order_by('mothertongue_id','desc')->get_where('mother_tongue')->result_array();

    return $model_data;
  }

  /* ===========            Mother_tongue Model End       ============ */

   /* ===========            Luknam Model Start       ============ */

  // luknam - Add Edit Delete View
  public function luknam($status)
  {
    $model_data['status'] = 0;
    $model_data['error'] = 0;

    //To check whether the data is mapped with already or not
    // $this->db->select('s.state_id');
    // $this->db->from('tr_state s');
    // $this->db->join('tr_district d','s.state_id=d.district_state_id','inner');
    // $this->db->group_by('d.district_state_id');
    // $model_data['mapped_data'] = array_column($this->db->get()->result_array(), 'state_id');
    // print_r($model_data['mapped_data']);

    // Update data
    if($status=='update') {
      if(is_numeric($this->input->post('rid')) && !empty($this->db->get_where('luknam', array('luknam_id' => $this->input->post('rid')))->row_array()))
      { 
        // if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
          $luknam_update_data = array( 
                                'name' => $this->input->post('luk_name'),
                                'active_status' => $this->input->post('luk_status')
                              ); 
        // }
        // else {
        //   $zodiac_update_data = array( 
        //                         'name' => $this->input->post('s_name')
        //                       );
        // }
        $luknam_update_where = '( luknam_id="'.$this->input->post('rid').'")'; 
        $this->db->set($luknam_update_data); 
        $this->db->where($luknam_update_where);
        $this->db->update("luknam", $luknam_update_data);
        // echo $this->db->last_query(); 
        $model_data['status'] = "Updated Successfully";
        $model_data['error'] = 2;
      }
      else{
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. You may entered incorrect ID";
      }
    }

    // Save data
    else if($status=='save') {
      $luknam_insert_data = array( 
                            'name' => $this->input->post('luk_name'),
                            'active_status' => $this->input->post('luk_status')
                          );
      $this->db->insert("luknam", $luknam_insert_data);
      $model_data['status'] = "Inserted Successfully";
      $model_data['error'] = 2;
    }

    // Delete data
    else if($status =='delete') {
      if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
        $luknam_delete_where = '(luknam_id="'.$this->input->post('rid').'")';
        $this->db->delete("luknam", $luknam_delete_where); 
        $model_data['status'] = "Deleted Successfully";
        $model_data['error'] = 2; 
      }
      else {
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. Please try again with correct details ";
      }
    }
    // Get data by id to send edit page
    else if($status =='edit') {
        if($_POST)
          $id = $this->input->post('rid');
        else
          $id = $this->uri->segment(3);
        $model_data['luknam_data'] = $this->db->get_where('luknam', array('luknam_id' => $id ))->row_array();
    }  
    // View
    $model_data['luknam_values'] = $this->db->order_by('luknam_id','desc')->get_where('luknam')->result_array();

    return $model_data;
  }

  /* ===========            Luknam Model End       ============ */

  /* ===========            Country Model Start       ============ */

  // Country - Add Edit Delete View
  public function country($status)
  {
    $model_data['status'] = 0;
    $model_data['error'] = 0;

    //To check whether the data is mapped with already or not
    // $this->db->select('s.state_id');
    // $this->db->from('tr_state s');
    // $this->db->join('tr_district d','s.state_id=d.district_state_id','inner');
    // $this->db->group_by('d.district_state_id');
    // $model_data['mapped_data'] = array_column($this->db->get()->result_array(), 'state_id');
    // print_r($model_data['mapped_data']);

    // Update data
    if($status=='update') {
      if(is_numeric($this->input->post('rid')) && !empty($this->db->get_where('country', array('country_id' => $this->input->post('rid')))->row_array()))
      { 
        // if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
          $country_update_data = array( 
                                'name' => $this->input->post('cou_name'),
                                'active_status' => $this->input->post('cou_status')
                              ); 
        // }
        // else {
        //   $zodiac_update_data = array( 
        //                         'name' => $this->input->post('s_name')
        //                       );
        // }
        $country_update_where = '( country_id="'.$this->input->post('rid').'")'; 
        $this->db->set($country_update_data); 
        $this->db->where($country_update_where);
        $this->db->update("country", $country_update_data);
        // echo $this->db->last_query(); 
        $model_data['status'] = "Updated Successfully";
        $model_data['error'] = 2;
      }
      else{
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. You may entered incorrect ID";
      }
    }

    // Save data
    else if($status=='save') {
      $country_insert_data = array( 
                            'name' => $this->input->post('cou_name'),
                            'active_status' => $this->input->post('cou_status')
                          );
      $this->db->insert("country", $country_insert_data);
      $model_data['status'] = "Inserted Successfully";
      $model_data['error'] = 2;
    }

    // Delete data
    else if($status =='delete') {
      if(!in_array($this->input->post('rid'),$model_data['mapped_data'])) {
        $country_delete_where = '(country_id="'.$this->input->post('rid').'")';
        $this->db->delete("country", $country_delete_where); 
        $model_data['status'] = "Deleted Successfully";
        $model_data['error'] = 2; 
      }
      else {
        $model_data['error'] = 1;
        $model_data['status'] = "Something went wrong. Please try again with correct details ";
      }
    }
    // Get data by id to send edit page
    else if($status =='edit') {
        if($_POST)
          $id = $this->input->post('rid');
        else
          $id = $this->uri->segment(3);
        $model_data['country_data'] = $this->db->get_where('country', array('country_id' => $id ))->row_array();
    }  
    // View
    $model_data['country_values'] = $this->db->order_by('country_id','desc')->get_where('country')->result_array();

    return $model_data;
  }

  /* ===========            Country Model End       ============ */

}

/* End of file Master_Data_Model.php */
/* Location: ./application/controllers/Master_Data_Model.php */