<?php

$ary = [
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"]
];

$data = serialize($ary);
echo $data;
$normal = unserialize($data);
echo "<br/>";
echo "<pre>" . print_r($normal,true) . "</pre>";