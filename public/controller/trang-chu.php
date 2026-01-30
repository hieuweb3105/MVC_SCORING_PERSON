<?php

// test_array($_SESSION);

# [MODEL]
model('public','badge');
model('public','person');

# [DATA]
$data = [
    'person' => person_get_active(),
    'list_badge' => badge_get_all(),
];

# [RENDER]
view('public','home','Bình chọn thí sinh',$data);