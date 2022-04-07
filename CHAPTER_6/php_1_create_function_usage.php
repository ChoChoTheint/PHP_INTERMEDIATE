<?php

$greet = create_function('$para1,$para2', 'echo "para 1 is " . $para1[0] . "<br/> para 2 is " . $para2[0];');

$greet(["one","two"], ["three","four"]);

//error