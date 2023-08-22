<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: Login_Page.html"); // Redirecting To Home Page
}
?>
