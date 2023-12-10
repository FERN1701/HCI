<!DOCTYPE html>
<html lang="en">


<?php include "head.php"; $main = 1 ; $sub= 1;?>

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
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome to <?php echo $title?></p>
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
                                            <div class="col-sm-12">
                                                <div class="card ">
                                                    <h4 class="mt-3 mb-3 ml-3">School Year 20## - 20## </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Material statustic card start -->
                                            
                                            <div class="col-xl-4 col-md-12">
                                               
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-user text-primary f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>16</h5>
                                                                        <a href="view-schoolyear-teacher.php"><p class="text-muted m-b-0">Teachers</p></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                    <i class="far fa-user text-c-success f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>450</h5>
                                                                        <a href="view-schoolyear-students.php"><p class="text-muted m-b-0">Students</p></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-file-alt  f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>3</h5>
                                                                        <p class="text-muted m-b-0">Programss</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                    <i class="fas fa-users  f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>5</h5>
                                                                        <p class="text-muted m-b-0">Organizations</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-pencil-square-o  f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>1000</h5>
                                                                        <p class="text-muted m-b-0">Blogs</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-bullhorn f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>600</h5>
                                                                        <p class="text-muted m-b-0">announcement</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-newspaper-o f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>350</h5>
                                                                        <p class="text-muted m-b-0">Comments</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-question-circle  f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>7</h5>
                                                                        <p class="text-muted m-b-0">Inquiries</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                            <div class="row">
                                                    <!-- sale card start -->

                                                    <div class="col-md-12">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Average Online</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-<?php if(rand(11,88)>50){echo "up";}else{ echo "down";}?> m-r-15 text-c-red"></i><?php echo rand(111,999)?></h4>
                                                                <p class="m-b-0 mb-5"><?php echo rand(11,88)?>% From from This School Year</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                            </div>
                                            
                                            <!-- Material statustic card end -->
                                            <!-- order-visitor start -->


                                            <!-- order-visitor end -->

                                            <!--  sale analytics start -->
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Student List</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                        <table id="example" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Student Name</th>
                                                                    <th>Department</th>
                                                                    <th>Email</th>
                                                                    
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1; for ($i=0; $i < 25 ; $i++) {  ?>
                                                                    <tr>
                                                                    <td>Student <?php echo $a++?></td>
                                                                    <td><?php if(rand(1,3) == 1){ echo "CS Department";}elseif(rand(1,3) == 2){ echo "IT Department";}else{ echo "Associate in Technology";}?></td>
                                                                    <td>student<?php echo $c++?>@gmail.com</td>
                                                                    </tr> 
                                                                <?php }?>
                                                               
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Teachers Name</th>
                                                                    <th>Department</th>
                                                                    <th>Email</th>
                                                                   
                                                                </tr>
                                                            </tfoot>
                                                        </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-12">
                                                <div class="row">
                                                    <!-- sale card start -->

                                                    <div class="col-md-12">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Organizational Fees Track</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-<?php if(rand(11,88)>50){echo "up";}else{ echo "down";}?> m-r-15 text-c-red"></i><?php echo rand(111,999)?></h4>
                                                                <p class="m-b-0"><?php echo rand(11,88)?>% From This School Year</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="card bg-c-red total-card">
                                                            <div class="card-block">
                                                                <div class="text-left">
                                                                    <h4> <i class="fa fa-low-vision m-r-15 "></i> 43</h4>
                                                                    <p class="m-0">Block Users</p>
                                                                </div>
                                                                 </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card bg-c-red total-card">
                                                            <div class="card-block">
                                                                <div class="text-left">
                                                                    <h4> <i class="fa fa-low-vision m-r-15 "></i>56</h4>
                                                                    <p class="m-0">Block Comments</p>
                                                                </div>
                                                                 </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Unique Visitors</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-<?php if(rand(11,88)>50){echo "up";}else{ echo "down";}?> m-r-15 text-c-red"></i>652</h4>
                                                                <p class="m-b-0"><?php echo rand(11,88)?>% From This School Year</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                   </div>
                                            </div>

                                            
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
   <script>
    new DataTable('#example');
   </script>
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
   <script src="assets/pages/waves/js/waves.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
