<!DOCTYPE html>
<html lang="en">


<?php include "head.php"; $main = 3 ; $sub= 2;?>

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
                                            <p class="m-b-0"><?php echo $title?></p>
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
                                        
                                           
                                           
                                            
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                General Organization Fees (Gender Club)
                                            </div>
                                            <div class="card-body">
                                            <div class="table-responsive">
                                            <table id="example" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Students</th>
                                                                    <th>Email</th>
                                                                    <th>Department</th>
                                                                    <th>20## - 20## (1st Semester)</th>
                                                                    <th>20## - 20## (2nd Semester)</th>
                                                                    <th>20## - 20## (1st Semester)</th>
                                                                    <th>20## - 20## (2nd Semester)</th>
                                                                    <th>20## - 20## (1st Semester)</th>
                                                                    <th>20## - 20## (2nd Semester)</th>
                                                                    <th>20## - 20## (2nd Semester)</th>
                                                                    <th>Action</th>
                                                                    
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1;  ;for ($i=0; $i < 13  ; $i++) { 
                                                                    $r1 = rand(111,999);
                                                                    $r2 = rand(111,999);
                                                                    $r3 = rand(111,999);
                                                                    $r4 = rand(111,999);
                                                                    $r5 = rand(111,999);
                                                                    $r6 = rand(111,999);
                                                                    $r7 = rand(111,999);
                                                                    ?>
                                                                    <tr>
                                                                    <td>Student <?php echo $a++?></td>
                                                                    <td>student@gmail.com</td>
                                                                    <td><?php if(rand(1,3) == 1){ echo "CS Department";}elseif(rand(1,3) == 2){ echo "IT Department";}else{ echo "Associate in Technology";}?></td>
                                                                    <td <?php if($r1 > 300){ echo "class='bg-success'"; }else{ echo "class='bg-warning' onclick='myFunction()'";}?>><?php if($r1 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td <?php if($r2 > 300){ echo "class='bg-success'"; }else{ echo "class='bg-warning' onclick='myFunction()'";}?>><?php if($r2 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td <?php if($r3 > 300){ echo "class='bg-success'"; }else{ echo "class='bg-warning' onclick='myFunction()'";}?>><?php if($r3 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td <?php if($r4 > 300){ echo "class='bg-success'"; }else{ echo "class='bg-warning' onclick='myFunction()'";}?>><?php if($r4 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td <?php if($r5 > 300){ echo "class='bg-success'"; }else{ echo "class='bg-warning' onclick='myFunction()'";}?>><?php if($r5 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td <?php if($r6 > 300){ echo "class='bg-success'"; }else{ echo "class='bg-warning' onclick='myFunction()'";}?>><?php if($r6 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td <?php if($r7 > 300){ echo "class='bg-success'"; }else{ echo "class='bg-warning' onclick='myFunction()'";}?>><?php if($r7 > 300){ echo "Paid"; }else{ echo "Unpaid";}?></td>
                                                                    
                                                                    <td><a href="" onclick="alert('Notify this person')"><i class="fi fi-rr-bell-ring text-2ndary" style="font-size: 20px;"></i> </td>
                                                                </tr> 
                                                                <?php }?>
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Students</th>
                                                                    <th>Email</th>
                                                                    <th>Department</th>
                                                                    <th>20## - 20## (1st Semester)</th>
                                                                    <th>20## - 20## (2nd Semester)</th>
                                                                    <th>20## - 20## (1st Semester)</th>
                                                                    <th>20## - 20## (2nd Semester)</th>
                                                                    <th>20## - 20## (1st Semester)</th>
                                                                    <th>20## - 20## (2nd Semester)</th>
                                                                    <th>20## - 20## (2nd Semester)</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
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
    <?php include "footer.php"?>
</body>

</html>
