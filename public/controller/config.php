<?php

# [AUTHOR]
if($_SESSION['btc'] !== 'verify') route();

# [MODEL]
model('public','config');
model('public','score');
model('public','person');

# [HANDLE]
// Case : Reset điểm
if(isset($_POST['reset_score']) && $_POST['reset_score'] && is_numeric($_POST['reset_score'])) {
    // input
    $type_reset = $_POST['reset_score'];

    // delete
    if($type_reset == -1) score_reset_all();
    else score_reset_by_id($type_reset);
    // route
    toast_create('success','Reset thành công !');
    route('config');
}

# [DATA]
$data = [

];

# [RENDER]
view('public','config','Cấu hình',$data);