@extends('layout/register')

@section('kontent')
<body class="">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
      <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="/layout/home">
          PRESENSI
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/layout/home">
                <i class="fa fa-chart-pie opacity-6  me-1"></i>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="/sesi/register">
                <i class="fas fa-user-circle opacity-6  me-1"></i>
                Sign Up
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="/sesi">
                <i class="fas fa-key opacity-6  me-1"></i>
                Sign In
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0">
      <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 text-center mx-auto">
                <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                <p class="text-lead text-white">Gunakan formulir luar biasa ini untuk masuk atau membuat akun baru secara gratis dan melakukan presensi.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
              <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                  <h3>Register </h3>
                </div>
                <div class="card-body">
                  <form role="form text-left" action="/sesi/create" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label" style="color:gray">Nama</label>
                      <input type="name" value="{{ Session::get('name') }}" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label" style="color:gray">Email</label>
                      <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label" style="color: gray">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Register</button>
                    </div>
                    <p class="text-sm mt-3 mb-0">Already have an account? <a href="/sesi" class="text-dark font-weight-bolder">Login</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
      <footer class="footer py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mb-4 mx-auto text-center">
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Company
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                About Us
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Team
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Products
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Blog
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                Pricing
              </a>
            </div>
            <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-instagram"></span>
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-github"></span>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
              <p class="mb-0 text-secondary">
                Copyright © <script>
                  document.write(new Date().getFullYear())
                </script> Soft by Creative Tim.
              </p>
            </div>
          </div>
        </div>
      </footer>







{{-- <body>
    <div class="w-50 center border rounded px-3 py-3 mx-auto" style="background-color: transparent">
        <h1 style="color: gray;text-align:center">Register</h1>
        <form action="/sesi/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" style="color:gray">Nama</label>
                <input type="name" value="{{ Session::get('name') }}" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="color:gray">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="color: gray">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 grid">
                <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</body> --}}
@endsection
