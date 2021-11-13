<?php
$st='[{"team":"QB","playerid":"123699","apitable_id":"206"},{"team":"RB","playerid":"6447","apitable_id":"365"},{"team":"WR","playerid":"963852","apitable_id":"856"}]';
$ar=json_decode($st,true);
echo "<pre>";print_r($ar);echo "</pre>";
?>