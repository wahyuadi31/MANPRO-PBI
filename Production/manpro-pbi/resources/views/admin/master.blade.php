<html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard Admin</title>
<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href={{asset('css/styles.css')}}>
<link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
</head>

<body>
<div id="wrapper">

      <!-- Sidebar -->
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
        <br/>
              <li class="sidebar-brand">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="font-size:20px">
            <span class="glyphicon glyphicon-off" aria-hidden="true"> Hi,userAdmin</span>

          </a>
              </li>
      <br/><br/><br/>
              <li>
                  <a href="Dashboard_Article.php">ARTICLE</a>
              </li>
              <li>
                  <a href="Dashboard_Publish.php">PUBLISH</a>
              </li>
              <li>
                  <a href="Dashboard_User.php">USER</a>
              </li>
      <br/><br/>
      <li>
          <a href="#">LOG OUT</a>
      </li>
          </ul>
      </div>
      <!-- /#sidebar-wrapper -->

  <!-- Header -->
  </br>

  <!-- Page Content -->
      @yield('content')
      <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


<!-- jQuery -->
<script src={{asset('js/jquery.js')}}></script>

<!-- Bootstrap Core JavaScript -->
<script src={{asset('js/bootstrap.min.js')}}></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>

</body>
</html>
