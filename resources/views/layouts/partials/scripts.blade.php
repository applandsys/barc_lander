 <!-- ========================= JS here ========================= -->
         <!-- Bootstrap.Min js -->
         <script src="assets/js/bootstrap.min.js"></script>
         <!-- Wow-Min js -->
         <script src="assets/js/wow.min.js"></script>
         <!-- Tiny-Slider js -->
         <script src="assets/js/tiny-slider.js"></script>
         <!-- Glightbox-Min js -->
         <script src="assets/js/glightbox.min.js"></script>
         <!-- Count-up js -->
         <script src="assets/js/count-up.min.js"></script>
         <!-- Main js-->
         <script src="assets/js/main.js"></script>
         <script type="text/javascript">
             //========= testimonial
             tns({
                 container: '.testimonial-slider',
                 items: 3,
                 slideBy: 'page',
                 autoplay: false,
                 mouseDrag: true,
                 gutter: 0,
                 nav: true,
                 controls: false,
                 controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
                 responsive: {
                     0: {
                         items: 1,
                     },
                     540: {
                         items: 1,
                     },
                     768: {
                         items: 2,
                     },
                     992: {
                         items: 3,
                     },
                     1170: {
                         items: 3,
                     }
                 }
             });

             //========= glightbox
             GLightbox({
                 'href': 'assets/images/video/video.mp4',
                 'type': 'video',
                 'source': 'youtube', //vimeo, youtube or local
                 'width': 900,
                 'autoplayVideos': true,
             });

             //====== counter up
             var cu = new counterUp({
                 start: 0,
                 duration: 2000,
                 intvalues: true,
                 interval: 100,
                 append: " ",
             });
             cu.start();


             window.onscroll = function () {
                 var header_navbar = document.querySelector(".navbar-area");
                 var sticky = header_navbar.offsetTop;

                 // show or hide the back-top-top button
                 var backToTo = document.querySelector(".scroll-top");
                 if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                     backToTo.style.display = "flex";
                 } else {
                     backToTo.style.display = "none";
                 };

                 if (window.pageYOffset > sticky) {
                     header_navbar.classList.add("sticky");
                 } else {
                     header_navbar.classList.remove("sticky");
                 }

                 var logo = document.querySelector('.style2.navbar-brand img')
                 if (window.pageYOffset > sticky) {
                     logo.src = 'assets/images/logo/logo.svg';
                 } else {
                     logo.src = 'assets/images/logo/white-logo.svg';
                 };

             };

         </script>
         <!-- <script type="text/javascript">
         $(document).on('click','nav-item ul', function({
             $(this).addClass('active').siblings().removeClass('active')
         })
         )


         </script> -->
