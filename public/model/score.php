<?php


function score_save($id_person,$id_badge) {
    pdo_execute(
        'INSERT INTO score(id_person,id_badge,token_guest) VALUES (?,?,?)'
        ,$id_person,$id_badge,$_COOKIE['token_guest']
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

function score_reset_all() {
    pdo_execute(
        'DELETE FROM score'
    );
}

function score_reset_by_id($id_person) {
    pdo_execute(
        'DELETE FROM score WHERE id_person = ?'
        ,$id_person
    );
}

function score_show_board() {
    return pdo_query(
        'WITH BadgeCounts AS (
            SELECT 
                s.id_person, 
                b.name_badge, 
                COUNT(s.id_badge) AS badge_count,
                MAX(s.created_at) AS latest_record
            FROM score s
            JOIN badge b ON s.id_badge = b.id_badge
            GROUP BY s.id_person, b.name_badge
        ),
        RankedBadges AS (
            SELECT 
                id_person, 
                name_badge, 
                badge_count,
                latest_record,
                ROW_NUMBER() OVER (
                    PARTITION BY id_person 
                    ORDER BY badge_count DESC, latest_record DESC
                ) as rnk
            FROM BadgeCounts
        )
        SELECT rb.*, p.image_person
        FROM RankedBadges rb
        JOIN person p
        ON rb.id_person = p.id_person
        WHERE rnk = 1
        ORDER BY badge_count DESC, latest_record DESC;'
    );
}

function score_check_guest_vote($id_person) {
    return pdo_query_value(
        'SELECT b.name_badge
        FROM score s
        JOIN badge b
        ON b.id_badge = s.id_badge
        WHERE s.token_guest = ? AND s.id_person = ?'
        ,$_COOKIE['token_guest'], $id_person
    );
}