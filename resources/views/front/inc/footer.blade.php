<!-- ##### Footer Area Start ##### -->
<footer class="footer-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
               
                <!-- Footer Nav Area -->
                {{-- <div class="classy-nav-container breakpoint-off">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-center">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">Baş sahypa</a></li>
                                    <li><a href="#">Biz barada</a></li>
                                    <li><a href="#">Hyzmatlarymyz</a></li>
                                    <li><a href="#">Habarlaşmak</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div> --}}
                
                <!-- Footer Social Area -->
                {{-- <div class="footer-social-area mt-30">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div> --}}
            </div>
        </div>
    </div>

 &copy;2023 Ähli hukuklary goragly
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

</footer>
<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{ asset("front/js/jquery/jquery-2.2.4.min.js") }}"></script>
<!-- Popper js -->
<script src="{{ asset("front/js/popper.min.js") }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset("front/js/bootstrap.min.js") }}"></script>
<!-- Plugins js -->
<script src="{{ asset("front/js/plugins.js") }}"></script>
<!-- Active js -->
<script src="{{ asset("front/js/active.js") }}"></script>

<script>
    $('#locale').on('change', function() {
        window.location.href = '/change-lang?lang=' + $(this).val()
    });
</script>

</body>

</html>