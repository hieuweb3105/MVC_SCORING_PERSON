<?php

# [MODEL]
model('public','score');
model('public','person');
model('public','badge');

# [HANDLE]

# [DATA]
$data = [
    'list_person' => score_show_board()
];

if(!$data['list_person']) {
    toast_create('failed','Danh sách SHOW ALL hiện trống !');
    route('btc');
}

# [RENDER]
view('public','show_all','Công Bố Kết quả',$data);