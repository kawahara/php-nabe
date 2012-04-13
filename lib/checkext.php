<?php

if ($argc < 1) {
    exit(-1);
}

$extname = $argv[1];

if (extension_loaded($extname)) {
    exit(0);
}

exit(-1);
