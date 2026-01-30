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

// Site verify
if($_SESSION['btc'] !== 'verify') view('public','btc_verify','Xác thực',null);

# [DATA]
$data = [
    'list_person' => person_get_all()
];

# [RENDER]
view('public','person_list','Danh sách dự thi',$data);