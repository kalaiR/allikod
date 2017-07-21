<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_data_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function GetUserCountByDate($fromdate, $todate)
  {
      $result = $this->db->query("select count(*) as total,(select COUNT(*) FROM reg_userdetail WHERE user_online_or_simple='online' AND DATE(user_added_date) >= ". $this->db->escape($fromdate) ." AND DATE(user_added_date) <= ". $this->db->escape($todate) .") as all_onlineuser, 
        (select COUNT(*) FROM reg_userdetail WHERE user_online_or_simple='simple' AND DATE(user_added_date) >=". $this->db->escape($fromdate) ." AND DATE(user_added_date) <= ". $this->db->escape($todate) .") as all_simpleuser,
        (select COUNT(*) FROM reg_userdetail WHERE DATE(user_added_date) >=". $this->db->escape($fromdate) ." AND DATE(user_added_date) <= ". $this->db->escape($todate) .") as totaluser
        from reg_userdetail")->row_array();
      return $result;
  }

  public function GetUserCount()
  {
      $result = $this->db->query("SELECT count( * ) AS total, (SELECT COUNT( * ) FROM reg_userdetail WHERE user_online_or_simple = 'online') AS total_onlineuser, (SELECT COUNT( * ) FROM reg_userdetail WHERE user_online_or_simple = 'simple')AS total_simpleuser 
        FROM reg_userdetail")->row_array();
      return $result;
  }

  public function report_usercount(){
      if($_POST){
        $fromdate =date('Y-m-d',strtotime($this->input->post('report_fromdate')));
        $todate =date('Y-m-d',strtotime($this->input->post('report_todate')));
        // $result = $this->db->query("call GetUserCountByDate(".$fromdate.",".$todate.")")->row_array();
        $result = $this->GetUserCountByDate($fromdate, $todate);
      }
      else{
        $result = $this->GetUserCount();
      }
      // print_r($result);
      return $result;

  }
}