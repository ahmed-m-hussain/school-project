<?php
function secure($value)
{
    return htmlspecialchars(strip_tags($value));
}

function _get($value)
{
    if (isset($_GET[$value]) and $value = $_GET[$value]) {
        return $value;
    }
    return null;
}
