@extends('layouts.app')

@section('content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Selamat datang...</h1>
                <hr>
                <p>Program Studi Pendidikan Bahasa Inggris - Universitas Kristen Duta Wacana</p>
                <a href="#visi-misi" class="btn btn-primary btn-xl page-scroll">Selanjutnya</a>
            </div>
        </div>

    </header>

    <section class="bg-primary" id="visi-misi">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Visi dan Misi</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <p class="text-faded">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="#" class="btn btn-default btn-xl">Mari Bergabung</a>
                </div>
            </div>
        </div>
    </section>

    <section id="lect-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Profil Dosen</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x wow bounceIn text-primary">
                        	<img class="img-profil img-circle" src="img/profil1.jpg">
                        </i>
                        <h3>Dosen 1</h3>
                        <p class="text-muted">Profil singkat bla bla bla</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x wow bounceIn text-primary">
                        	<img class="img-profil img-circle" src="img/profil2.jpg">
                        </i>
                        <h3>Dosen 2</h3>
                        <p class="text-muted">Profil singkat bla bla bla</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x wow bounceIn text-primary">
                        	<img class="img-profil img-circle" src="img/profil3.jpg">
                        </i>
                        <h3>Dosen 3</h3>
                        <p class="text-muted">Profil singkat bla bla bla</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x wow bounceIn text-primary">
                        	<img class="img-profil img-circle" src="img/profil1.jpg">
                        </i>
                        <h3>Dosen 4</h3>
                        <p class="text-muted">Profil singkat bla bla bla</p>
                    </div>
                </div>
            </div>
            <!-- <div class="container text-center" style="padding-top: 10%">
                <a href="#" class="btn btn-primary btn-xl wow tada">See More</a>
            </div> -->
            <!-- btn btn-default btn-xl wow tada -->
        </div>
    </section>

    <section class="bg-primary" id="program_pelatihan" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Program dan Pelatihan</h2>
                    <hr class="primary">
                    <div id="wrapper">
                        <div class="slider-wrapper theme-default">
                            <div id="slidder" class="nivoSlider">
                                <img src="img/happy.jpg" data-thumb="img/happy.jpg" alt=""/>
                                <a href ="#"><img src="img/home.jpg" data-thumb="img/home.jpg" alt="" title="example 1">
                                <img src="img/international.jpg" data-thumb="img/international.jpg" alt=""/>
                                <a href ="#"><img src="img/teacher.jpg" data-thumb="img/teacher.jpg" alt="" title="example 2">
                            </div>
                            <div id="htmlcaption" class="nivo-html-caption">
                                <div>
                                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                                </div>
                                <div class="col-lg-4 col-lg-offset-2 text-center">
                                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                                    <p>123-456-6789</p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                        jQuery(document).ready(function($) {
                              $('#slidder').nivoSlider();
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding bg-dark" id="portfolio">
    	<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="padding-top: 10%;">Publikasi</h2>
                    <hr class="primary" style="padding-bottom: 4%;">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Judul Publikasi
                                </div>
                                <div class="project-name">
                                    Deskripsi singkat
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                              <div class="project-category text-faded">
                                  Judul Publikasi
                              </div>
                              <div class="project-name">
                                  Deskripsi singkat
                              </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                              <div class="project-category text-faded">
                                  Judul Publikasi
                              </div>
                              <div class="project-name">
                                  Deskripsi singkat
                              </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                              <div class="project-category text-faded">
                                  Judul Publikasi
                              </div>
                              <div class="project-name">
                                  Deskripsi singkat
                              </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                              <div class="project-category text-faded">
                                  Judul Publikasi
                              </div>
                              <div class="project-name">
                                  Deskripsi singkat
                              </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                              <div class="project-category text-faded">
                                  Judul Publikasi
                              </div>
                              <div class="project-name">
                                  Deskripsi singkat
                              </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Want to see all the news?</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Lihat Selengkapnya</a>
            </div>
        </div>
    </aside>

    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Hubungi Kami</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
