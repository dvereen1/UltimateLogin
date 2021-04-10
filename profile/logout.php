<?php

//Destroying session details and file
session_start();
session_unset();
session_destroy();
//redirect to login page
header("location: /ultimLogin/login");


