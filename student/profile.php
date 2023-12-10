<!DOCTYPE html>
<html lang="en">


<?php include "head.php";?>

<body>
   <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php include "nav.php";?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include "sidebar.php";?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Profile</h5>
                                            <p class="m-b-0"><?php echo $title ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!--Contetnt -->
                                            <div class="col-xl-12 col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            Profile
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                            <div class="card-body">
                                                                <div class="main-menu-header ml-4">
                                                                <img class="img-radius" id="uploadButton" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                                                </div>
                                                        </div>
                                                            </div>
                                                            <div class="col-sm-8 mb-5 ">
                                                                <form action="">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <label for="">First Name</label>
                                                                            <input type="text" name="" class="form-control" id="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="">Last Name</label>
                                                                            <input type="text" name="" class="form-control" id="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="">Age</label>
                                                                            <input type="text" name="" class="form-control" id="">
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6">
                                                                            <label for="">Address</label>
                                                                            <input type="text" name="" class="form-control" id="">
                                                                        </div>
                                                                    </div> <br>
                                                                    <p onclick="showSwalDialog()"  class="btn btn-primary">Submit</p>
                                                                </form>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            Administrative Credentials
                                                        </div>
                                                            <div class="col-sm-12 mb-5 mr-3">
                                                                <form action="">
                                                                    <div class="row">
                                                                    <div class="col-sm-12">
                                                                            <label for="">About Me</label>
                                                                            <textarea name=""  class="form-control" id="" cols="30" rows="10"></textarea>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-6">
                                                                            <label for="">Email</label>
                                                                            <input type="text" name="" class="form-control" id="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="">Contact Number</label>
                                                                            <input type="text" name="" class="form-control" id="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="">Password</label>
                                                                            <input type="text" name="" class="form-control" id="">
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6">
                                                                            <label for="">Repeat Password</label>
                                                                            <input type="text" name="" class="form-control" id="">
                                                                        </div>
                                                                    </div> <br>
                                                                    <p onclick="showSwalDialog()" class="btn btn-primary">Submit</p>
                                                                </form>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                            </div>  <!-- contetnt-->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include "footer.php"?>
</body>

</html>
