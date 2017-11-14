<?php
//Local server or Testing server

if($_SERVER['SERVER_ADDR'] === '::1' || $_SERVER['SERVER_ADDR'] === '127.0.0.1'){
	$config = Array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.gmail.com',
	    'smtp_port' => 465,
	    'smtp_user' => 'valli.vallikodi@gmail.com',
	    'smtp_pass' => 'kjayakumar2018',	    
	    'mailtype'  => 'html', 
	    'charset'   => 'iso-8859-1',
	    'wordwrap'  => TRUE,
	    'newline'  => "\r\n"
	);
}else{
	//Live server
	$config = Array(
	    'protocol' => 'smtp',
	    // 'smtp_host' => 'ssl://sg2plcpnl0088.prod.sin2.secureserver.net',
	    'smtp_host' => 'ssl://smtp.gmail.com',
	    'smtp_port' => 465,
	    'smtp_host' => 'ssl://smtp.gmail.com',	    
	    'smtp_user' => 'valli.vallikodi@gmail.com',
	    'smtp_pass' => 'kjayakumar2018',
	    'mailtype'  => 'html', 
	    'charset'   => 'iso-8859-1',
	    'wordwrap'  => TRUE,
	    'newline'  => "\r\n"
	);
}

?>