<?php

$n = (int)readline();

for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        $result = $i * $i;
        echo "$i^2 = $result\n";
    }
}
