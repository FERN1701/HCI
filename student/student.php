<!DOCTYPE html>
<html lang="en">


<?php include "head.php"; $main = 2 ; $sub= 4;?>

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
                                            <h5 class="m-b-10">Students Pannels</h5>
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
                                                        Students / <a  class="btn"  data-toggle="modal" data-target="#staticBackdrop" >Add Students</a>
                                                    </div>
                                                    <div class="card-body">
                                                    <table id="example" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Student Name</th>
                                                                    <th>email</th>
                                                                    <th>Action</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $a = 1; $b = 1; $c = 1; for ($i=0; $i < 25 ; $i++) {  ?>
                                                                    <tr>
                                                                    <td>student <?php echo $a++?></td>
                                                                    <td>student<?php echo $c++?>@gmail.com</td>
                                                                    <td><a href="" data-toggle="modal" data-target="#view"><i class="fi fi-rr-eye text-secondary" style="font-size: 20px;"></i></a> <i class="fi fi-rr-trash-xmark text-danger" onclick="deletes()" style="font-size: 20px;"></i>  </td>
                                                                </tr> 
                                                                <?php }?>
                                                               
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>Student Name</th>
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


                                    <!-- Modal -->
                                    <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Add Students</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="">First Name</label>
                                                    <input type="text" name="" class="form-control" id="">
                                                </div>
                                                <div class="col-sm-6">
                                                <label for="">Last Name</label>
                                                    <input type="text" name="" class="form-control" id="">
                                                </div>
                                                <div class="col-sm-12">
                                                <label for="">Email</label>
                                                    <input type="text" name="" class="form-control" id="">
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                <label for="">Password</label>
                                                    <input type="text" name="" class="form-control" id="">
                                                </div>
                                                <div class="col-sm-6">
                                                <label for="">Confirm Password</label>
                                                    <input type="text" name="" class="form-control" id="">
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
                                                    <label for="">Contact</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Email</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Section</label>
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