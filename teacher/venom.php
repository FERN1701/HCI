<!DOCTYPE html>
<html lang="en">


<?php include "head.php"; $main = 4; $sub= 0;?>

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
                                            <p class="m-b-0">CCS Venom Publication</p>
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
                                            <!-- Material statustic card start -->
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20" data-toggle="modal" data-target="#officer">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                    <i class="fi fi-rr-circle-user f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo rand(11,44)?></h5>
                                                                        <p class="text-muted m-b-0">Officers</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20" data-toggle="modal" data-target="#members">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                    <i class="fi fi-rr-users-alt f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo rand(111,999)?></h5>
                                                                        <p class="text-muted m-b-0">Members</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade " id="officer" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="officerLabel">Officers <br>
                                                            <p data-toggle="modal" data-target="#add" >Add Officers</p></h5>
                                                            <br>
                                                            
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <table id="example" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Officer Name</th>
                                                                    <th>Position</th>
                                                                    <th>email</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1; for ($i=0; $i < 15 ; $i++) {  ?>
                                                                    <tr>
                                                                    <td>Officer <?php echo $a++?></td>
                                                                    <td>position <?php echo $b++?></td>
                                                                    <td><a href="mailto:officer<?php echo $c++?>@gmail.com">officer<?php echo $c++?>@gmail.com</a></td>
                                                                    </tr> 
                                                                <?php }?>
                                                               
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Officer Name</th>
                                                                    <th>Position</th>
                                                                    <th>email</th>
                                                                   </tr>
                                                            </tfoot>
                                                        </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>


                                                <div class="modal fade " id="blog" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="blogLabel"> Blogs</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <table id="example1" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Blog</th>
                                                                    <th>Created By</th>
                                                                    <th>Action</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1; for ($i=0; $i < 15 ; $i++) {  ?>
                                                                    <tr>
                                                                    <td>Blog Title  <?php echo $a++?></td>
                                                                    <td>Created by name<?php echo $b++?></td>
                                                                    <td><a href="" class="p-1 btn-primary">view</a></td>
                                                                    </tr> 
                                                                <?php }?>
                                                               
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Teachers Name</th>
                                                                    <th>Department</th>
                                                                    <th>Action</th>
                                                                   </tr>
                                                            </tfoot>
                                                        </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>



                                                <div class="modal fade  " id="fees" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog  modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="feesLabel"> Organization Fees</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <table id="example44" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Students</th>
                                                                    <th>Department</th>
                                                                    <th>Email</th>
                                                                    <th>Fees 1</th>
                                                                    <th>Fees 2</th>
                                                                    <th>Fees 3</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1;  ;for ($i=0; $i < 30  ; $i++) { 
                                                                    $r1 = rand(111,999);
                                                                    $r2 = rand(111,999);
                                                                    $r3 = rand(111,999);
                                                                    ?>
                                                                    <tr>
                                                                    <td>Student <?php echo $a++?></td>
                                                                    <td>Computer Science</td>
                                                                    <td>student@gmail.com</td>
                                                                    <td class="<?php if($r1 > 300){ echo "bg-success"; }else{ echo "bg-warning";}?>"><?php if($r1 > 300){ echo "fully paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td class="<?php if($r2 > 300){ echo "bg-success"; }else{ echo "bg-warning";}?>"><?php if($r2 > 300){ echo "fully paid"; }else{ echo "Unpaid";}?></td>
                                                                    <td class="<?php if($r3 > 300){ echo "bg-success"; }else{ echo "bg-warning";}?>"><?php if($r3 > 300){ echo "fully paid"; }else{ echo "Unpaid";}?></td>
                                                                    
                                                                     </tr> 
                                                                <?php }?>
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Students</th>
                                                                    <th>Department</th>
                                                                    <th>Email</th>
                                                                    <th>Fees 1</th>
                                                                    <th>Fees 2</th>
                                                                    <th>Fees 3</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>



                                                <div class="modal fade " id="Announcement" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="AnnouncementLabel">Announcement</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <table id="example2" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Announcement</th>
                                                                    <th>Created By</th>
                                                                    <th>Action</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1; for ($i=0; $i < 15 ; $i++) {  ?>
                                                                    <tr>
                                                                    <td>Announcement Title  <?php echo $a++?></td>
                                                                    <td>Created by name<?php echo $b++?></td>
                                                                    <td><a href="" class="p-1 btn-primary">view</a></td>
                                                                    </tr> 
                                                                <?php }?>
                                                               
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Teachers Name</th>
                                                                    <th>Department</th>
                                                                    <th>Action</th>
                                                                   </tr>
                                                            </tfoot>
                                                        </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>


                                                <div class="modal fade " id="members" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="AnnouncementLabel">Members</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <table id="example33" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Members</th>
                                                                    <th>Added By</th>
                                                                    <th>Action</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1; for ($i=0; $i < 15 ; $i++) {  ?>
                                                                    <tr>
                                                                    <td>Name <?php echo $a++?></td>
                                                                    <td>Added by name<?php echo $b++?></td>
                                                                    <td><a href="" class="p-1 btn-primary">view</a></td>
                                                                    </tr> 
                                                                <?php }?>
                                                               
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Members</th>
                                                                    <th>Added By</th>
                                                                    <th>Action</th>
                                                                   </tr>
                                                            </tfoot>
                                                        </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>



                                                <div class="modal fade " id="add" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="addLabel">Assign Officers</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label for="">Position</label>
                                                                <select name="" id="" class="form-control">
                                                                    <?php for ($i=0; $i < 10; $i++) { ?>
                                                                        <option value="">position <?php echo $i?></option>
                                                                   <?php }?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="">Name</label>
                                                                <select name="" id="" class="form-control">
                                                                    <?php for ($i=0; $i < 10; $i++) { ?>
                                                                        <option value="">Name <?php echo $i?></option>
                                                                   <?php }?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-3"> <br><br>
                                                                <p class="p-1 btn-primary" onclick="showSwalDialog()">Assign officer</p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>



                                                <div class="modal fade " id="block" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="blockLabel">Block User</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <table id="example4" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>User Name</th>
                                                                    <th>Reason</th>
                                                                    <th>Block By</th>
                                                                    <th>Action</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1; for ($i=0; $i < 15 ; $i++) {  ?>
                                                                    <tr>
                                                                    <td>Name <?php echo $a++?></td>
                                                                    <td>Reason <?php echo $a++?></td>
                                                                    <td>Block by name<?php echo $b++?></td>
                                                                    <td><a href="" class="p-1 btn-primary">view</a></td>
                                                                    </tr> 
                                                                <?php }?>
                                                               
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>User Name</th>
                                                                    <th>Reason</th>
                                                                    <th>Block By</th>
                                                                    <th>Action</th>
                                                                   </tr>
                                                            </tfoot>
                                                        </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>



                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20" data-toggle="modal" data-target="#blog">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-pencil-square-o  f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo rand(111,999)?></h5>
                                                                        <p class="text-muted m-b-0">Blogs</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20" data-toggle="modal" data-target="#Announcement">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-bullhorn f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo rand(111,999)?></h5>
                                                                        <p class="text-muted m-b-0">announcement</p>
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
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20" data-toggle="modal" data-target="#fees">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                    <i class="fi fi-rr-chat-arrow-grow f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo rand(111,999)?></h5>
                                                                        <p class="text-muted m-b-0">Fees</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20" data-toggle="modal" data-target="#block">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                    <i class="fa fa-low-vision m-r-15 f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo rand(111,999)?></h5>
                                                                        <p class="text-muted m-b-0">Block Users</p>
                                                                    </div>
                                                                </div>
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
                                                        <h5>Officer's Logs</h5>
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
                                                            <table class="table table-hover m-b-0 without-header">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Shirley Hoe</h6>
                                                                                    <p class="text-muted m-b-0">President</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">Delete Comments</i></h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>James Alexander</h6>
                                                                                    <p class="text-muted m-b-0">Vice President</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">Add Blogs</h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Shirley Hoe</h6>
                                                                                    <p class="text-muted m-b-0">Secretary</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">Add Blogs</h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Nick Xander</h6>
                                                                                    <p class="text-muted m-b-0">Secretary</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">Add Comments</h6>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
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
                                                                <h6 class="m-b-0">Best Blog Public engagement</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>Blog <?php echo rand(11,99)?></h4>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Organizational Public engagement</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i><?php echo rand(11,99)?></h4>
                                                                <p class="m-b-0"><?php echo rand(11,40)?>% From Yesterday</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Organizational Public Event posts</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i><?php echo rand(11,99)?></h4>
                                                                <p class="m-b-0"><?php echo rand(11,40)?>% From Yesterday</p>
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
    new DataTable('#example1');
    new DataTable('#example2');
    new DataTable('#example3');
    new DataTable('#example4');
    new DataTable('#example33');
    new DataTable('#example44');
    </script>
    <?php include "footer.php"?>
</body>

</html>
