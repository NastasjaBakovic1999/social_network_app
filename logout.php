<?php 
include "function/init.php"; 
session_destroy();

redirect(location: "index.php");