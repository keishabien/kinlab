<?php include 'header.php' ?>

    <!-- all content goes here;
    content is wrapper in a main tag and a div with container class -->
    <div class="row mission">
        <div class="twelve columns ">
            <h1 class="missionh1">Our mission is to help you build your family, <br>
                <i style=" color: #ED811E">exactly the way you want it.</i></h1>
        </div>
        <div class="five columns">
            <ul class="mission_ul">
                <li>expert genetic testing and recombination</li>
                <li>state of the art facilities</li>
                <li>compassionate staff</li>
                <li>healthy babies with the traits you select</li>
            </ul>
        </div>
        <div class="six columns">
            <img src="images/family_mission.jpg" alt="family" class="clientimage" id="family_mission">
        </div>
    </div>
    <div class="row orange mission_buttons">
        <div class="four columns"><i class="fa fa-map fa-5x"></i><br><br>
            <h3>read about the process</h3><br>
            <a href="procedure.php">
                <button class="kinlab-button"> learn more</button>
            </a>
        </div>
        <div class="four columns"><i class="fa fa-calendar-check-o fa-5x"></i><br><br>
            <h3>meet our doctors</h3>
            <br>
            <a href="staff.php">
                <button class="kinlab-button"> profiles</button>
            </a>
        </div>
        <div class="four columns"><i class="fa fa-hospital-o  fa-5x"></i><br><br>
            <h3>visit our facility</h3><br>
            <a href="contact.php">
                <button class="kinlab-button"> location</button>
            </a>
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
<?php include 'footer.php' ?>