<?php

foreach (get_loaded_extensions() as $ext) {
    echo $ext."\n";
}

exit(0);
