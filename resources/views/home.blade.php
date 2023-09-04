<!DOCTYPE html>
<html>
​
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
​<style>
    .header-dark {
        background-image: url(https://www.blackxperience.com/assets/content/blackauto/autonews/renault-and-geely-the-first-common-model-from-20241.jpg);
  background-size:cover;
  padding-bottom:80px;
}

@media (min-width:768px) {
  .header-dark {
    padding-bottom:120px;
  }
}

.header-dark .navbar {
  background:transparent;
  padding-top:0;
  padding-bottom:0;
  color:#fff;
  border-radius:0;
  box-shadow:none;
  border:none;
}

@media (min-width:768px) {
  .header-dark .navbar {
    padding-top:.75rem;
    padding-bottom:.75rem;
  }
}

.header-dark .navbar .navbar-brand {
  font-weight:bold;
  color:inherit;
}

.header-dark .navbar .navbar-brand:hover {
  color:#f0f0f0;
}

.header-dark .navbar .navbar-collapse span {
  margin-top:5px;
}

.header-dark .navbar .navbar-collapse span .login {
  color:#d9d9d9;
  margin-right:.5rem;
  text-decoration:none;
}

.header-dark .navbar .navbar-collapse span .login:hover {
  color:#fff;
}

.header-dark .navbar .navbar-toggler {
  border-color:#747474;
}

.header-dark .navbar .navbar-toggler:hover, .header-dark .navbar-toggler:focus {
  background:none;
}

.header-dark .navbar .navbar-toggler {
  color:#eee;
}

.header-dark .navbar .navbar-collapse, .header-dark .navbar .form-inline {
  border-color:#636363;
}

@media (min-width: 992px) {
  .header-dark .navbar.navbar .navbar-nav .nav-link {
    padding-left:1.2rem;
    padding-right:1.2rem;
  }
}

.header-dark .navbar.navbar-dark .navbar-nav .nav-link {
  color:#d9d9d9;
}

.header-dark .navbar.navbar-dark .navbar-nav .nav-link:focus, .header-dark .navbar.navbar-dark .navbar-nav .nav-link:hover {
  color:#fcfeff !important;
  background-color:transparent;
}

.header-dark .navbar .navbar-nav > li > .dropdown-menu {
  margin-top:-5px;
  box-shadow:0 4px 8px rgba(0,0,0,.1);
  background-color:#fff;
  border-radius:2px;
}

.header-dark .navbar .dropdown-menu .dropdown-item:focus, .header-dark .navbar .dropdown-menu .dropdown-item {
  line-height:2;
  font-size:14px;
  color:#37434d;
}

.header-dark .navbar .dropdown-menu .dropdown-item:focus, .header-dark .navbar .dropdown-menu .drodown-item:hover {
  background:#ebeff1;
}

.header-dark .navbar .action-button, .header-dark .navbar .action-button:active {
  background:#208f8f;
  border-radius:20px;
  font-size:inherit;
  color:#fff;
  box-shadow:none;
  border:none;
  text-shadow:none;
  padding:.5rem .8rem;
  transition:background-color 0.25s;
}

.header-dark .navbar .action-button:hover {
  background:#269d9d;
}

.header-dark .navbar .form-inline label {
  color:#ccc;
}

.header-dark .navbar .form-inline .search-field {
  display:inline-block;
  width:80%;
  background:none;
  border:none;
  border-bottom:1px solid transparent;
  border-radius:0;
  color:#ccc;
  box-shadow:none;
  color:inherit;
  transition:border-bottom-color 0.3s;
}

.header-dark .navbar .form-inline .search-field:focus {
  border-bottom:1px solid #ccc;
}

.header-dark .hero {
  margin-top:60px;
}

@media (min-width:768px) {
  .header-dark .hero {
    margin-top:20px;
  }
}

.header-dark .hero h1 {
  color:#fff;
  font-family:'Bitter', serif;
  font-size:40px;
  margin-top:200px;
  margin-bottom:80px;
}

@media (min-width:768px) {
  .header-dark .hero h1 {
    margin-bottom:350px;
    line-height:2;
  }
}

.header-dark .hero .embed-responsive iframe {
  background-color:#666;
}
.nav.navbar-nav {
        display: flex;
        justify-content: space-between;
    }

    .nav.navbar-nav .nav-item {
        margin-right: 10px; /* Atur jarak horizontal antara link */
    }

    body {
  background-color:  #eee;
}
.title {
 
    margin-bottom: 50px;
    text-transform: uppercase;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
     
}
.card {
    font-size: 1em;
    overflow: hidden;
    padding: 5;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin-top:20px;
}

.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators .active {
    background-color: white;
    max-width: 12px;
    margin: 0 3px;
    height: 12px;
}
.carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
 lex-direction: column;
}

.btn {
  margin-top: auto;
}
</style>
<body>
    <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#"><h1>RenCar</h1></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link btn btn-light action-button" href="#">Beranda</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link btn btn-light action-button" href="#">Car</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link btn btn-light action-button" href="#">Pengguna</a></li> 
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                        </form><span class="navbar-text"><a href="#" class="login">Log In</a></span><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">PINJAM/SEWA MOBIL YANG KAMU INGINKAN</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <div>
    <div class="container py-3">
  <div class="title h1 text-center">About Us</div>
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h4 class="card-title">RenCar</h4>
          <p class="card-text">
            RenCar menyediakan berbagai macam mobil dari berbagai macam tipe merk dan ukuran. Kami menyediakan pelayanan jasa rental mobil dengan menyediakan berbagai macam mobil yng dapat di pilih oleh pelanggan menyesuaikan dnegan kebutuhan pengguna.
          </p>
          <p class="card-text">Berbagai macam mobil yang kami sediakan unutk di sewa dapat menyesuaikan kebutuhan para penyewa. </p>
          <br>
        </div>
      </div>
      <!-- Carousel start -->
      <div class="col-md-5">
        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselTest" data-slide-to="1"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
            </div>
            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
        </div>
      </div>
      <!-- End of carousel -->
    </div>
  </div>
  <!-- End of card -->

</div>
  </div>
 <br>
<br>
    </div>

    <div>
    <section style="background-color: #eee;">
  <div class="text-center container py-5">
    <h4 class="mt-4 mb-5"><strong>Sewa Sekarang!</strong></h4>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/09/03/FotoJet-7-3724734959.jpg"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Bugati Chiron</h5>
            </a>
            <a href="" class="text-reset">
              <p>Tipe : Hyper Car</p>
            </a>
            <h6 class="mb-3">Rp.600.000/ 1 minggu</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/09/03/FotoJet-7-3724734959.jpg"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                 
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Bugati Chiron</h5>
            </a>
            <a href="" class="text-reset">
              <p>Tipe : Hyper Car</p>
            </a>
            <h6 class="mb-3">Rp.600.0000/ 1 minggu</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/09/03/FotoJet-7-3724734959.jpg"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Bugati Chiron</h5>
            </a>
            <a href="" class="text-reset">
              <p>Tipe : Hyper Car</p>
            </a>
               <h6 class="mb-3">Rp.600.0000/ 1 minggu</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/09/03/FotoJet-7-3724734959.jpg"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Bugati Chiron</h5>
            </a>
            <a href="" class="text-reset">
              <p>Tipe : Hyper Car</p>
            </a>
               <h6 class="mb-3">Rp.600.0000/ 1 minggu</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/09/03/FotoJet-7-3724734959.jpg"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100"></div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Bugati Chiron</h5>
            </a>
            <a href="" class="text-reset">
              <p>Tipe : Hyper Car</p>
            </a>
            <h6 class="mb-3">Rp.600.0000/ 1 minggu</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/09/03/FotoJet-7-3724734959.jpg"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Bugati Chiron</h5>
            </a>
            <a href="" class="text-reset">
              <p>Tipe : Hyper Car</p>
            </a>
               <h6 class="mb-3">Rp.600.0000/ 1 minggu</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>

    <section>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 class="mb-4">Testimoni</h3>
      <p class="mb-4 pb-2 mb-md-5 pb-md-0">
        Penilaian-penilaian para costumer
      </p>
    </div>
  </div>

  <div class="row text-center d-flex align-items-stretch">
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #9d789b;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">Maria Smantha</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
            consectetur adipisicing elit.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #7a81a8;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">Lisa Cudrow</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
            repudi mollitia architecto.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #6d5b98;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">John Smith</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
            aliquam repellat rem unde ducimus.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>



<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">RenCar.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
​
</html>
