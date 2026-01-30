<?php

function person_get_all() {
    return pdo_query(
        'SELECT * FROM person'
    );
}

function person_get_one($id) {
    return pdo_query_one(
        'SELECT * FROM person WHERE id_person = ?'
        ,$id
    );
}

function person_get_active() {
    return pdo_query_one(
        'SELECT * FROM person WHERE active_person IS TRUE'
    );
}

function person_update_state($value_state,$id_person) {
    if($value_state == 'open') {
        // đóng tất cả
        pdo_execute(
            'UPDATE person SET active_person = FALSE'
        );
        // mở theo id
        pdo_execute(
            'UPDATE person SET active_person = TRUE WHERE id_person = ?'
            ,$id_person
        );
    }
    elseif($value_state == 'close') {
        // đóng theo id
        pdo_execute(
            'UPDATE person SET active_person = FALSE WHERE id_person = ?'
            ,$id_person
        );
    }
}