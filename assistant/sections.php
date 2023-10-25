<!DOCTYPE html>
<html lang="en">


<?php include "head.php"; $main = 0 ; $sub= 0;?>

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
                                            <h5 class="m-b-10">Teachers Pannels</h5>
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
                                            <div class="col-xl-12 col-md-12">
                                            
                                                <div class="card">
                                                    <div class="card-header">
                                                    Sections / <a  class="btn"  data-toggle="modal" data-target="#staticBackdrop" >Add Section</a>
                                                    </div>
                                                    <div class="card-body">
                                                    <table id="example" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Section Name</th>
                                                                    <th>Department</th>
                                                                    <th>Advisory</th>
                                                                    <th>email</th>
                                                                    <th>Action</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1; for ($i=0; $i < 25 ; $i++) {  ?>
                                                                    <tr>
                                                                    <td>Section <?php echo $a++?></td>
                                                                    <td><?php if(rand(1,3) == 1){ echo "CS Department";}elseif(rand(1,3) == 2){ echo "IT Department";}else{ echo "Associate in Technology";}?></td>
                                                                    <td>Advisory <?php echo $b++?></td>
                                                                    <td>teacher<?php echo $c++?>@gmail.com</td>
                                                                    <td> <i class="fi fi-rr-trash-xmark text-danger" onclick="deletes()" style="font-size: 20px;"></i> </td>
                                                                </tr> 
                                                                <?php }?>
                                                               
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Section Name</th>
                                                                    <th>Department</th>
                                                                    <th>Advisory</th>
                                                                    <th>email</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button trigger modal -->

                                    <div class="modal fade " id="view" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewLabel">Account Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-4"><img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"></div>
                                                
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label for="">First Name</label>
                                                            <input type="text" class="form-control" name="" id="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">Last Name</label>
                                                            <input type="text" class="form-control" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Age</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Contact</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="">Email</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <p type="button" class="btn btn-secondary" data-dismiss="modal">Close</p>
                                             </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Add New Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="">Section Name</label>
                                                    <input type="text" name="" class="form-control" id="">
                                                </div>
                                                <div class="col-sm-6">
                                                <label for="">Advisory</label>
                                                    <select name="" class="form-control" id="">
                                                        <?php $az = 1; $bz = 1; $cz = 1;for ($i=0; $i < rand(10,20); $i++) { ?>
                                                            <option value="">Teacher <?php echo $az++?></option>
                                                       <?php }?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12">
                                                <label for="">Department</label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">BS Computer Science</option>
                                                        <option value="">BS Information Technology</option>
                                                        <option value="">Associate In Technology</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-sm-6 mt-2">
                                                    <p class="btn btn-primary" onclick="showSwalDialog()">submit</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             </div>
                                        </div>
                                    </div>
                                    </div>
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
