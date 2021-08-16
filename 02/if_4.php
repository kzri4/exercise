<?php

$score_math = 10;
$score_english = 20;

if ($score_math >= 60 && $score_english >= 60) {
    echo "合格\n";
} elseif ($score_math >= 30 && $score_english < 60 || $score_math < 60 && $score_english >= 30) {
    echo "再試験\n";
} else {
    echo "不合格\n";
}