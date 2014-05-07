<?php

// Inialize session
session_start();

// Delete certain session
//unset($_SESSION['username']);

unset($_SESSION['email']);
unset($_SESSION['eeid']);
unset($_SESSION['category']);
unset($_SESSION['status']);
unset($_SESSION['jobseeker']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: index.html');

?>