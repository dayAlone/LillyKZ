<?php
if(!session_id()){
	session_start();
}
if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
	if(!empty($_POST['answers']) && !empty($_POST['balls'])){
		$vars = $_POST;
		$vars['session'] = session_id();
		
		if($vars['balls'] >= 1 && $vars['balls'] <= 7){
			$vars['pow'] = 'ауыр';
		} else if($vars['balls'] >= 8 && $vars['balls'] <= 11){
			$vars['pow'] = 'орташа';
		} else if($vars['balls'] >= 12 && $vars['balls'] <= 16){
			$vars['pow'] = 'орташа-жеңіл';
		} else if($vars['balls'] >= 17 && $vars['balls'] <= 21){
			$vars['pow'] = 'жеңіл';
		} else if($vars['balls'] >= 22 && $vars['balls'] <= 25){
			$vars['pow'] = 'норма';
		} else {
			$vars['pow'] = 'норма';
		}
		
		if($vars['balls'] >= 1 && $vars['balls'] <= 21){
			$vars['pow'] = 'Өзіңіздін сексуалды денсаулығыныз туралы дәрігермен кеңесініз. ';
		} else {
			$vars['pow'] = 'Шамасы, барлығы нормада шығар';
		}
		$template = file_get_contents('result.html');
		foreach($vars as $key=>&$val){
			$val = htmlspecialchars($val);
			$template = str_replace('{'.$key.'}', $val, $template);
		}
		
		$response = array('error'	 =>	false,
						  'response' => $template,
						  'balls' => $vars['balls']);
	} else {
		$response = array('error' => true,'message' => 'empty request');
	}
} else {
	$response = array('error' => true, 'message' => 'method not allowed');
}

header('Content-type: application/json');
echo json_encode($response);
die();

?>