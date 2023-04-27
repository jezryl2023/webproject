
<!DOCTYPE html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">  
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"> 
	<title></title>
    </head>
    <body>
    
<div id="wrapper">
   <div class="overlay"></div>

   <?php
        if(isset($_SESSION['name'])) {			
            include("connect.php");					
            $query = "SELECT user_fname FROM user WHERE user_fname = '{$_SESSION['name']}'";

            $result = $conn->query($query);
                            
            $row = $result->fetch_object();
        }
    ?>	

<input type="text" id="fname" class="form-control" name="fname" placeholder="First Name" value="<?php echo $row->user_fname;?>">

    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
            <p value="<?php $row->user_fname;?>"></p></div></div>
       <li><a href="admin.php">Home</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="admin_product.php" >Products</a></li>
       <li><a href="admin_user.php">Users</a></li>
            <!-- <li class="dropdown">
            <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Works <span class="caret"></span></a>
                    <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <div class="dropdown-header">Dropdown heading</div>
                    <li><a href="#pictures">Pictures</a></li>
                    <li><a href="#videos">Videeos</a></li>
                    <li><a href="#books">Books</a></li>
                    <li><a href="#art">Art</a></li>
                    <li><a href="#awards">Awards</a></li>
                    </ul>
            </li> -->
      <li><a href="#services">Orders</a></li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    

    <script>
        $(document).ready(function () {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

            trigger.click(function () {
            hamburger_cross();      
            });

            function hamburger_cross() {

            if (isClosed == true) {          
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {   
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }
        
        $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
        });  
        });
    </script>

</body>
</html>
