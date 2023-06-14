<?php

include "02-valid-anagram.php";

$sol = new Solution;

echo $sol->isAnagram("abc", "cba") ? "true" : "false";