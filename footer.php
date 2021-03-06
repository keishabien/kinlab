<!-- closes content area -->
</div>
</main>

<footer>
    <div class="container">


        <div class="row">

            <div class="three columns">
                <img src="images/logo_dna.png" alt="">
                <p>&copy; Kinlab 2016</p>
            </div>
            <div class="nine columns footer-links">
                <p>
                    <a href="index.php">Home</a>
                    <a href="index.php#mission">Our Mission</a>
                    <a href="clients.php">Our Clients</a>
                    <a href="staff.php">Our Staff</a>

                    <a href="contact.php">Contact Us</a>
                    <a href="procedure.php">Get Started</a>
                </p>
            </div>


        </div>


        <a id="myBtn">
            <small>Disclaimer | Created by students at Minneapolis Community &amp; Technical College.</small>
        </a>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="kinlab-modal-content">
                <span class="close">x</span>
                <h1>disclaimer</h1>
                <p>Kinlab provides absolutely no services. The information provided on this website is entirely
                    theoretical and as such includes absolutely no warranty or obligation of any kind. Kinlab does not
                    accept any responsibility or liability for the accuracy, content, completeness, legality, or
                    reliability of the information contained on this website. Any attempts to contact Kinlab or attempt
                    to oblige use of any of its listed services will be void. No warranties, expressed or implied,
                    promises, expressed or implied, and/or representations of any kind, expressed or implied, are given
                    within the information provided within this website. Kinlab and the Kinlab logo are mock trademarks
                    and represent no known legal or business entity. </p>


            </div>  <!-- end modal -->


        </div>


    </div>
</footer>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.dateselect.min.js"></script>
<script type="text/javascript" src="js/kinlab-modal.js"></script>
<script type="text/javascript">

    // Making the mobile navigation menu behave well
    $(".menu-icon").click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(".main-navigation").slideToggle(500);

        // This closes the mobile nav when a link is clicked (as page scrolls down)
        $('.main-navigation li').click(function(){
            $('.main-navigation').slideUp(500);
        });
    });

    // Nice looking page scrolling - good with jump navigations
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>


</body>
</html>