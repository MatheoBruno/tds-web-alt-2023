<?php
$yamlContent=yaml_parse_file('example.yaml');
echo '<pre>'.print_r($yamlContent,true).'</pre>';

$menu=$yamlContent['menu'];
echo "<ul>";
foreach($menu as $elm) {
    echo "<li>$elm</li>";
}
echo '</ul>';