<p>
    <!--awal FOOTER-->
    <div class="col-md-12">
            <div class="col-md-9">
                <footer class="footer">
                    <div class="footer-left">
                        <div class="logo">
                            <img src="{{ asset('gambar') }}/logo.png" class="logo-img">
                            <img src="{{ asset('gambar') }}/pnj.png" class="logo-img">
                        </div>
                        <p class="footer-copyright">2024 Perpustakaan Chiron</p>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1W2P191VdN_sCZb9ecmn8kK1bWKk&hl=en_US&ll=-6.373216570370848%2C106.82654447634494&z=16"
                                    width="350" height="300" style="border:0;" allowfullscreen loading="lazy">
                            </iframe>
                        </div>
                    </div>

                    <div class="footer-center">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p><span>Indonesia</span> Jawa Barat, Depok</p>
                        </div>
                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+62 812-1951-1859</p>
                        </div>
                        <div>
                            <i class="fa fa-envelope"></i>
                            <p><a href="mailto:ananda.wizza.kayla.te22@mhsw.pnj.ac.id">ananda.wizza.kayla.te22@mhsw.pnj.ac.id</a></p>
                            <p><a href="mailto:nicko.aviyuda.te22@mhsw.pnj.ac.id">nicko.aviyuda.te22@mhsw.pnj.ac.id</a></p>
                        </div>
                    </div>

                    <div class="footer-right">
                        <p class="footer-about">
                            <span>About Us</span>
                        </p>
                        <div style="display:flex; gap:100px;">
                        <ul>
                            <li> <img src="{{ asset('gambar') }}/saya.jpg" alt="Foto Ananda Wizza Kayla" class="profile-img"></li>
                            <li>Nama  : Ananda Wizza Kayla</li>
                            <li>Kelas : BM-4A</li>
                            <li>NIM   : 2203421012</li>
                        </ul>
                        <ul>
                            <li> <img src="{{ asset('gambar') }}/nickoo.jpg" alt="Foto Nicko Aviyuda" class="profile-img"></li>
                            <li>Nama  : Nicko Aviyuda</li>
                            <li>Kelas : BM-4A</li>
                            <li>NIM   : 2203421032</li>
                        </ul><br>
                        </div>

                        <div class="footer-media;" style="display:flex; gap:220px">
                        <ul>
                            <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </ul>
                        <ul>
                            <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </ul>
                        </div>
                    </div>
                </footer>
                <style>
                    /* CSS untuk footer */
                    .footer {
                        display: flex;
                        justify-content: space-between;
                        align-items: flex-start;
                        background-color: #1b1d23;
                        color: #f9fafb;
                        padding: 50px 30px;
                        box-sizing: border-box;
                    }

                    .footer-left,
                    .footer-center,
                    .footer-right {
                        flex: 1;
                        margin: 0 30px;
                    }

                    .footer-left .logo-img {
                        width: 50px;
                        margin-right: 10px;
                        vertical-align: middle;
                    }

                    .footer-center i {
                        background-color: #33383b;
                        color: #ffffff;
                        font-size: 25px;
                        width: 38px;
                        height: 38px;
                        border-radius: 50%;
                        text-align: center;
                        line-height: 40px;
                        margin-right: 15px;
                        vertical-align: middle;
                    }

                    .footer-center p {
                        margin: 3;
                        color: #ffffff;
                    }

                    .footer-center a {
                        color: rgb(22, 225, 177);
                        text-decoration: none;
                    }

                    .footer-center a:hover {
                        text-decoration: underline;
                    }

                    .footer-right ul {
                        list-style-type: none;
                        padding: 0;
                        margin: 0;
                    }

                    .footer-right ul li {
                        margin-bottom: 20px;
                    }

                    .footer-right .profile-img {
                        width: 200px;
                        height: auto;
                        display: block;
                        margin-bottom: 10px;
                    }

                    .footer-media a {
                        display: inline-block;
                        width: 25px;
                        height: 30px;
                        background-color: #33383b;
                        border-radius: 50%;
                        color: #ffffff;
                        text-align: center;
                        line-height: 30px;
                        margin-right: 10px;
                        text-decoration: none;
                    }

                    .footer-media a:hover {
                        background-color: rgb(0, 122, 82);
                    }

                    .footer-about span {
                        display: block;
                        color: #ffffff;
                        font-size: 18px;
                        font-weight: bold;
                    }

                    .map-container {
                        margin-top: 20px;
                    }

                    /* Responsive Layout */
                    @media (max-width: 768px) {
                        .footer {
                            flex-direction: column;
                            align-items: center;
                        }

                        .footer-left,
                        .footer-center,
                        .footer-right {
                            width: 100%;
                            text-align: center;
                        }
                    }
                </style>
            </div>
        </div>
    </div>
    <!--akhir FOOTER-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</p>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>