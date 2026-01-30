<?php

// test_array($_SESSION);

# [MODEL]
model('public','badge');
model('public','person');
model('public','score');

# [DATA]
$data = [
    'person' => person_get_active(),
    'list_badge' => badge_get_all(),
];

# [RENDER]
// Chưa mở bình chọn
if(!$data['person']) view('public','home_loading','Bình chọn thí sinh',$data);
     
view('public','home','Bình chọn thí sinh',$data);