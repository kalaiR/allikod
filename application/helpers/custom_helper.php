<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// --------------------------------------------------------------------------------------
// Admin Panel Custom Helper functions which is called in both views and controllers
// --------------------------------------------------------------------------------------

// if ( ! function_exists('get_qualication_by_dept')){
// 	// Get qualification by department
// 	function get_qualication_by_dept($value) 
// 	{	
// 		$out = array();
// 		if(!empty($value)) {
// 			foreach ($value as $key => $row) {
// 				foreach ($row as $k => $r) {
// 					if(!isset($out[$row['departments_id']][$row['educational_qualification_id']]))
// 					{
// 						$out[$row['departments_id']]['educational_qualification_id'][$row['educational_qualification_id']] = $row['educational_qualification'];
// 				   	}
// 				   	if($k == 'departments_name' || $k == 'departments_status' || $k == 'departments_created_date' || $k == 'department_educational_qualification_id' ) {
// 	     				$out[$row['departments_id']][$k] = $row[$k];
// 	     			}
// 			    }
// 			}
// 		}
// 		return $out;
// 	}
// }
