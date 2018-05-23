<?php
//logout user and redirect then
session_start();

session_destroy();

header('Location: ../login.php');