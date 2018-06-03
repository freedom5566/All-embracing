<?php

function problem(array $arr): array
{
    $max=max($arr);
    $min=min($arr);
    $tmp1=0;
    $tmp2=0;
    for ($min;$min<=$max;$min++) {
        $data[$tmp1++]=getlength($min);
    }
    array_push($arr, max($data));
    return $arr;
}

function getlength(int $a):int
{
    //從1開始因為包含1
    $tmp=1;
    while ($a!=1) {
        if ($a%2==0) {
            $a=$a/2;
            
            $tmp++;
        } else {
            $a=3*$a+1;
            $tmp++;
        }
    }
    return $tmp;
}
