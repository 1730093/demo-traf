@extends('layouts.app')

@section('content')
<style>
    .header_bg {
     background: url({{ asset('imagenes/banner.png') }});
     background-repeat: no-repeat;
     background-size: cover;
     background-size: cover;
     background-position: center;
    }

    .header {
        background: transparent;
        width: 100%;
        padding: 40px 40px 40px 40px;
    }
    



.banner_main {
     background: transparent;
     background-size: 100% 100%;
     background-repeat: no-repeat;
     padding-bottom: 90px;
}

.text-bg {
     max-width: 426px;
     float: right;
     width: 100%;
}

.text-bg h1 {
     color: #1f1716;
     font-size: 51px;
     line-height: 70px;
     text-transform: uppercase;
     padding-bottom: 25px;
     font-weight: bold;
     padding-top: 30px;
}

.text-bg span {
     color: #490B96;
     font-size: 60px;
     line-height: 77px;
     font-weight: bold;
}

.text-bg p {
     color: #1f1716;
     font-size: 17px;
     line-height: 28px;
     padding: 40px 0;
}

.text-bg a {
     font-size: 16px;
     background-color: #1f1716;
     color: #fff;
     padding: 10px 0px;
     width: 100%;
     max-width: 190px;
     text-align: center;
     display: inline-block;
     text-transform: uppercase;
}

.text-bg a:hover {
     background-color: #41c365;
     color: #fff;
}

.text-img figure {
     margin: 0px;
}

.text-img figure img {
     width: 100%;
}

.titlepage {
     text-align: center;
     padding-bottom: 60px;
}

.titlepage h2 {
     font-size: 45px;
     color: #fff;
     line-height: 40px;
     font-weight: bold;
     padding: 0;
}



}

</style>

<header>
    <!-- header inner -->
    <div class="header_bg">
       <div class="header">
          <div class="container">
             <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                   <div class="full">
                      <div class="center-desk">
                         <div class="logo">
                         </div>
                      </div>
                   </div>
                </div>

             </div>
          </div>
       </div>
       <!-- end header inner -->
       <!-- end header -->
       <!-- banner -->
       <section class="banner_main">
          <div class="container-fluid">
             <div class="row d_flex">
                <div class="col-md-5">
                   <div class="text-bg">
                      <span>Gestor de actividades <br></span>
                      <h1>landing pages</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                   </div>
                </div>
             </div>
          </div>
       </section>
    </div>
 </header>
@endsection