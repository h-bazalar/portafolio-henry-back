<?php
session_start();

session_unset();
session_destroy();

header("Location: https://portafolio-henry.000webhostapp.com/");
exit;