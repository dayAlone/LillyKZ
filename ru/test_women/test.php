<?php
if(!session_id()){
	session_start();
}

if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
	if(!empty($_POST['answers']) && !empty($_POST['balls'])){
		//$db = new DB();
		$vars = $_POST;
		$vars['session'] = session_id();
		
		if($vars['balls'] >= 0 && $vars['balls'] <= 12){
			$vars['result'] = 'Поздравляем – в вашем случае, скорее всего, нет причин для беспокойства. Вы из тех, кому посчастливилось наслаждаться полноценными гармоничными отношениями с мужчиной. Однако не забывайте: чтобы ваши прекрасные отношения не разладились, при первых признаках нарушения эректильной функции желательно обращаться к врачу. Своевременно полученная квалифицированная консультация поможет вам избежать серьезных проблем.';
		} else if($vars['balls'] >= 13 && $vars['balls'] <= 18){
			$vars['result'] = 'Если ваш партнер время от времени испытывает трудности с эрекцией, то это еще не повод говорить об эректильной дисфункции. Да, «тревожные звоночки» есть, но лишь специалист может поставить диагноз и найти решение возможной проблемы. Пусть ваш партнер запишется на прием к врачу. Своевременно полученная квалифицированная консультация поможет ему избежать серьезных проблем.';
		} else if($vars['balls'] >= 19 && $vars['balls'] <= 24){
			$vars['result'] = 'У вашего партнера, скорее всего,  есть все основания записаться на прием к врачу. Но даже если выяснится, что у мужчины эректильная дисфункция, не отчаивайтесь. В большинстве случаев ЭД поддается лечению, и современные медицинские препараты позволяют восстановить полноценные сексуальные отношения на постоянной основе. Не откладывайте решение проблемы, обратитесь к врачу!';
		} else {
			$vars['result'] = 'Поздравляем – в вашем случае, скорее всего, нет причин для беспокойства. Вы из тех, кому посчастливилось наслаждаться полноценными гармоничными отношениями с мужчиной. Однако не забывайте: чтобы ваши прекрасные отношения не разладились, при первых признаках нарушения эректильной функции желательно обращаться к врачу. Своевременно полученная квалифицированная консультация поможет вам избежать серьезных проблем.';
		}
		
		$template = file_get_contents('result.html');
		foreach($vars as $key=>&$val){
			$val = htmlspecialchars($val);
			$template = str_replace('{'.$key.'}', $val, $template);
		}
		
		
		/*$sql = 'SELECT id FROM test_woman WHERE session = "'.$vars['session'].'"';
		$id = $db->get_one($sql);
		if($id){
			$db->update('test_woman',$vars,$id);
		} else {
			$db->insert('test_woman',$vars);
		}
		*/
				
		$response = array('error'	 =>	false,
						  'response' => $template);
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