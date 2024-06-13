<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Quicksand'
            rel='stylesheet'>
        <script src="https://kit.fontawesome.com/15491dc390.js"
            crossorigin="anonymous"></script>
    </head>
    <body>

        <!-- Header -->
        <header>
            <div class="logo">
                Profile
            </div>
            <div>
                <nav class="navbar1">
                    <ul>
                        <li>
                            <a href="#Home">Home</a>
                        </li>
                        <li>
                            <a href="#About">About</a>
                        </li>
                        <li>
                            <a href="#Contact">Contact</a>
                        </li>
                    </ul>
                </nav>
                <nav class="navbar">
                    <a class="toggler-navbar">
                        <div class="hamburger-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </nav>
                <div class="sidebar">
                    <ul>
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#About">About</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Akhir Dari Header -->

        <!-- Main -->
        <main>
            <div id="Home">
                <div>
                    <i class="fa-solid fa-laptop-code fa-2xl"></i>
                </div>
                <div class="paragraf">
                    <h1>Hello</h1>
                    <h3>I'M Muhammad Ryan Dwiyanto</h3>
                    <p>Back End Development</p>
                </div>
            </div>
            <div id="About">
                <h1>About</h1>
                <div class="about-main">
                    <div>
                        <img class="img-profile"
                            src="{{asset('css/Imaged/webcam-toy-photo1 (1).jpg')}}" alt="Foto">
                    </div>
                    <div class="about-paragraf">
                        <div class="about-paragraf1">
                            <div>
                                <h3 class="about-h3">Name</h3>
                                <p class="about-p">Muhammad Ryan Dwiyanto</p>
                            </div>
                            <div>
                                <h3 class="about-h3">Birth</h3>
                                <p class="about-p">11 July 2008</p>
                            </div>
                        </div>
                        <div class="about-paragraf2">
                            <div>
                                <h3 class="about-h3">School</h3>
                                <p class="about-p">Wikrama Vocational High
                                    School</p>
                            </div>
                            <div>
                                <h3 class="about-h3">Major</h3>
                                <p class="about-p">PPLG X-5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Akhir Dari Main -->

        <!-- Footer -->
        <footer>
            <div id="Contact">
                <h2 class="h2-f">Contact</h2>
                <table class="p1-f">
                    <tr>
                        <td><i class="fa-brands fa-instagram"></i></td>
                        <td>INSTAGRAM</td>
                        <td>:</td>
                        <td>ryn_shk</td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-whatsapp"></i></td>
                        <td>WHATSAPP</td>
                        <td>:</td>
                        <td>0895-4147-73030</td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-github"></i></td>
                        <td>GITHUB</td>
                        <td>:</td>
                        <td>Ryan-Dwiyanto</td>
                    </tr>
                </table>
                <p class="p-f">
                    Copyright &thinsp;<sup>&copy;</sup>&thinsp; Muhammad Ryan
                    Dwiyanto <sup>&sup1; </sup> &#128526;
                </p>
            </div>
        </footer>
        <!-- Akhir Dari Footer -->
        <script src="{{ asset('js/script.js')}}"></script>
    </body>
</html>
