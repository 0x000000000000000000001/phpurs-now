<?php

$now = function() {
    return round(microtime(true) * 1000);
};

$getTimezoneOffset = function() {
    return -(date("Z") / 60);
};

$exports['now'] = $now;
$exports['getTimezoneOffset'] = $getTimezoneOffset;
return $exports;
