   <header>
       <div class="menu__area transparent-header" id="sticky-header">
           <div class="custom-container container">
               <div class="row">
                   <div class="col-12">
                       <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                       <div class="menu__wrap">
                           <nav class="menu__nav">
                               <div class="logo">
                                   <a class="logo__black" href="#">
                                       <h2>shr_creation</h2>
                                   </a>
                                   <a class="logo__white" href="#">
                                       <h2>shr_creation</h2>
                                   </a>
                               </div>
                               <div class="navbar__wrap main__menu d-none d-xl-flex">
                                   <ul class="navigation">

                                       <li class=""><a href="{{ url('/') }}">Home</a></li>

                                       <li class=""><a href="{{ route('home.about') }}">About</a></li>

                                       <li><a href="services-details.html">Services</a></li>

                                       <li class=""><a href="">Portfolio</a>

                                       </li>

                                       <li class=""><a href="">Blog</a>

                                       </li>
                                       <li class=""><a href="">contact me</a></li>
                                   </ul>
                               </div>

                               <div class="header__btn d-none d-md-block">
                                   <a class="btn" href="contact.html">Contact me</a>
                               </div>
                           </nav>
                       </div>
                       <!-- Mobile Menu  -->
                       <div class="mobile__menu">
                           <nav class="menu__box">
                               <div class="close__btn"><i class="fal fa-times"></i></div>
                               <div class="nav-logo">
                                   <a class="logo__black" href="index.html"><img src="assets/img/logo/logo_black.png"
                                           alt=""></a>
                                   <a class="logo__white" href="index.html"><img src="assets/img/logo/logo_white.png"
                                           alt=""></a>
                               </div>
                               <div class="menu__outer">
                                   <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                               </div>
                               <div class="social-links">
                                   <ul class="clearfix">
                                       <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                       <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                       <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                       <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                       <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                   </ul>
                               </div>
                           </nav>
                       </div>
                       <div class="menu__backdrop"></div>
                       <!-- End Mobile Menu -->
                   </div>
               </div>
           </div>
       </div>
   </header>
