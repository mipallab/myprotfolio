<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="./assects/css/bootstrap.min.css" >
     <link href="assects/css/font-awesome/all.min.css" rel="stylesheet">
     <link href="assects/css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="./assects/css/style.css">
</head>
<style>
    .modal-dialog {
        max-width: 992px;
        margin: 1.75rem auto;
    }
</style>
<body>
    <nav class="navbar navbar-expand d-flex flex-column align-item-start border-end" id="sidebar">
        <a href="" class="navbar-brand text-dark mt-5">
            <h2 class="h2 font-weight-bold">Admin Panel</h2>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100">
                <a href="./user-page.php" class="nav-link text-dark pl-4">Users Pages</a>
            </li>
            <li class="nav-item w-100">
                <a href="./contact-user.php" class="nav-link text-dark pl-4">Contact User</a>
            </li>
            <!-- <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4">Blog</a>
            </li> -->
            <li class="nav-item dropdown w-100">
                <a href="#" class="nav-link dropdown-toggle text-dark pl-4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Web Section</a>

                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <li><a href="home-section.php" class="dropdown-item text-dark pl-4 p-2">home section</a></li>
                    <li><a href="about-section.php" class="dropdown-item text-dark pl-4 p-2">about us section</a></li>
                    <li><a href="my-service.php" class="dropdown-item text-dark pl-4 p-2">my service </a></li>
                    <li><a href="my-skill.php" class="dropdown-item text-dark pl-4 p-2">my skill </a></li>
                    <li><a href="exprience.php" class="dropdown-item text-dark pl-4 p-2">my exprience </a></li>
                    <li><a href="client-testimonials.php" class="dropdown-item text-dark pl-4 p-2">client testimonials </a></li>
                    <li><a href="contact-me.php" class="dropdown-item text-dark pl-4 p-2">contact me </a></li>
                </ul>
            </li>
        </ul>
    </nav>
<section class="p-4 my-container">
    <button class="btn my-4" id="menu-btn"><img src="assects/media/img/menu-icon-13.png" width="35px" alt="menu-icon"></button>
    
    
    