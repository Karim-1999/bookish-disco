<?php
include('includes/header.php');

session_destroy();

header('Location: /cms');
die();