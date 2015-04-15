<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/materials/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/materials/index.php",
	),
	array(
		"CONDITION" => "#^/woman/([\w-_]+)/.*#",
		"RULE" => "ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/woman/index.php",
	),
	array(
		"CONDITION" => "#^/ru/materials/([\w-_]+)/.*#",
		"RULE" => "&ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/ru/materials/index.php",
	),
	array(
		"CONDITION" => "#^/ru/woman/([\w-_]+)/.*#",
		"RULE" => "ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/ru/woman/index.php",
	)
);

?>