<?php

# [MODEL]
model('public','score');
model('public','person');
model('public','badge');

# [HANDLE]
// Case : Lấy kết quả của thí sinh
if(get_action_uri(1)) {
    // input
    $id_person = get_action_uri(1);
    // query
    $get_person = person_get_one($id_person);
    // validate
    if(!$get_person) view_error(400);
}

// Case : get api
if(get_action_uri(2) === 'api') {
    // return
    view_json(200,[
        'count' => score_count_one_person($id_person),
        'data' => score_with_one_person($id_person),
    ]);
}

# [DATA]
$data = [
    'person' => $get_person,
    'list_badge' => badge_get_all()
];

# [RENDER]
view('public','result','Kết quả',$data);