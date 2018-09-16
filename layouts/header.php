<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php   print '<style>'; ?>
        <?php   include '../resources/styles.css'; ?>
        <?php   print '</style>'; ?>
    <title>Sky</title>
</head>
<body>
<?php 
include '../functions.php'; 

if($_SERVER['REQUEST_URI'] !== '/labb2/views/dashboard.php'){
    Validation::session_check();
} else {
    Validation::validation_check();
}
?>