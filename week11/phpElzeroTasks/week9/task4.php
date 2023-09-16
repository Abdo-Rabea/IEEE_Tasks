<?php

$ls = filter_list();
$res = [];
foreach (filter_list() as $v) {
    $res[filter_id($v)] = $v;
}
print_r($res);
