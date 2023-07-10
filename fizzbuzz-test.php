<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'FizzBuzz' . "\r\n";
    } elseif ($i % 3 == 0) {
        echo 'Fizz' . "\r\n";
    } elseif ($i % 5 == 0) {
        echo 'Buzz' . "\r\n";
    } else {
        echo $i . "\r\n";
    }
}
