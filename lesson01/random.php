<?php
$random = rand(0, 1);
echo $random;
if ($random === 0) {
    echo 'あたりです';
} else {
    echo 'ハズレです';
}