<?php

$closureWithArgs = function ($arg1, $arg2) {
    // body
};

$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
    // body
};

$longArgs_noVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) {
    // body
};

$noArgs_longVars = function () use (
    $longLongLongLongVar1,
    $longerLongerVar2,
    $muchLongerVar3
) {
    // body
};

$longArgs_longVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) use (
    $longLongLongLongLongLongLongVar1,
    $longerLongerLongerLongerVar2,
    $muchLongerVar3
) {
    // body
};

$longArgs_shortVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) use ($var1) {
    // body
};

$shortArgs_longVars = function ($arg) use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
    // body
};

$foo->bar(
    $longLongLongLongLongLongLongLongLongLongArg1,
    function ($arg2) use ($var1) {
        // body
    },
    $longLongLongLongLongLongLongLongLongLongArg3
);

$emptyFunc = function(){};

$emptyFuncWithComment = function(){ /* Comment */ };

$longArgs_noVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) {
    // body
};

$noArgs_longVars = function () use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
    // body
};

$longArgs_longVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
    // body
};

$longArgs_shortVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) use ($var1) {
    // body
};

$shortArgs_longVars = function ($arg) use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
    // body
};

$rTD = function(array $array): int {
    return array_sum($array);
};

$rNTD = function(array $array): ?int {
    return array_sum($array);
};

$rTDWU = function(array $array) use ($var1, $var2): int {
    return array_sum($array);
};

$rTDWLU = function(array $array) use ($longLongLongLongLongLongLongVar1, $longerLongerLongerLongerVar2, $muchLongerVar3): int {
    return array_sum($array);
};

$var = function &() {
    static $collection = array();

    return $collection;
};

$func = static function() {};
$fn = function &() use (&$value) { return $value; };

$var = function () {};
