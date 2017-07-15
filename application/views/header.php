<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?=base_url()?>resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?=base_url()?>resources/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>resources/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Admin Panel</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url()?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"><i class="fa fa-fw fa-wrench"></i> Settings</a>
                    <ul class="sidebar-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="<?=base_url()?>settings/admins">Admins</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>settings/groups">Admin Groups</a>
                        </li> 
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope"></i> <span class="hidden-lg-up">Messages <span class="badge badge-pill badge-primary">12 New</span></span>
                        <span class="new-indicator text-primary hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">12</span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">New Messages:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>David Miller</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>Jane Smith</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>John Doe</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">
                            View all messages
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i> <span class="hidden-lg-up">Alerts <span class="badge badge-pill badge-warning">6 New</span></span>
                        <span class="new-indicator text-warning hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">6</span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                    </span>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>logout"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper py-3">

        <div class="container-fluid">

        