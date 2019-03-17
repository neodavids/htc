
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hi-Tech Dashboard</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="../css/dash.css">

</head>

<body>
<nav class="black">
    <div class="container">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img src="../img/logo.svg" width=250 alt="logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
    </div>
  </nav>

  <a href="#" data-target="slide-out" class="sidenav-trigger btn black"><i class="material-icons">menu</i></a>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="../img/headercar3.jpg" style="width:100%">
      </div>

      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
      <br><br><br>
    </div></li>
    <li><a href="/cars/create"><i class="material-icons">add</i>Upload</a></li>
    <li><a href="/cars"><i class="material-icons">mode_edit</i>Edit</a></li>
    <li><a href="#!"><i class="material-icons">visibility</i>View Cars</a></li>
    
    <li><div class="divider"></div></li>
    <li><a class="subheader">View List</a></li>
    <li><a href="#!"><i class="material-icons">power_settings_new</i>Logout</a></li>
  </ul>

  <div class="container">
 
  @yield('content')

   
  </div>
  
</body>
<script>
 $(document).ready(function(){
    $('.sidenav').sidenav();
    $('input#input_text, textarea#textarea2').characterCounter();
    $('select').formSelect();
  });
</script>
</html>
</html>