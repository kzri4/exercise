<?php

$score = 29;

if ($score >= 60) {
    echo "合格です\n";
} elseif ($score >= 30 && $score < 60) {
    echo "追試です\n";
} else {
    echo "不合格です\n";
}