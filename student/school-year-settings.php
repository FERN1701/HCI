<!DOCTYPE html>
<html lang="en">


<?php include "head.php";?>
<style>
#heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #673AB7;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #673AB7;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #311B92
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #673AB7;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #673AB7;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: gray;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #673AB7
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 50%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f030"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #673AB7
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #673AB7
}

.fit-image {
    width: 100%;
    object-fit: cover
}</style>
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
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
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
                                                    
                                                    <div class="card-body">


                                                    <div class="container-fluid">
                                                            <div class="row justify-content-center">
                                                                <div class="col-11 col-sm-10 col-md-12 col-lg-12 col-xl-12 text-center p-0 mt-3 mb-2">
                                                                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                                                        <h2 id="heading">Setting Up School Year </h2>
                                                                        <p>Fill all form field to go to next step</p>
                                                                        <form id="msform">
                                                                            <!-- progressbar -->
                                                                            <center>
                                                                            <ul id="progressbar">
                                                                                <li class="active" id="personal"><strong>Tranfer Accounts</strong></li>
                                                                                <li id="confirm"><strong>Success</strong></li>
                                                                            </ul></center>
                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div> <br> <!-- fieldsets -->
                                                                            
                                                                            <fieldset>
                                                                                <div class="form-card">
                                                                                    <div class="row">
                                                                                        <div class="col-7">
                                                                                            <h2 class="fs-title">List of Advisory Student from past School year</h2>
                                                                                        </div>
                                                                                        <div class="col-5">
                                                                                            <h2 class="steps">Step 1 - 2</h2>
                                                                                        </div>
                                                                                    </div> 
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12">
                                                                                        <table id="example" class="display" style="width:100%">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    
                                                                                                    <th>Select </th>
                                                                                                    <th>Student Name</th>
                                                                                                    <th>Email</th>
                                                                                                    <th>Status</th>
                                                                                                
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php $a = 1; $b = 1; $c = 1; for ($i=0; $i < 25 ; $i++) {  ?>
                                                                                                    <tr>
                                                                                                    <td><input type="checkbox" name="" id=""></td>
                                                                                                    <td>Student <?php echo $a++?></td>
                                                                                                    <td>student<?php echo $c++?>@gmail.com</td>
                                                                                                    <td><?php if(rand(1,3) == 1){ echo "Validated";}elseif(rand(1,3) == 2){ echo "Validated";}else{ echo "Not Verified";}?></td>
                                                                                                    </tr> 
                                                                                                <?php }?>
                                                                                            
                                                                                                
                                                                                            </tbody>
                                                                                            <tfoot>
                                                                                                <tr>
                                                                                                <th>Select</th>
                                                                                                <th>Student Name</th>
                                                                                                    <th>Email</th>
                                                                                                    <th>Status</th>
                                                                                                    
                                                                                                </tr>
                                                                                            </tfoot>
                                                                                        </table>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                                
                                                                                </div> <input type="button" name="next" class="next action-button" value="Next" /> 
                                                                            </fieldset>
                                                                            
                                                                            <fieldset>
                                                                                <div class="form-card">
                                                                                    <div class="row">
                                                                                        <div class="col-7">
                                                                                            <h2 class="fs-title">Finish:</h2>
                                                                                        </div>
                                                                                        <div class="col-5">
                                                                                            <h2 class="steps">Step 3 - 3</h2>
                                                                                        </div>
                                                                                    </div> <br><br>
                                                                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                                                                    </div> <br><br>
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-7 text-center">
                                                                                            <h5 class="purple-text text-center">Datas are succefully Transfered</h5>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <a href="past-advisor.php" class="btn btn-primary">Show your past Advisory</a>
                                                                </div>
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
        $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
    </script>
    <script>
    new DataTable('#example');
   </script>
    <?php include "footer.php"?>
</body>

</html>
