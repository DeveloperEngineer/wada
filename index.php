<?php

    include 'glu.php';
    include 'miyav.php';

    use Gluglu\Glu;
    use Gluglu\Miyav;

    $glu = new Glu();
    echo $glu->deve(5, 9);
    echo Miyav::miyavo();
