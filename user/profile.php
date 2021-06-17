<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PHP FILES -->
    <?php include '../DBHelper.php';?>
    <?php include '../functions.php';?>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="icon" href="../images/icon.png">
    <!-- site metas -->
    <title>Bossing's</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- additional -->
    <link rel="stylesheet" href="../css/additional.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout blog_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="../images/loading.gif" alt="#" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li >
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="../about.php">About</a>
                    </li>
                    <li>
                        <a href="../recipe.php">Recipe</a>
                    </li>
                    <li>
                        <a href="../blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contact Us</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="../index.php"><span id="headTitle"><img src="../images/try.png" alt="#" />Bossing's</span></a> 
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <?php
                                echo'<li class="button_user"><a class="button" style="border:none;" href="order.php">Order</a></li>
                                <li class="button_user"><a class="button" style="border:none;" href="mybag.php">My Bag</a></li>
                                <li class="button_user"><a class="button active" style="border:none;" href="#">Profile</a></li>
                                <li class="button_user"><a class="button" style="border:none;" href="../Logout.php">Logout</a></li>';
                                ?>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="../images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
<!-- content -->

<div class="row" style="padding-top: 10rem;overflow-x:hidden;background-image: url('../images/bg.jpg');">
  <div class="col-sm-3"style="text-align:center;margin:5rem auto;padding:0">
  <div class="rounded" style="border:solid 3px #f5f5f5">
    <div class="profileSide">  
        <table class="table borderless"id="tableProf" style="margin:0 auto;border:none;width:auto;padding:0;table-layout: auto;">
            <thead class="tableProf">
                <tr>
                    <br><br>
                    <h1><b>User Profile</b></h1>
                </tr>
            </thead>
            <tbody class="tableProf">
                <?php $data = getUserInfo($db)?>
                <tr style="border:none">
                <th scope="row">Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <td><?php echo $data['Username'];?></td>
                </tr>
                <tr>
                <th scope="row" >Firstname&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <td style="text-align:left"><?php echo $data['First_Name'];?></td>
                </tr>
                <tr>
                <th scope="row">Lastname&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <td><?php echo $data['Last_Name'];?></td>
                </tr>
                <tr>
                <th scope="row">Contact&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <td><?php echo $data['Phone_Number'];?></td>
                </tr>
                <tr style="height:100px">
                    <td colspan="2" style="margin:3rem 0;text-align:center;vertical-align:middle"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editProfileModal">Edit</button></td>
                </tr>
            </tbody>
        </table>    
    </div>
    </div>
</div>
    <div class="col-12 col-md-6" style="text-align:center;margin:0 10rem 0 0;border:solid 1 px;padding:0">
        <table class="table table-dark">
            <h1><b>Order History</b></h1>
            <thead>
                <tr>
                <th scope="col">Order_ID</th>
                <th scope="col">Date & Time Ordered</th>
                <th scope="col">Total Price</th>
                <th></th>
                </tr>
            </thead>
            <tbody class="ahover">
                <?php
                displayOrders($db);
                ?>
            </tbody>
        </table>
    </div>
</div>
    <input type="hidden" name="id" id="ordsID" style="display:none">
<!-- end content -->
<!-- MODAL -->
<!-- display order products -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="editModal"  style="text-align:center" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="margin: 0 auto;padding:0;">
        <div class="title" style="padding-bottom:0;text-align:center">
            <h2>ORDERS</h2>
        </div>
      </div>
      <div class="modal-body" id="modalBody" style="margin: 0 auto;border:none;">
      </div>
      <div class="modal-footer" style="margin: 0 auto;border:none;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- EDIT PROFILE -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editModal"  style="text-align:center" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="margin: 0 auto;padding:0;">
        <div class="title" style="padding-bottom:0;text-align:center">
            <h2>Almost Done!</h2>
            <h5>You just need to fill up this information!</h5>
        </div>
      </div>
    <form method="post">
        <?php $data=getUserInfo($db);?>
      <div class="modal-body" style="margin: 0 auto;border:none;">
        <div class="form-group" >
          <input type="text" class="form-control" id="exampleInputEmail1" name="uname" aria-describedby="Username" placeholder="Username" value="<?php echo $data['Username'];?>" style="border:2px #212020 solid;" required>
        </div>
        <div class="form-group" >
          <input type="text" class="form-control" id="contact" name="fname" aria-describedby="Username" placeholder="Firstname" value="<?php echo $data['First_Name'];?>" style="border:2px #212020 solid;" required>
        </div>
        <div class="form-group" >
          <input type="text" class="form-control" id="exampleInputEmail1" name="lname" aria-describedby="Username" placeholder="Lastname" value="<?php echo $data['Last_Name'];?>" style="border:2px #212020 solid;" required>
        </div>
        <div class="form-group" >
          <input type="text" class="form-control" id="exampleInputEmail1" name="contact" aria-describedby="Username" placeholder="Contact" value="<?php echo $data['Phone_Number'];?>" style="border:2px #212020 solid;" required>
        </div>
      </div>
      <div class="modal-footer" style="margin: 0 auto;border:none;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-dark" name="updateProfile">Confirm</button>
    </form>
      </div>
    </div>
  </div>
</div>
    <!-- footer -->
<script>
    function products(prod){
        document.getElementById("modalBody").innerHTML=prod;
        // document.getElementById("getOrder").click(); kuwang
    }
    </script>
    <fooetr>
        <div class="footer">
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-md-12">
                        <div class="footer_logo" style="padding-bottom:60px;margin:0; padding-top:0">
                            <a class="logo" href="index.php"><span id="headTitle"><img src="../images/try1.png" alt="#" />Bossing's</span></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="lik">
                            <li > <a href="../index.php">Home</a></li>
                            <li> <a href="../about.php">About</a></li>
                            <li> <a href="../recipe.php">Recipe</a></li>
                            <li> <a href="../blog.php">Blog</a></li>
                            <li> <a href="../contact.php">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="new">
                            <h3>Newsletter</h3>
                            <form class="newtetter">
                                <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                <button class="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright © 2020, Bossing's Restaurant. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </fooetr>
    <!-- end footer -->
    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/additional.js"></script>
     <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="../js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
   //AVOID RESUBMISSION FORM
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>