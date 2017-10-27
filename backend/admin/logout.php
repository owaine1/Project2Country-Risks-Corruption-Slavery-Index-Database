<?php
session_start();
require_once('../common/logger.php');

sleep('1'); // mimic a 'real' server, kinda...

session_unset();
echo 'logged out...'; //send message to js front-end
