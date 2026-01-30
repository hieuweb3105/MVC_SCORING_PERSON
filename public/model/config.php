<?php

/**
 * Lấy giá trị của config
 * @param mixed $param Cột cần lấy
 * @return int|string
 */
function config_get_value($param) {
    return pdo_query_value(
        'SELECT '.$param.' FROM config '
    );
}
/**
 * Thay đổi giá trị của config
 * @param mixed $param Cột thay đổi
 * @param mixed $value
 */
function config_update($param,$value) {
    return pdo_execute(
        'UPDATE config SET '.$param.' = ?'
        ,$value
    );
}