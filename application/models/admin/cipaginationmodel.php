<?php
class cipaginationmodel extends CI_Model {
    function __construct()
    {
      parent::__construct();
    }
function record_count()
{
 return $this->db->count_all('reg_userdetail');
}
public function fetch_employees($limit, $start) {
    // echo "limit".$limit;
    // echo "start".$start;
        $this->db->limit($limit, $start);
        $query = $this->db->get("reg_userdetail");
        // echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            // print_r($data);
            return $data;
        }
        return false;
   }
 
}
?>