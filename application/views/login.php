<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>Login | CI PMS</title>

	  <link rel="stylesheet"  type="image/png" href="<?php echo base_url(); ?>assets/icon.png">
    <!-- Bootstrap core CSS -->
	  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	  <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js">
	  <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/style.css">
    <style>
      html, body{
        height:100%;
        width:100%;
      }
      body{
        display:flex;
        flex-direction:column;
      }
      #main{
        flex-grow: 1;
        flex-shrink: 1;
        margin-bottom: 7em;
        display:flex;
        align-items:center;
        justify-content:center;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li  style="align-self: center;"><a href="./">PMS in PHP using CodeIgniter Framework</a></li>
          </ul>
          
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
    <!--/.nav End -->

    <header id="header">
      <div class="container">
        <div class="col-md-10">
          <h2 class="text-center">
          Medika Inventory Manajemen- Admin Login
          </h2>
        </div>
       </div>
      </div>
    </header>

 
    <!-- /.container -->
   <section id="main">
           <div class="col-lg-4 col-md-4 col-sm-11 col-xs-12">
              <form method="post" class="well" action="<?php echo base_url();?>main/login_validation">
                <div class="form-group">
                  <label for="username">Username</label>
                            <!--<input type="username" class="form-control" id="email">-->
                  <input type="username" name="username" class="form-control"/>
                  <span class="text-danger"><?php echo form_error('username');?></span>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                            <!--<input type="password" class="form-control" id="password">-->
                <!--<input type="password " name="password" id="password" class="form-control"/>-->
                  <input class="form-control" name="password" id="password" type="password"/>
                  <span class="text-danger"><?php echo form_error('password');?></span>
                </div>
                  <!--<button type="submit" class="btn btn-default">Submit</button>-->
                <div class="text-center">
                <button type="submit" name="insert" value="Login" class="btn btn-primary btn-sm rounded-0">Login</button>
                <button type="" name="insert" value="Login" class="btn btn-info btn-sm rounded-0"><a href="<?php echo base_url(); ?>Staff" style="color:white; text-decoration:none;">Staff Login</a></button>
                <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  ?>
                </div>
              </form>
           </div>
   </section>
    
    <!-- /.Footer -->
	<footer id="footer" class="navbar navbar-fixed-bottom">
  <p>&copy; Sistem Penjualan dan Persediaan Apotek CI,  <?php echo date('Y')?>  </p>
	</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
