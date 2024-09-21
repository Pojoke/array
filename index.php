<?php
$array_words = [
    "first" => "hello",
    "last" => "goodbye",
    "add" => "sorry",
];
//echo $array_words["add"];
$array_words1 = [
    1 => "hello",
    2 => "goodbye",
    3 => "sorry",
];
$array_words2 = [
    1 => "hello",
    "goodbye",
    "sorry",
    "bye",
];
//echo $array_words2[3];
$array_words1[5] = "bye";
print_r($array_words1);
var_dump($array_words1);