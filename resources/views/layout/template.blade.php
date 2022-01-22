<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CRUD</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('personal/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('personal/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('personal/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1>Super Model</h1>
      <h2>{{__("The best")}} <span>{{__("modeling agency")}}</span></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- Template Main JS File -->
  <script src="{{asset('personal/assets/js/main.js')}}"></script>

</body>

</html>