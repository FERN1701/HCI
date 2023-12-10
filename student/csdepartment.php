<!DOCTYPE html>
<html lang="en">


<?php include "head.php"; $main = 3 ; $sub= 1;?>

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
                                            <p class="m-b-0">College of Computer Science</p>
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
                                                                       <h5>11</h5>
                                                                       <p class="text-muted m-b-0">Teachers</p>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <div class="col-sm-6 p-b-20 p-t-20">
                                                               <div class="row align-items-center text-center">
                                                                   <div class="col-4 p-r-0">
                                                                   <i class="far fa-user text-c-success f-24"></i>
                                                                   </div>
                                                                   <div class="col-8 p-l-0">
                                                                       <h5><?php echo $stud = 81;?></h5>
                                                                       <p class="text-muted m-b-0">Students</p>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       
                                                   </div>
                                               </div>
                                           </div>
                                           
                                           <div class="col-xl-8 col-md-12">
                                               
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                        <div class="col-sm-4 p-b-20 p-t-20">
                                                          
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                    <i class="fi fi-rr-exclamation f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo rand(11,88)?></h5>
                                                                        <p class="text-muted m-b-0">Unpaid Gender</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                    <i class="fi fi-rr-exclamation f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo rand(11,88)?></h5>
                                                                        <p class="text-muted m-b-0">Unpaid CCS Council</p>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-4 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                    <i class="fi fi-rr-exclamation f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo rand(11,88)?></h5>
                                                                        <p class="text-muted m-b-0">Unpaid PSITS</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                Students
                                            </div>
                                            <div class="card-body">
                                            <table id="example" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Students</th>
                                                                    <th>Department</th>
                                                                    <th>Email</th>
                                                                    <th>Gender</th>
                                                                    <th>CCS Council</th>
                                                                    <th>PSITS</th>
                                                                    <th>Action</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1;  ;for ($i=0; $i < $stud  ; $i++) { 
                                                                    $r1 = rand(111,999);
                                                                    $r2 = rand(111,999);
                                                                    $r3 = rand(111,999);
                                                                    ?>
                                                                    <tr>
                                                                    <td>Student <?php echo $a++?></td>
                                                                    <td>Computer Science</td>
                                                                    <td>student@gmail.com</td>
                                                                    <td class="<?php if($r1 > 300){ echo "bg-success"; }else{ echo "bg-warning";}?>"><?php if($r1 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td class="<?php if($r2 > 300){ echo "bg-success"; }else{ echo "bg-warning";}?>"><?php if($r2 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td class="<?php if($r3 > 300){ echo "bg-success"; }else{ echo "bg-warning";}?>"><?php if($r3 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    
                                                                    <td><a href=""><i class="fi fi-rr-eye text-secondary" style="font-size: 20px;"></i></a> <a href=""><i class="fi fi-rr-edit text-secondary" style="font-size: 20px;"></i></a> <a href=""><i class="fi fi-rr-trash-xmark text-danger" style="font-size: 20px;"></i></a>  </td>
                                                                </tr> 
                                                                <?php }?>
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Teachers Name</th>
                                                                    <th>Department</th>
                                                                    <th>email</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
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
    <?php include "footer.php"?>
</body>

</html>
