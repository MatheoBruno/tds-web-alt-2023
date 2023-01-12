<?php
$data=yaml_parse_file("Comp.yaml");
/*echo '<pre>';
print_r($data);
echo '</pre>';*/
foreach ($data as $domaine=> $tbComp) {
	echo '<h1>'.$domaine.'</h1>';
	foreach ($tbComp as $Comp) {
		echo '<p>'.$Comp['nom'].' : ';
		echo $Comp['niveau'].'</p>';
	}
}
?>