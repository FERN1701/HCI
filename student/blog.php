<!DOCTYPE html>
<html lang="en">


<?php include "head.php"; $main = 5; $sub= 0;?>

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
                                            <p class="m-b-0"><?php echo $title?> Blog Pannel</p>
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
                                            
                                            <div class="row">
                                                    <?php for ($i=0; $i < rand(1,9); $i++) { ?>
                                                      
                                                        <div class="col-sm-3">
                                                        <div class="card" style="width: 18rem;">
                                                                <img class="card-img-top" src="../images/Tech.jpg" alt="Card image cap" width="30px">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Blog Title </h5>
                                                                    <p class="card-text">Blog highlight Description</p>
                                                                    <a href="blog-description.php" class="btn btn-primary">View Blog</a>
                                                                </div>
                                                                </div>
                                                        </div>
                                                      
                                                    <?php }?>
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
                                            <h5 class="modal-title" id="staticBackdropLabel">Add Blogs</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="">Blog Title</label>
                                                    <input type="text" name="" class="form-control" id="">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="">Blog Description</label>
                                                    <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             </div>
                                        </div>
                                    </div>
                                    </div>


                                    <div class="modal fade " id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editLabel">Edit Blogs</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="">Blog Title</label>
                                                    <input type="text" name="" class="form-control" id="" value="Title Title Title Title Title Title ">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="">Blog Description</label>
                                                    <textarea name="" class="form-control" id="" cols="30" rows="10">Description Description Description </textarea>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <p onclick="showSwalDialog()" class="btn btn-primary">Submit</p>
                                            <p type="button" class="btn btn-secondary" data-dismiss="modal">Close</p>
                                             </div>
                                        </div>
                                    </div>
                                    </div>


                                    <div class="modal fade " id="view" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewLabel">View Blogs</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="">Blog Title</label>
                                                    <input type="text" name="" class="form-control" id="" value="Title Title Title Title Title Title ">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="">Blog Description</label>
                                                    <textarea name="" class="form-control" id="" cols="30" rows="10">Description Description Description </textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="">Created By</label>
                                                    <input type="text" name="" class="form-control" id="" value="First name Lastr name" readonly>
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
