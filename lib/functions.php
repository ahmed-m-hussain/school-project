<?php
function secure($value)
{
    return htmlspecialchars(strip_tags($value));
}
