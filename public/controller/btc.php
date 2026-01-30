<?php

# [MODEL]
model('public','config');
model('public','score');
model('public','person');

# [HANDLE]
// Case : Xác thực quyền BTC
if(isset($_POST['admin_verify']) && $_POST['admin_verify']) {
    $input_verify = $_POST['admin_verify'];
    if(password_verify($input_verify,'$2y$10$3q4JO0xnkM1rQk/TnwLj/etaTfB7UWIPJElvqWqCQK0TsdUvDh99O')) {
        $_SESSION['btc'] = 'verify';
        toast_create('success','Xác thực thành công !');
        route('btc');
    }else toast_create('failed','Xác thực thất bại !');
}

// Case : Mở bình chọn
if(get_action_uri(1) == 'open' && get_action_uri(2)) {
    // input
    $id_person = get_action_uri(2);
    // update
    person_update_state('open',$id_person);
    // route
    toast_create('success','Mở bình chọn thành công !');
    route('btc');
}

// Case : Đóng bình chọn
if(get_action_uri(1) == 'close' && get_action_uri(2)) {
    // input
    $id_person = get_action_uri(2);
    // update
    person_update_state('close',$id_person);
    // route
    toast_create('success','Đóng bình chọn thành công !');
    route('btc');
}

// Site verify
if($_SESSION['btc'] !== 'verify') view('public','btc_verify','Xác thực',null);

# [DATA]
$data = [
    'list_person' => person_get_all()
];

# [RENDER]
view('public','person_list','Danh sách dự thi',$data);