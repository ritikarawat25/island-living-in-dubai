<footer class="bg-footer">
    <div class="container wow animate__animated animate__fadeIn" data-wow-duration="3s">
        <div class="row align-items-center">
            <div class="col-lg-4 ">
                <div class="text-center"><img src="/island-living-in-dubai/images/dre-logo.png" alt="logo" class="pb-3"></div>
                <div class="f-contact-icon">
                    <ul>
                        <li class="loc-icon">Citadel Tower, Suite # 704 / 705, Business Bay, Dubai, UAE.</li>
                        <li class="loc-icon">Street Shop 2, Community Center, Town Square Nshama Al Qudra, Dubai, UAE</li>
                        <li class="pho-icon">Toll Free: 800 37373</li>
                        <li class="pho-icon">Hotline: +971 52 754 3243</li>
                        <li class="mail-icon">sales@drehomes.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="container-fluid px-0 text-center mb-3">
                    <p class="h1">Contact Us</p>
                </div>
                <div>
                    <form action="" id="f-form">
                        <div class="row">
                            <div class="col-md-6 pb-3">
                                <label for="fname-f">First Name:*</label>
                                <input type="text" id="fname-f" name="fname-f" autocomplete="off" placeholder="Your First Name" class="form-control" required>
                                <span class="fname_f_err"></span>
                            </div>
                            <div class="col-md-6 pb-3">
                                <label for="lname-f">Last Name:*</label>
                                <input type="text" name="lname-f" id="lname-f" autocomplete="off" placeholder="Your Last Name" class="form-control" required>
                                <span class="lname_f_err"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pb-3">
                                <label for="phone-f">Phone:*</label>
                                <input type="tel" name="phone-f" id="phone-f" autocomplete="off" placeholder="Your Phone" class="form-control phone-input" required>
                                <span class="phone_f_err"></span>
                            </div>
                            <div class="col-md-6 pb-3">
                                <label for="email-f">Email:*</label>
                                <input type="email" name="email-f" id="email-f" autocomplete="off" placeholder="Your Email" class="form-control" required>
                                <span class="email_f_err"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="comments-f">Type Your Query:</label>
                                <textarea name="comments-f" id="comments-f" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="form-control mt-2" id="footer-btn">Submit Details</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container text-center p-3">
        <p>Copyright © 2024 Drehomes. All Rights Reserved.</p>
    </div>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register Yourself</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/vertical-form.jpg" alt="" width="100%" height="500px">
                            </div>
                            <div class="col-md-6" style="height:100%;">
                                <form class="form_r" method="post">
                                    <div class="pt-3">
                                        <label for="name_r">Name:*</label>
                                        <input type="text" name="name_r" class="form-control py-1" id="name_r" autocomplete="off" placeholder="Please enter your name" required>
                                        <span id="name_err_r"></span>
                                    </div>
                                    <div class="pt-3 brchr-space">
                                        <label for="phone_r">Phone:*</label>
                                        <input type="tel" name="phone_r" id="phone_r" class="form-control phone-input py-1" autocomplete="off" placeholder="Please enter your phone" required>
                                        <span id="phone_err_r"></span>
                                    </div>
                                    <div class="pt-3">
                                        <label for="email_r">Email:*</label>
                                        <input type="email" name="email_r" id="email_r" class="form-control py-1" autocomplete="off" placeholder="Please enter your email" required>
                                        <span id="email_err_r"></span>
                                    </div>
                                    <div class="pt-3">
                                        <label for="message_r">Message:</label>
                                        <textarea name="message_r" id="message_r" cols="13" rows="3" autocomplete="off" class="form-control py-1" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn rounded-0 mt-4 py-2" id="save-info_r">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<script src="https://kit.fontawesome.com/bf952a0f10.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    $(document).ready(function() {
        new WOW().init();
    });
</script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 300) {
                $(".navbar").attr("style", "background: #064273 !important;");
            } else {
                $(".navbar").attr("style", "background: none");
            }
        });
        $('#footer-btn').click(function() {
            var fname_f = $('#fname-f').val();
            var lname_f = $('#lname-f').val();
            var phone_f = $('#phone-f').val();
            var email_f = $('#email-f').val();

            if (fname_f == "") {
                $('.fname_f_err').html('First name is required');
                return false
            } else {
                $('.fname_f_err').html('');
            }
            if (lname_f == "") {
                $('.lname_f_err').html('Last name is required');
                return false
            } else {
                $('.lname_f_err').html('');
            }
            if (phone_f == "") {
                $('.phone_f_err').html('Phone is required');
                return false
            } else {
                $('.phone_f_err').html('');
            }
            if (email_f == "") {
                $('.email_f_err').html('Email is required');
                return false
            } else {
                $('.email_f_err').html('');
            }
        });
        $('#save-info_r').click(function() {
            var name_r = $('#name_r').val();
            var phone_r = $('#phone_r').val();
            var email_r = $('#email_r').val();
            if (name_r == "") {
                $('#name_err_r').html('Name is required');
                return false
            } else {
                $('#name_err_r').html('');
            }
            if (phone_r == "") {
                $('#phone_err_r').html('Phone No is required');
                return false
            } else {
                $('#phone_err_r').html('');
            }
            if (email_r == "") {
                $('#email_err_r').html('Email is required');
                return false
            } else {
                $('#email_err_r').html('');
            }
        });
        $('.save-info_b').click(function(e) {
            var name_b = $('#name_b').val();
            var phone_b = $('#phone_b').val();
            var email_b = $('#email_b').val();
            if (name_b == "") {
                $('#name_err_b').html('Name is required');
                return false
            } else {
                $('#name_err_b').html('');
            }
            if (phone_b == "") {
                $('#phone_err_b').html('Phone No is required');
                return false
            } else {
                $('#phone_err_b').html('');
            }
            if (email_b == "") {
                $('#email_err_b').html('Email is required');
                return false
            } else {
                $('#email_err_b').html('');
            }
            var id = e.target.id;
            var como_residences = "pdf/como-residences-brochure.pdf";
            if (id === 'como-residences') {
                $('<a href="' + como_residences + '" download></a>')[0].click();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        var isl_slider = $("#owl-isl");
        $('#owl-isl').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });
        $(".owl-prev").click(function() {
            isl_slider.trigger("prev.owl.carousel")
        });
        $(".owl-next").click(function() {
            isl_slider.trigger("next.owl.carousel")
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#owl-dev').owlCarousel({
            loop: true,
            margin: 32,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                    margin: 5
                },
                768: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        var p_slider = $("#owl-p");
        $('#owl-p').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
        $(".owl-prev-p").click(function() {
            p_slider.trigger("prev.owl.carousel")
        });
        $(".owl-next-p").click(function() {
            p_slider.trigger("next.owl.carousel")
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.16/build/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const inputs = document.querySelectorAll(".phone-input");

        inputs.forEach(input => {
            var iti = window.intlTelInput(input, {
                nationalMode: true,
                preferredCountries: ['ae'],
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.16/build/js/utils.js",
            });

            function updateDialCode() {
                var selectedCountryData = iti.getSelectedCountryData();
                $(input.parentNode).find('#country-code').remove();
                $(input.parentNode).find('.iti__selected-flag').append("<div id='country-code'style='padding-left: 5px;'>" + "+" + selectedCountryData.dialCode + "</div>");
            }
            input.addEventListener("countrychange", updateDialCode);
            updateDialCode();
        });
    });
</script>
<script>
    $('#phone-f').on('input', function() {
        $('#phone-f').val($('#phone-f').val().replace(/[^0-9]/g, ''));
    });
</script>
<script>
    $('#phone_r').on('input', function() {
        $('#phone_r').val($('#phone_r').val().replace(/[^0-9]/g, ''));
    });
</script>
<script>
    $('#phone_b').on('input', function() {
        $('#phone_b').val($('#phone_b').val().replace(/[^0-9]/g, ''));
    });
</script>
<script>
    $(document).ready(function() {
        $('#owl-gallery').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#owl-amen').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: false,
            autoplayTimeout: 2000,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    });
</script>
</body>

</html>