<?php include 'header.php' ?>

    <!-- all content goes here;
    content is wrapper in a main tag and a div with container class -->

<div class="row">
    <div class="twelve columns" style="position:relative;">
        <h1 class="extra-header">creating miracles every day</h1>
        <img src="images/baby_homepage.jpg" alt="" class="u-max-full-width">
    </div>
</div>

    <div class="row">
        <div class="twelve columns" style="margin-top: 20px"><h1>Our Clients</h1></div>
        <div class="seven columns">

            <div class="w3-content w3-display-container">
                <img class="mySlides" src="images/family1.jpg" style="width:100%">
                <img class="mySlides" src="images/family2.jpg" style="width:100%">
                <img class="mySlides" src="images/family3.jpg" style="width:100%">
                <img class="mySlides" src="images/family4.jpg" style="width:100%">
                <img class="mySlides" src="images/family5.jpg" style="width:100%">

            </div>

            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 3000); // Change image every 2 seconds
                }

            </script>
        </div>
        <div class="four columns orange">
            <blockquote>Kinlab wants to help you expand your family. Check out the stories of some of our satisfied
                clients.
            </blockquote>
            <a href="clients.php">
                <button class="kinlab-button"> learn more</button>
            </a>
        </div>

    </div>
    <!-- the div and main closes after here -->

    <div class="twelve columns staff-index-h1">
        <h1>
            <i class="fa fa-user-md fa-3x" aria-hidden="true"></i>
            <br/>
            Our Team
        </h1>
    </div>
    <div class="twelve columns staff-index">
        <div class="row staff-img">
            <div class="seven columns">
                <img src="images/team.jpg" alt="team">
            </div>
            <div class="five columns staff-div orange">
                <blockquote>Find the right doctor for you.</blockquote>
                <a href="staff.php">
                    <button class="staff-button">Discover more</button>
                </a>
            </div>
        </div>
    </div>

    <!-- the div and main closes after here -->

<?php include 'footer.php' ?>