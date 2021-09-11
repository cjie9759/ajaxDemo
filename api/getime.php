<?php
$time = date("H:i:s");
$data = [
    "err" => 0,
    "msg"=>null,
    "data"=>[
        "time"=>$time
    ]
];
echo json_encode($data);
