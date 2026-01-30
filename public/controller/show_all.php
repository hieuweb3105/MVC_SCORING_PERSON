<?php

# [MODEL]
model('public','score');
model('public','person');
model('public','badge');

# [HANDLE]

# [DATA]
$data = [
    'list_person' => person_get_all()
];

# [RENDER]
view('public','show_all','Công Bố Kết quả',$data);