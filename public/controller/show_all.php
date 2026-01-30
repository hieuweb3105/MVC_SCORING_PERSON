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

# [RENDER]
view('public','show_all','Công Bố Kết quả',$data);