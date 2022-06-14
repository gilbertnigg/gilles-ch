<?php
$json['work'] = (string)snippet('work', ['work' => $page], true);

echo json_encode($json);
