<?php

// Inialize session
session_start();

// Delete certain session
//unset($_SESSION['username']);

unset($_SESSION['emai']);
unset($_SESSION['erid']);
unset($_SESSION['category']);
unset($_SESSION['status']);
unset($_SESSION['employer']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: employer_login.php');

?>