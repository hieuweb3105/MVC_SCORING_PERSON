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