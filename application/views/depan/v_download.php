<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Modul</title>
     <link rel="shorcut icon" href="<?php echo base_url().'theme/images/rpl2.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'theme/css/dataTables.bootstrap4.min.css'?>" rel="stylesheet">
    <!--- REVISI ---->
    <style>
        .page-link:hover    {
            background-color: cornflowerblue;
        }
    </style>
    <link rel="stylesheet" href="theme/css/depan-revisi.css">

</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>(0286) 591407
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>smkn1bawang@yahoo.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Bawang, Banjarnegara, Jawa Tengah 53471
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" style="margin-left: -5px;" src="<?php echo base_url().'theme/images/rpl.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru');?>">GURU</a>
                                </li>
                                <!--
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswa');?>">Siswa</a>
                                </li>
                                --->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">BLOG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">DUDI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">PRESTASI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">MODUL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">GALLERY</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">CONTACT</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
    <section>
</section>
<!--//END HEADER -->
<section class="contact">
    <div class="container"  style="margin-bottom:50px; background:#bbeeff; border-radius:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Download</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped" id="display">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Files</th>
                      <th>Tanggal</th>
                      <th>Oleh</th>
                      <th style="text-align:right;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach ($data->result() as $row):
                    ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row->file_judul;?></td>
                      <td><?php echo $row->tanggal;?></td>
                      <td><?php echo $row->file_oleh;?></td>
                      <td style="text-align:right;"><a href="<?php echo site_url('download/get_file/'.$row->file_id);?>" class="btn btn-info">Download</a></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->

    <!--============================= FOOTER =============================-->
<footer class="foot">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/rpl.png'?>" class="img-fluid" alt="footer_logo">
                    </a>
                    
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">About</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Blog </a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Akademik</h3>
                       <ul>
                          <li><a href="<?php echo site_url('guru');?>">Guru</a></li>
                          <li><a href="<?php echo site_url('pengumuman');?>">DUDI</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Prestasi</a></li>
                          <li><a href="<?php echo site_url('download');?>">Modul</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> <br> Bawang,Banjarnegara, Jawa Tengah 53471</p>
                        <p>Email : <br> smkn1bawang@yahoo.com
                            <br> Phone : <br> (0286) 591407</p>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//END FOOTER -->
            <!-- jQuery, Bootstrap JS. -->
            <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>
            <script>
              $(document).ready(function() {
                $('#display').DataTable();
              });
            </script>
      </body>

</html>
