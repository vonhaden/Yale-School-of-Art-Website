<?php
    // Login Session

    session_start();

    $login = '';

    if (isset($_GET['login'])){
        $logintemp = $_GET['login'];
        if ($logintemp == 'true'){
            $login = true;
        } elseif ($logintemp == 'false') {
            $login = false;
        }
    }

    if (!isset($_SESSION['loggedin'])) {
        $_SESSION['loggedin'] = false;
    } elseif ((isset($_SESSION['loggedin'])) and (isset($_GET['login'])) ) {
        $_SESSION['loggedin'] = $login;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= isset($pageTitle) ? $pageTitle : 'Yale School of Art' ?></title>

    <!-- Meta -->
    <meta name="description" content="<?= isset($metaDescription) ? $metaDescription : 'The Yale School of Art is the art school of Yale University. Founded in 1869 as the first professional fine arts school in the United States, it grants Masters of Fine Arts degrees to students completing a two-year course in graphic design, painting/printmaking, photography, or sculpture.' ?>">
    <meta name="keywords" content="yale, education, art school">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">

    <!-- Favicon -->

</head>

<body>