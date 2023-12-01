<header>
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                <?php
                $email = $_SESSION['login'];
                $sql = "SELECT FullName FROM tblusers WHERE EmailId=:email ";
                $query = $dbh->prepare($sql);
                $query->bindParam(':email', $email, PDO::PARAM_STR);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                if ($query->rowCount() > 0) {
                  foreach ($results as $result) {

                    echo htmlentities($result->FullName);
                  }
                } ?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
                <?php if ($_SESSION['login']) { ?>
                  <li><a href="profile.php">Profile Settings</a></li>
                  <li><a href="update-password.php">Update Password</a></li>
                  <li><a href="logout.php">Sign Out</a></li>
                <?php } else { ?>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Update Password</a></li>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div class="header_info">
            <?php if (strlen($_SESSION['login']) == 0) {
            ?>
              <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
            <?php } else {
              echo "Welcome To Farm Management";
            } ?>
          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
        <li><a style="background-color:tomato;color:white;font-size:3rem;">AG CROPS</a> </li>
          <li><a href="index.php">Home</a> </li>
          <li><a href="page.php?type=aboutus">About Us</a></li>
          <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
              <ul class="dropdown-menu">
                <?php if ($_SESSION['login']) { ?>
                  <li><a href="rice.php">Rice</a></li>
                  <li><a href="front-veg.php">Vegetables</a></li>
                  <li><a href="front-fruit.php">Fruits</a></li>
                <?php } else { ?>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Rice</a></li>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Vegetables</a></li>
                  <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Fruits</a></li>
                <?php } ?>
              </ul>
            </li>
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->
  <div class="fixed-bottom p-3" style="position: fixed; right: 16px; bottom: 16px;">
    <a href="#" class="btn btn-primary rounded-circle" data-toggle="tooltip" data-placement="top" title="Chat">
      <i class="fa fa-comments"></i>
    </a>
  </div>
</header>