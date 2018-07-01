<?php

$json = '[{"nome":"Jo\u00e3o","idade":30},{"nome":"Maria","idade":40}]';

$data = json_decode($json, true);

var_dump($data);
?>