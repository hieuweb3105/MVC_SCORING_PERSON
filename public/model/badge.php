<?php

function badge_get_all() {
    return pdo_query(
        'SELECT * FROM badge'
    );
}