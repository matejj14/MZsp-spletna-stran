<?php

session_start();

session_destroy();

header("Location: doma.php");
exit;