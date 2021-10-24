<?php

require "config.php";

$dataBT = query("SELECT * FROM buku_tamu");
// var_dump($dataBT);
// die;

?>


<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<b:if cond='data:view.isHomepage'>

	<meta name="description" content="Undangan Pernikahan Nindi &amp; Haerul">
	<meta property="og:title" content="Undangan Pernikahan Nindi &amp; Haerul" />
	<link rel="shortcut icon" href="https://inveet.id/landing/favicon.ico">
	<meta property="og:url" content="https://u-nik.my.id" />
	<meta property="og:description" content="Undangan Pernikahan Nindi &amp; Haerul">
	<meta property="og:image" content="https://undangannikahcitra.000webhostapp.com/assets/images/slider1.jpg">

    </b:if>



	<title>Undangan Pernikahan Nindi &amp; Haerul</title>

<link href="assets/themify-icons.css" rel="stylesheet">
<link href="assets/flaticon.css" rel="stylesheet">
<link rel="stylesheet" href="assets/flaticon_nav.css">

<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link href="assets/font-icon.css" rel="stylesheet">
<!-- <link href="assets/font-icon.css" rel="stylesheet"> -->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://inveet.id/themes/pastel_floral/css/jquery.fancybox.css" rel="stylesheet">
<link href="https://inveet.id/themes/pastel_floral/css/style.css?v=1633771405" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.8.1/css/justifiedGallery.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lightgallery.min.css" integrity="sha512-LeCCaxc1iF2UArsp3NWiOAz1mSLXFXmuiOm2n8gxOSnCXIltE27/NV9yGshWgHSCKNigfDiJUskpRiithdGc3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lg-zoom.min.css" integrity="sha512-SGo05yQXwPFKXE+GtWCn7J4OZQBaQIakZSxQSqUyVWqO0TAv3gaF/Vox1FmG4IyXJWDwu/lXzXqPOnfX1va0+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lg-thumbnail.min.css" integrity="sha512-GRxDpj/bx6/I4y6h2LE5rbGaqRcbTu4dYhaTewlS8Nh9hm/akYprvOTZD7GR+FRCALiKfe8u1gjvWEEGEtoR6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lg-autoplay.min.css" integrity="sha512-LlHSkMTvyRwh1YjzXwk6bxjdt3huGhCyK1vlCC6f7Db/g+2sYXz2YNasyZHnMUgykqPksmD/44DIINhqpWBjig==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
        html {
            scroll-behavior: smooth
        }

        .radio-box {
            display: block
        }

        .radio-box > div {
            border: 2px solid #e9ecef;
            cursor: pointer
        }

        .radio-box input:checked ~ div {
            border-color: #BB9EAB
        }

        .form-group, .form-check {
            padding: 2px !important
        }

        .google-maps {
            position: relative;
            padding-bottom: 75%;
            overflow: hidden
        }

        .google-maps iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important
        }

        .badge-2 {
            display: inline-block;
            padding: .35rem .5rem;
            font-size: 80%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .375rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .badge-circle-2 {
            text-align: center;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0 !important;
            width: 1.25rem;
            height: 1.25rem;
            vertical-align: middle;
            font-size: .75rem;
            font-weight: 600
        }

        ul {
            text-align: left
        }

        .special-invitation {
            color: #fff
        }

        .mobile-bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 10;
            will-change: transform;
            transform: translateZ(0);
            display: flex;
            height: 75px;
            background-color: #EDE9EB;
        }

        .mobile-bottom-nav__item {
            flex-grow: 1;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: rgb(66, 66, 80);
            flex-basis: 33.33333333%;
        }

        mobile-bottom-nav__item:before {
            font-size: 18px;
        }

        a {
            color: #BB9EAB
        }

        a:hover {
            color: #BB9EAB
        }

        .mobile-bottom-nav__item-content {
            display: flex;
            flex-direction: column
        }

        .font-modal {
            font-family: "Josefin Sans", sans-serif
        }

        .alert-light {
            background-color: #F9F9F9;
            border-color: #BB9EAB;
        }

        .alert-heading {
            font-family: "Josefin Sans", sans-serif;
            color: #BB9EAB !important;
        }

        .heading-font {
            font-family: "Pacifico", sans-serif;
            color: #BB9EAB;
            font-size: 3.4375rem;
        }

        .heading-font-type {
            font-family: "Rouge Script", sans-serif;
            color: #BB9EAB;
            font-size: 2rem;
        }

        .heading-font-location {
            font-family: "Pacifico", sans-serif;
            color: #FFFFFF;
            font-size: 3.4375rem;
        }

        .heading-font-couple {
            font-family: "Parisienne", Sans-serif;
        }

        .couple-name {
            font-family: "Sacramento", Sans-serif;
            color: #BB9EAB;
        }

        iframe {
            border: 1px solid;
            border-color: #BB9EAB;
            border-radius: .25rem;
        }
    </style>
</head>
<body id="home">

<div class="page-wrapper">

<div class="preloader">
<div class="inner">
<span class="icon"><i class="fi flaticon-birds-in-love"></i></span>
</div>
</div>


<section class="hero hero-slider-wrapper hero-style-1">
<div class="hero-slider">
<div class="slide">
<img src="./images/slider1.jpg" class="slider-bg">
</div>
</div>
<div class="hero-circle wow fadeIn" data-wow-duration="0.2s" id="hero-circle">
<div class="circle-inner" style="width:100%;">
<div class="text">
<h4>
<i class="small-icon icon icon-tie"></i>
<br>
Save The Date

</h4>
<h2 class="wow fadeIn heading-font-couple" data-wow-delay="0.2s">Nindi <i class="icon icon-heart" style="color:#bea2ae;"></i> Haerul</h2>
<p class="wow fadeIn" data-wow-delay="0.2s">6 November 2021</p>

</div>
</div>
</div>
</section>



<section class="couple-section section-padding flower" id="couple">
<div class="container" data-aos="fade-up" data-aos-duration="2000">
<div class="row">
<div class="col col-xs-12">
<div class="section-title">
<h2 class="heading-font-type">Mempelai</h2>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col col-lg-10 col-lg-offset-1">
<div class="couple">
<div class="groom" data-aos="fade-right" data-aos-duration="2000">
<div class="round-avatar img-holder" style="background-image: url('images/nindi.jpg')"></div>

<div class="mt-5" data-aos="fade-right" data-aos-duration="2000">
<h2 class="couple-name">
<strong>
Nindi Mahira Ilmiyati, S.Hum
</strong>
</h2>
<p>Putri Pertama dari Bpk. H. Sondi Muhlis & Ibu Dr. Hj. Nining Syamsi Komariah,S.Ag., MSI</p>

</div>
</div>
<div class="details">
</div>
<div class="bride" data-aos="fade-left" data-aos-duration="2000">
<div class="round-avatar img-holder" style="background-image: url('images/haerul.jpg')">
</div>

<div class="mt-5" data-aos="fade-left" data-aos-duration="2000">
<h2 class="couple-name">
<strong>
Haerul Anwar, S.T
</strong>
</h2>
<p>Putra Bungsu dari (Alm.) Bpk. H. Yuni Mawardi & Ibu Hj. Hadijah</p>

</div>
</div>
</div>
</div>
</div>
</div> 
</section>

<section class="section-padding flower">
<div class="container">
<div class="section-title" data-aos="fade-up" data-aos-duration="2000">
<h2 class="heading-font-type">Quotes</h2>
</div>
<div class="row">
    
<div class="col d-flex justify-content-center p-2" data-aos="fade-up" data-aos-duration="2000">
    
<div class="text-center font-italic mt-3">
<h4 style="text-align: right; margin-bottom:10px;">وَمِنْ ءَايَٰتِهِۦٓ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَٰجًا لِّتَسْكُنُوٓا۟ إِلَيْهَا وَجَعَلَ بَيْنَكُم مَّوَدَّةً وَرَحْمَةً ۚ إِنَّ فِى ذَٰلِكَ لَءَايَٰتٍ لِّقَوْمٍ يَتَفَكَّرُونَ</h4>

						<span style="text-align: left; margin-bottom:10px; font-weight:bold; text-align:justify;">Wa min āyātihī an khalaqa lakum min anfusikum azwājal litaskunū ilaihā wa ja'ala bainakum mawaddataw wa raḥmah, inna fī żālika la`āyātil liqaumiy yatafakkarụn</span> <br>

						<span style="text-align: left; margin-bottom:10px; text-align:justify;">Dan di antara tanda-tanda kekuasaan-Nya lah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</span>

						<span style="text-align: center;">(Q.S Ar-Rum : 21)</span>
</div>
</div>
</div>
</div>
</section>

<section class="couple-section section-padding flower" id="couple">
  <div class="container" data-aos="fade-up" data-aos-duration="2000">
    <div class="row">
      <div class="col col-xs-12">
        <div class="section-title">
          <h2 class="heading-font-type">Prokes</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col col-lg-10 col-lg-offset-1">
        <div class="couple">
            <!-- prokes start -->
          <div class="groom mt-3" data-aos="fade-right" data-aos-duration="2000">
            <div>
              <img src="images/prokes1.png" width="50%" alt="">
            </div>
            <div class="mt-2" data-aos="fade-right" data-aos-duration="2000">
              <p style="font-family:Josefin Sans; font-size:20px;">
                <strong>Mencuci Tangan</strong>
              </p>
              <p style="line-height: 1.5em;">Cucilah tangan Anda menggunakan sabun dan air yang bersih</p>
            </div>
          </div>
          <div class="details"></div>
          <div class="bride mt-3" data-aos="fade-left" data-aos-duration="2000">
            <div>
              <img src="images/prokes2.png" width="50%" alt="">
            </div>
            <div class="mt-2" data-aos="fade-left" data-aos-duration="2000">
              <p style="font-family:Josefin Sans; font-size:20px;">
                <strong>Menggunakan Masker</strong>
              </p>
              <p style="line-height: 1.5em;">Gunakanlah masker medis berstandar SNI</p>
            </div>
          </div>
          <div class="details"></div>
          <div class="groom mt-3" data-aos="fade-right" data-aos-duration="2000">
            <div>
              <img src="images/prokes3.png" width="50%" alt="">
            </div>
            <div class="mt-2" data-aos="fade-right" data-aos-duration="2000">
              <p style="font-family:Josefin Sans; font-size:20px;">
                <strong>Hindari Bersalaman</strong>
              </p>
              <p style="line-height: 1.5em;">Hindarilah bersentuhan tangan dengan orang lain</p>
            </div>
          </div>
          <div class="details"></div>
          <div class="bride mt-3" data-aos="fade-left" data-aos-duration="2000">
            <div>
              <img src="images/prokes4.png" width="50%" alt="">
            </div>
            <div class="mt-2" data-aos="fade-left" data-aos-duration="2000">
              <p style="font-family:Josefin Sans; font-size:20px;">
                <strong>Pakai Hand Sanitizer</strong>
              </p>
              <p style="line-height: 1.5em;">Gunakanlah Hand Sanitizer yang sudah disediakan ataupun milik Anda</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="count-down-section section-padding flower">
<div class="container" data-aos="fade-up" data-aos-duration="2000">
<div class="row">
<div class="col col-xs-12">
<div class="section-title">
<h2 class="heading-font-type">Menghitung Hari</h2>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<div class="count-down-clock">
<div id="clock"></div>
</div>
</div>
</div>
</div> 
</section>


<section class="getting-there-section section-padding flower" id="location">
<div class="container">
<div class="row">
<div class="col col-xs-12">
<div class="section-title" data-aos="zoom-in" data-aos-duration="2000">
<h2 class="heading-font-type">Lokasi</h2>
</div>
</div>
</div>
<div class="row">
<div class="col col-lg-12 col-md-12">
<div class="card shadow-lg p-3 mb-5 bg-white rounded">
<div class="row">
<div class="col" data-aos="zoom-in" data-aos-duration="2000">
<div class="card-body">
<h4 class="heading-font-type pb-2"></h4>
<img src="https://inveet.id/inveet/img/date.png" alt="Resepsi Date" height="40" width="40">
<p class="font-location mt-2">
<h5>
<strong>
6 November 2021
</strong>
</h5>

</p>
<img src="https://inveet.id/inveet/img/location.png" alt="Resepsi Date" height="40" width="40">
<p class="font-location mt-2">
<h5>
<strong>
Gedung PKP-RI Serang
</strong>
</h5>
Cimuncang, Kec. Serang, Kota Serang, Banten

</p>
<br>
</div>
</div>
</div>
<div class="row">
</div>
<div class="row">
</div>
<div class="row">
</div>
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="google-maps" id="google-maps" data-aos="zoom-in" data-aos-duration="2000">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.16321929497!2d106.16871469281733!3d-6.108713936896757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f4da715e1a43%3A0x2a1b1b58191c2e96!2sGedung%20PKP-RI%20Serang!5e0!3m2!1sid!2sid!4v1634894808072!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>
<div class="form-group">
<br>
<a href="https://goo.gl/maps/7NQGT31kvJfmV5bg7" target="_blank" class="theme-btn mr-2 mb-2">Arahkan ke Lokasi</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="rsvp-section section-padding" id="donation">
<div class="container" data-aos="fade-up" data-aos-duration="2000">
<div class="row">
<div class="col col-xs-12">
<div class="section-title">
<h2 class="heading-font-type">Amplop Undangan</h2>
</div>
<div class="text-center">
<a href="#" class="theme-btn" data-toggle="modal" data-target="#amplopModal">Kirim Amplop Undangan</a>
</div>
</div>
</div>
</div> 
</section>
<section class="rsvp-section section-padding" id="rsvp">
<div class="container" data-aos="fade-up" data-aos-duration="2000">
<div class="row">
<div class="col col-xs-12">
<div class="section-title">
<h2 class="heading-font-type">Ucapan & Do'a</h2>
</div>
<div style="height: 200px; overflow:scroll; overflow-x:hidden;" >

    <?php foreach ($dataBT as $data) :?>
    <div class="row" >
      <div class="col-sm-12 col-md-12">
        <div>
          <div class="d-flex justify-content-center row mb-2">
            <div class="col-md-8">
              <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2 shadow-sm">
                  <div class="d-flex flex-row ml-2">
                    <div class="d-flex flex-column justify-content-start">
                      <span class="d-block font-weight-bold" style="color: #BB9EAB"><?= $data['nama_tamu'] ?></span>
                    </div>
                  </div>
                  <div class="mt-2 ml-2">
                    <p class="comment-text"><?= $data['pesan_tamu'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="text-center pt-3">
<button type="button" class="theme-btn" data-toggle="modal" data-target="#wishModal">
Kirim Ucapan & Do'a
</button>
</div>
</div>
</div>
</div> 
</section>
<section style="display: block; background: #BB9EAB; color: white; visibility: visible!important; font-size: 12px; height: 40px; line-height: 20px; padding: 10px 0; margin-bottom:80px;" class="text-center">
<a href="https://wa.link/dvcvdl" target="_blank" style="color: white;">
Buat undangan seperti ini
</a>

</section>
</div>

<a href="javascript:;" id="playButton" class="btn btn-xs theme-btn position-fixed" style="bottom: 90px;right: 15px; display:none;"><span class="ti-control-play"></span></a>
<nav class="mobile-bottom-nav">
<a class="mobile-bottom-nav__item" href="#couple">
<div class="mobile-bottom-nav__item-content">
<i class="flaticon-ring mr-3"></i>
</div>
</a>
<a class="mobile-bottom-nav__item" href="#location">
<div class="mobile-bottom-nav__item-content">
<i class="flaticon-placeholder mr-3"></i>
</div>
</a>
<a class="mobile-bottom-nav__item" href="#rsvp">
<div class="mobile-bottom-nav__item-content">
<i class="flaticon-chat mr-3"></i>
</div>
</a>
</nav>
<div class="modal fade" id="amplopModal" tabindex="-1" role="dialog" aria-labelledby="amplopModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-12">
      <div class="modal-header">
        <h4 class="modal-title font-modal">Kirim Amplop</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col">
          <div class="form-group">
            <label for="sender_name">Nama Penerima</label>
            <input type="text" class="form-control" name="sender_name" readonly id="sender_name" value="Haerul Anwar">
          </div>
          <div class="form-group">
            <label for="no_pengirim">Nomor Rekening</label>
            <input type="text" class="form-control" name="no_pengirim" readonly id="inputRekAnwar" value="1640001584830">
          </div>
          <div class="row">
<div class="col-md-12">
<button id="copyRekAnwar" class="btn btn-block" style="color:white; background-color:#bb9eab; border-color:#bb9eab;">Salin Nomor Rekening</button>
</div>
</div>
<hr>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- autoloadModal -->
<div class="modal fade" id="autoloadModal" tabindex="-1" role="dialog" aria-labelledby="amplopModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content col-12">
      <div class="modal-header d-flex justify-content-center text-center w-100">
      <h2 class="wow fadeIn heading-font-couple animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Nindi <i class="icon icon-heart" style="color:#bea2ae;"></i> Haerul</h2>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button> -->
      </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="wishModal" tabindex="-1" role="dialog" aria-labelledby="wishModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<div>
<h2 class="font-poppins text-center">
Ucapan & Do'a
</h2>
</div>
<div class="mt-modal">
<form action="kirim-ucapan.php" method="POST">
<div class="form-group">
<label for="namaTamu">Nama</label>
<input type="text" class="form-control" placeholder="Nama..." name="namaTamu" id="namaTamu" value="">
</div>
<div class="form-group">
<label for="ucapanTamu">Ucapan dan Doa</label>
<textarea class="form-control" name="ucapanTamu" id="ucapanTamu" placeholder="Ucapan dan Doa..."></textarea>
</div>


<div class="mt-3 text-center">
<button type="submit" name="tombolKirim" class="theme-btn">Kirim</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


<script src="https://inveet.id/themes/pastel_floral/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://inveet.id/themes/pastel_floral/js/jquery-plugin-collection.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.8.1/js/jquery.justifiedGallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/lightgallery.min.js" integrity="sha512-DHzj0Pb74Okp1KYj1vRYZ2kZKQtScr+ilk0w8lEjHgU4OvRKOGecRAEkejpBPlzmY1L2pU7m9o1DAk6Tmex/Eg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/plugins/zoom/lg-zoom.min.js" integrity="sha512-P4z+Vrg0pDrTDKhbrED8I1L0lDTCYnn4EV94G79Fpfwz7FXdPmWGYcL23CLQwu1gGa7KtpvyO1sM4lI7jgscXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/plugins/thumbnail/lg-thumbnail.min.js" integrity="sha512-HXxN3IYkrTWLlY1asbRx+fgPfTOpVSyg1UpqxFXg9hQUFdBl9/AdESqpaPzZX0HrcKsXA38hl9rOZm+qP/XKtg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/plugins/autoplay/lg-autoplay.min.js" integrity="sha512-MdrToLyMzGkhQjKuuZbdttp7SWIiRFDRGEmAY8U0T3Y7z+HJ5JxQ+6Ei9xy9cJKHDdbhZQwHPEek3AUMsmzfWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js" integrity="sha512-6+YN/9o9BWrk6wSfGxQGpt3EUK6XeHi6yeHV+TYD2GR0Sj/cggRpXr1BrAQf0as6XslxomMUxXp2vIl+fv0QRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://inveet.id/inveet/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src='assets/sakura.js'></script>

<script>
    var content = {};

    // $('#autoloadModal').modal('show');
    
        
        </script>
<script>
        document.onkeydown = function(e) {
            if(event.keyCode == 123) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }

        $(document).bind("contextmenu", function (e) {
            return false;
        });
    </script>
<script>
    var clipboard;

    function init() {
        var imgDefer = document.getElementsByTagName('img');
        for (var i = 0; i < imgDefer.length; i++) {
            if (imgDefer[i].getAttribute('data-src')) {
                imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
            }
        }
    }

    function copyGift(uuid) {
        if (clipboard) {
            clipboard.destroy();
        }

                    clipboard = new ClipboardJS('.copy-link-' + uuid);
        
        clipboard.on('success', function () {
            alert('Rekening berhasil disalin');
        });
    }

    $(document).ready(function () {
        init();
        AOS.init();

        function playMusic(elem) {
                elem.find('span').removeClass('ti-control-play').addClass('ti-control-pause');
            }

            function pauseMusic(elem) {
                elem.find('span').removeClass('ti-control-pause').addClass('ti-control-play');
            }

            function isPlaying() {
                if (sound.playing()) {
                    playMusic($('#playButton'));
                }
            }

            let autoplay = true;
            let soundID;
            let elem = $('#playButton')
            var sound = new Howl({
                src: ['./song/backsong1-fix.mp3'],
                autoplay: autoplay,
                loop: true,
                onplay: isPlaying
            });

            soundID = sound.play();

            if (sound.playing()) {
                playMusic($('#playButton'));
            }

            $("#open-play").on("click", function () {
                if (!sound.playing()) {
                    sound.play();
                }
            })

            $("#playButton").on("click", function () {
                if (!sound.playing()) {
                    sound.play();
                    playMusic($(this));
                } else {
                    sound.stop();
                    pauseMusic($(this));
                }
            })
    
        $("#animated-thumbnails-gallery")
            .justifiedGallery({
                captions: false,
                lastRow: "nojustify",
                rowHeight: 150,
            })
            .on("jg.complete", function () {
                window.lightGallery(
                document.getElementById("animated-thumbnails-gallery"),
                    {
                    autoplayFirstVideo: false,
                    pager: false,
                    galleryId: "nature",
                    plugins: [lgZoom, lgThumbnail, lgAutoplay],
                    slideShowAutoplay: true,
                    mobileSettings: {
                    controls: true,
                    showCloseIcon: true,
                    download: false,
                    rotate: false,
                    licenseKey: '5C0CD08F-5F0846F8-A47D4D0C-F9158701'
                    }
                }
            );
            });

            
        
        $('#setAnonymous').change(function () {
            if (this.checked) {
                $('#sender_name').attr('disabled', 'disabled')
            } else {
                $('#sender_name').removeAttr('disabled')
            }
        });

        particlesJS.load('hero-circle', "https://inveet.id/themes/assets/particle.json", function () {
            console.log('particle start')
        })

        init();
    });

    !function (s) {
        "use strict";

        var o, r, l = new WOW({
            boxClass: "wow",
            animateClass: "animated",
            offset: 0,
            mobile: !0,
            live: !0
        });
        s("#clock").length && s("#clock").countdown("2021/11/06 08:00:00", function (e) {
            s(this).html(e.strftime('<div class="box"><div>%D</div> <span>Hari</span> </div><div class="box"><div>%H</div> <span>Jam</span> </div><div class="box"><div>%M</div> <span>Menit</span> </div><div class="box"><div>%S</div> <span>Detik</span> </div>'))
        }), s(window).on("load", function () {
            s(".preloader").length && s(".preloader").delay(100).fadeOut(500, function () {
                l.init()
            }), s(".hero-slider .slide").length && s(".hero-slider .slide").each(function () {
                var e = s(this),
                    i = e.find(".slider-bg").attr("src");
                e.css({
                    backgroundImage: "url(" + i + ")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            })
        })
    }(window.jQuery);
</script>

<script>
    document.getElementById('copyRekAnwar').addEventListener('click', copyRekAnwar);
            function copyRekAnwar() {
                var copyText = document.getElementById("inputRekAnwar");
                document.querySelector("#inputRekAnwar").select();
                document.execCommand("copy");
                alert("Teks berhasil dicopy : " + copyText.value);
            }
</script>
</body>
</html>
