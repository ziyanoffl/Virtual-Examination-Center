<?php
session_start();

$host = 'localhost';
$userName = 'root';
$pass = '';
$database = 'website_db';

$con = mysqli_connect($host,$userName,$pass,$database);