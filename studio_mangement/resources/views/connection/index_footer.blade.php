<!-- footer -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29-w3l py-5">
            <div class="container pt-md-5 pt-4">
                <div class="w3l-footer-texthny-inf">
                    <h2>
                        <a class="d-flex align-items-center logo-2" href="{{ url('/') }}">
                            Bistros <i class="fa fa-cutlery ml-2" aria-hidden="true"></i></a>
                    </h2>
                    <div class="footer-list-cont d-flex align-items-center justify-content-between mt-md-5 mt-4 mb-5">
                        <h6 class="foot-sub-title">Contact Us</h6>

                        <div class="main-social-footer-29">
                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row footer-top-29 mt-lg-5 mt-md-4 pt-md-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="address-grid">
                            <h5>10001 Alleghany st, 5th Avenue, 235 Terry, <br> London.</h5>
                            <h5 class="mt-sm-5 mt-4">Everyday: <span> 7 AM - 8 PM</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="address-grid">
                            <h5>Phone</h5>
                            <h5 class="phone-number-text mt-2"><a href="tel:+1(21) 234 4567">+1(21) 112 7368</a></h5>
                        </div>
                        <div class="address-grid mt-sm-5 mt-4">
                            <h5>E-mail</h5>
                            <h5 class="email-cont-text mt-1"> <a href="mailto:bistros@mail.com"
                                    class="mail">bistros@mail.com</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu pl-lg-0 mt-lg-0 mt-sm-5 mt-4">
                        <div class="address-grid">
                            <h5 class="mb-4 pb-lg-2">Support Links</h5>
                            <ul>
                                <li><a href="{{url('/policy')}}">Privacy Policy</a></li>
                                <li><a href="{{url('/terms')}}"> Terms of Service</a></li>
                                <li><a href="{{ url('/contact') }}">Contact us</a></li>
                                <!-- <li><a href="#support"> Support</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="address-grid col-lg-4 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 w3l-footer-16-main" >
                        <h5>Subscribe Here</h5>
                        <form action="{{url('/subscribe')}}" class="subscribe d-flex mt-4 pt-lg-2 mb-4" method="post">
                            <input type="email" name="subscribe" id="subscribe" placeholder="Email sAddress" required="">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" ><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div> -->
                </div>
                <!-- copyright -->
                <div class="w3l-copyright mt-lg-5 mt-sm-4 pt-md-4 pt-3">
                    <div class="row bottom-copies pt-md-5 pt-4 mt-md-5 mt-4">
                        <p class="col-lg-8 copy-footer-29"> 
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by 
                            <a href="#" target="_blank">
                                Ajay naryanan S</a></p>

                        <!-- <div class="col-lg-4 footer-list-29 mt-lg-0 mt-md-4 mt-2">
                            <ul class="d-flex text-lg-right">
                                <li><a href="#support"> Support</a></li>
                                <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacy">Privacy Policy</a>
                                </li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{url('public/assets/js/jquery-3.3.1.min.js')}}"></script>
    <!-- //common jquery plugin -->

    <!-- owlcarousel -->
    <script src="{{url('public/assets/js/owl.carousel.js')}}"></script>

    <!-- counter for stats -->
    <script src="{{url('public/assets/js/counter.js')}}"></script>
    <!-- //counter for stats -->

    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 2,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- script for tesimonials agency carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-agency").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials agency carousel slider -->

    <!-- magnific popup -->
    <script src="{{url('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- theme switch js (light and dark)-->
    <script src="{{url('public/assets/js/theme-change.js')}}"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->
    
<!-- Subscribe -->
<!-- <script>
    $(document).ready(function () {
        $('#subscribeForm').submit(function (event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Perform AJAX submission or other form processing here

            // Reset the form
            $('#subscribeForm')[0].reset();
        });
    });
</script> -->
<!--End Subscribe -->

    <!--bootstrap-->
    <script src="{{url('public/assets/js/bootstrap.min.js')}}"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>