<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>SKYLIFT Home Elevators</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/poin.png">
    <!-- Fonts (google font) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font awesome Stylesheet -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Modal Video stylesheet -->
    <link rel="stylesheet" href="css/modal-video.min.css">
    <!-- Owl theme stylesheet -->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- AOS stylesheet -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- Animated heading stylesheet -->
    <link rel="stylesheet" href="css/jquery.animatedheadline.css">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    {{-- <main class="home-one overflow-x-hidden"> --}}
        <!-- start preloader -->
        <div class="placeholder-cs">
            <div class="preloader">
                <div class="preloader-inner"></div>
            </div>
        </div>



        @include('layouts.header')

        @yield('main-content')

        @include('layouts.footer')
            {{-- </div>
        </div>
    </main> --}}
    <!-- Jquery script -->
    <script src="js/jquery-3.6.4.min.js"></script>
    <!-- Bootstrap Script -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Font awesome script -->
    <script src="js/all.min.js"></script>
    <!-- Modal video script -->
    <script src="js/jquery-modal-video.min.js"></script>
    <!-- Owl carousel script -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- AOS script -->
    <script src="js/aos.js"></script>
    <!-- jQuery Counterup -->
    <script src="js/jquery.waypoints.min.js"></script>

    <!-- Preloader script -->
    <script src="js/jquery.preloader.min.js"></script>
    <!-- Jquery viewport checker script -->
    <script src="js/jquery.viewportchecker.min.js"></script>
    <!-- textyle script -->
    <script src="js/textyle.min.js"></script>
    <!-- animated headline script -->
    <script src="js/jquery.animatedheadline.min.js"></script>
    <!-- Main JS script -->
    <script src="js/gsap.min.js"></script>
    <script src="js/ScrollSmoother.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/SplitText.min.js"></script>
    <script src="js/main.js"></script>

    @yield('script')

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        behavior: 'smooth',
                        top: targetElement.offsetTop,
                    });
                }
            });
        });
    </script>

<script>
    $('.mail_btnss').on("click", function() {
        checkusername1();
        checkphonenumber1();
        checkemail();
        message1();
        checkmessages();

        if (checkusername1() == true && checkphonenumber1() == true && checkemail() == true && message1() == true && checkmessages() == true ) {
            $('.mail_btnss').attr('type', 'submit');
        } else {
            $('.mail_btnss').attr('type', 'button');
        }


    });
  $(".name1").on("input", function(){
        checkusername1();
    })
    $(".numbers1").on("input", function(){
        checkphonenumber1();
    })
    $(".email").on("input", function(){
        checkemail();
    })
    $(".how1").on("input", function(){
        message1();
    })
    $(".messageinput").on("input", function(){
        checkmessages();
    })


function checkusername1() {
    let username = $('.name1').val();
    var pattern = /^[a-zA-Z ]+$/;

    if (username.trim() === '') {
        $(".message311").html("*Please fill in the name");
        $(".message311").show();
        return false;
    } else if (username.length < 3 ) {
        $('.message311').html("*Name should have at least 3 and less than 30 characters");
        $('.message311').show();
        return false;



}
    else if (!pattern.test(username)) {
        $('.message311').html("*Please enter a valid name");
        $('.message311').show();
        return false;
    } else if (username.length  > 30)
    {
         $('.message311').html("*Name should have at Maximum  30 characters");
        $('.message311').show();
        return false;
    }

    else {
        $('.message311').hide();
        return true;
    }
}
function checkphonenumber1() {
    let Phonenumber = $(".numbers1").val(); // Get the value of the phone number field

    if (Phonenumber == '') {
        $('.message331').html("*Please fill the Phone number");
        $('.message331').show();
        return false;
    } else if (!/^[6-9]\d{9}$/.test(Phonenumber)) {
        $('.message331').html("*Please enter a valid 10-digit number");
        $('.message331').show();
        return false;
    } else if (/^(\d)\1+$/.test(Phonenumber)) {
        $('.message331').html("*Please enter a number with different digits");
        $('.message331').show();
        return false;
    } else {
        $('.message331').hide();
        return true;
    }
}

        function checkemail() {
    let email = $(".email").val();
    mail = /^([A-Za-z0-9_.])+\@([a-z])+\.([a-z])+$/;

    if (email.trim() === '') {
        $('.message21').html("Email is required"); // Display an error message
        $('.message21').show();
        return false;
    } else if (!(mail.test(email))) {
        $('.message21').html("Enter a valid email address"); // Display an error message
        $('.message21').show();
        return false;
    } else {
        $('.message21').hide();
        return true;
    }
}

    function message1() {
        let username = $('.how1').val();
        var pattern = /^[a-zA-Z ]+$/;

        if (username == '') {
            $(".message361").html("Enter the location");
            $(".message361").show();
            return false
        } else if (username.length < 3) {
        $(".message361").html("Location must be at least 3 characters long");
        $(".message361").show();
        return false;
    } else if (!pattern.test(username)) {
        $('.message361').html("*Enter the location");
        $('.message361').show();
        return false;
    }else if (username.length  > 30){
         $('.message361').html("*Location should have at Maximum  30 characters");
        $('.message361').show();
        return false;
    }
         else {
            $('.message361').hide();
            return true
        }

    }
    // function checkmessages()
    // {
    //     let footmsg = $('.messageinput').val();
    //     if(footmsg.trim() !== '')
    //     {
    //          if (footmsg.length < 3 ) 
    //          {
    //     $(".message362").html("Message must be at least 3 characters long");
    //     $(".message362").show();
    //     return false;
    //           }
    //     else
    //     {
    //         $('.message362').hide();
    //         return true;
    //     }
    //     }
    // return true;
    // }
    function checkmessages(){
    let footmsg = $('.messageinput').val();
    if(footmsg.trim() !== ''){
        if (footmsg.length < 3 ) {
            $(".message362").html("Message must be at least 3 characters long");
            $(".message362").show();
            return false;
        } else if (footmsg.length > 50) {
            $(".message362").html("Message cannot exceed 50 characters");
            $(".message362").show();
            return false;
        } else {
            $('.message362').hide();
            return true;
        }
    }
    return true;
}


</script>

<script>
    const aboutMenuItem = document.querySelector('.clbtre');
const contactMenuItem = document.querySelector('.clbtre1');
const closeButton = document.getElementById('closeButton');

// Add click event listeners to the menu items
aboutMenuItem.addEventListener('click', () => {
    // Trigger a click event on the close button
    closeButton.click();
});

contactMenuItem.addEventListener('click', () => {
    // Trigger a click event on the close button
    closeButton.click();
});

    </script>


<script>
    function phone2(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }
</script>
<script>

    function updateActiveLink() {
      const sections = document.querySelectorAll('section');
      const navbarLinks = document.querySelectorAll('.menu .menu-link');

      sections.forEach((section, index) => {
        const rect = section.getBoundingClientRect();
        const isInViewport = rect.top <= 50 && rect.bottom >= 50;

        if (isInViewport) {
          navbarLinks.forEach(link => link.classList.remove('active'));
          navbarLinks[index].classList.add('active');
        }
      });
    }


    window.addEventListener('scroll', updateActiveLink);
    window.addEventListener('resize', updateActiveLink);
  </script>

<script>
    $('.redirect').on('click',function(){
        window.location.href = '/';
    })
</script>
<script>
    $('.redirect1').on('click',function(){
        window.location.href = '/#about';
    })
</script>
<script>
    $('.redirect2').on('click',function(){
        window.location.href = '/#ourproduct';
    })
</script>
<script>
    $('.redirect3').on('click',function(){
        window.location.href = '/#contactus';
    })
</script>



</body>

</html>