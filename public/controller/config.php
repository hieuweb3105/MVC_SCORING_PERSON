<?php

# [AUTHOR]
if($_SESSION['btc'] !== 'verify') route('btc');

# [MODEL]
model('public','config');
model('public','show_event');
model('public','score');

# [HANDLE]
// Case : Thay đổi giá trị guest
if(isset($_POST['config_guest']) && $_POST['config_guest']) {
    // input
    $input_value_guest = $_POST['config_guest'];
    // validate
    if(!ctype_digit($input_value_guest)) {
        toast_create('failed','Value validate is integer !');
        route('/config');
    }
    // update
    config_update('config_guest',$input_value_guest);
    // route
    toast_create('success','Save config successfully !');
    route('/config');
}

// Case : Reset điểm
if(isset($_POST['reset_score']) && $_POST['reset_score'] && is_numeric($_POST['reset_score'])) {
    // input
    $type_reset = $_POST['reset_score'];

    // delete
    if($type_reset == -1) score_reset_all();
    else score_reset_by_id($type_reset);
    // route
    toast_create('success','Reset scoreboard successfully !');
    route('config');
}

# [DATA]
$data = [

];

# [RENDER]
view('public','config','Config',$data);