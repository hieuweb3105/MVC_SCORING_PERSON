<?php


function score_save($id_person,$id_badge) {
    pdo_execute(
        'INSERT INTO score(id_person,id_badge,token_guest) VALUES (?,?,?)'
        ,$id_person,$id_badge,$_COOKIE['token_guest']
    );
}

function score_count_turn($id_person) {
    pdo_query_value(
        'SELECT COUNT(id_score) FROM score WHERE id_person = ?'
        ,$id_person
    );
}

function score_with_one_person($id_person) {
    return pdo_query(
        'SELECT id_badge, COUNT(id_badge) AS count_badge
        FROM score
        WHERE id_person = ?
        GROUP BY id_badge'
        ,$id_person
    );
}

function score_count_one_person($id_person) {
    return pdo_query_value(
        'SELECT COUNT(id_person) FROM score WHERE id_person = ?'
        ,$id_person
    );
}