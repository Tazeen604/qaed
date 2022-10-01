<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){
    $('#edate').on('change', function(){
        var edate = $(this).val();
        console.log(edate);
        if(edate){
            $.ajax({
                type:'GET',
                url:'dd.php',
                data:'edate='+edate,
                success:function(html){
            $('#tehsilname').html(html);
                    $('#title').html('<option value="">Select Tehsil first</option>'); 
                }
            }); 
        }else{
            $('#tehsilname').html('<option value="">Select Date first</option>');
            $('#title').html('<option value="">Select Tehsil first</option>'); 
        }
    });
    
    $('#tehsilname').on('change', function(){
        var tehsil = $(this).val();
        if(tehsil){
            $.ajax({
                type:'GET',
                url:'dd.php',
                data:'tehsil_title='+tehsil,
                success:function(html){
                    $('#title').html(html);
                }
            }); 
        }else{
            $('#title').html('<option value="">Select Tehsil first</option>'); 
        }
    });
});
</script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="mt-detail.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Master Trainers</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="summary.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Summary </span></a>
            </li>

            <!-- Divider -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                    </ul>

                </nav>
                <!-- End of Topbar -->