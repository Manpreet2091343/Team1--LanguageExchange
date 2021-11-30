<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Language Exchange</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
    <?php  
      if(isset($_SESSION['admin_login_email'])){
    ?>
      <li><a href="view_users.php">Manage Users</a></li>
      <li><a href="register_user.php">Add Users</a></li>
      <?php 
    }
      ?>
    </ul>
    <?php  
      if(!isset($_SESSION['admin_login_email'])){
    ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"> Login</a></li>
    </ul>
  <?php  }else{
    ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a>Welcome - Admin </a></li>
      <li><a href="logout.php"> Logout</a></li>
    </ul>
    <?php
  } ?>
  </div>
</nav>
