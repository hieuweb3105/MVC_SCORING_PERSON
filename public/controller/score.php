<?php

# [VARIABLE]
$sum_score = 0;

# [MODEL]
model('public','score');

# [HANDLE]
if(isset($_POST['value_badge']) && $_POST['value_badge']) {
    // input
    $value_badge = $_POST['value_badge'];
    $value_person = $_POST['value_person'];
    // save
    score_save($value_person,$value_badge);
    // route
    toast_create('success','Bình chọn thành công !');
    route('result/'.$value_person);
}

# [RENDER]
view_json(400,[
    'message' => 'Bad Request',
    'go_home' => URL
]);