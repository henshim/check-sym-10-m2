<?php

function checkSymbol($string)
{
    $stack = new SplStack();
    $arrSymbol = str_split($string);
    $flag = true;

    for ($i = 0; $i < count($arrSymbol); $i++) {
        if ($arrSymbol[$i] === "(") {
            $stack->push($arrSymbol[$i]);
        } elseif ($arrSymbol[$i] === ")") {
            if ($stack === null) {
                $flag = false;
            } else {
                $stack->pop();
            }
        }
    }
    if (count($stack) > 0) {
        $flag = false;
    }
    return $flag;
}

echo '<pre>';
print_r(checkSymbol('(4+5)*((3-1)+45)'));