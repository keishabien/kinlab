<?php include 'header.php' ?>
    <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
    <script src="js/kinlab_add.js"></script>

    <script>
        var canvas, stage, exportRoot;
        function init() {
            // --- write your JS code here ---

            canvas = document.getElementById("canvas");
            images = images||{};

            var loader = new createjs.LoadQueue(false);
            loader.addEventListener("fileload", handleFileLoad);
            loader.addEventListener("complete", handleComplete);
            loader.loadManifest(lib.properties.manifest);
        }

        function handleFileLoad(evt) {
            if (evt.item.type == "image") { images[evt.item.id] = evt.result; }
        }

        function handleComplete(evt) {
            exportRoot = new lib.kinlab_add();

            stage = new createjs.Stage(canvas);
            stage.addChild(exportRoot);
            stage.update();

            createjs.Ticker.setFPS(lib.properties.fps);
            createjs.Ticker.addEventListener("tick", stage);
        }

    </script>

    <!-- all content goes here;
    content is wrapper in a main tag and a div with container class -->

    <div class="row">
        <div class="twelve columns" style="position:relative;">
            <img src="images/baby_logo.jpg" alt="" class="u-max-full-width">
        </div>
    </div>

    <div class="row mission" id="mission">
        <div class="twelve columns">
            <h1 class="missionh1">Our mission is to help you build your family, <br>
                <i style=" color: #ED811E">exactly the way you want it.</i></h1>
            <p>Kinlab is a safe and friendly place to help a couple build a family by <br>choosing the characteristics
                of their baby based on the genes of both parents.</p>
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
    <hr>

    <div class="row" id="clients">
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

<div class="row">
    <div class="twelve columns" style="text-align: center;margin: 0 auto;">
        <canvas id="canvas" width="728" height="90"></canvas>
    </div>

</div>
    <!-- the div and main closes after here -->
    <hr>
<div class="row">
    <div class="twelve columns" id="staff">
        <h1>
<!--            <i class="fa fa-user-md fa-3x" aria-hidden="true"></i>-->
<!--            <br/>-->
            Our Team
        </h1>
    </div>
</div>
<div class="row">
    <div class="twelve columns staff-index">
        <div class="row staff-img">
            <div class="seven columns">
                <img src="images/team.jpg" alt="team">
            </div>
            <div class="five columns staff-div orange">
                <blockquote>Find the right doctor for you.</blockquote>
                <p>Learn more about our team, and how our skilled professionals can deliver you a perfect baby. Our expert team will provide quality care to you and your infant, while reassuring you of our expert edge process.</p>
                <a href="staff.php">
                    <button class="kinlab-button">Discover more</button>
                </a>
            </div>
        </div>
    </div>
</div>

<hr>

    <div class="row" id="contact">
        <div class="twelve columns">
            <h1>Visit Our Office</h1>

            <p>Kinlab can offer you the best in prental genetric modification and care, so you can feel confident in
                having the best baby possible. Schedule an appointment to tour our office and meet with one of our
                doctors today!</p>
        </div>
    </div>

    <div class="row">
        <div class="four columns">

            <h2 class="orange"><i class="fa fa-map-marker fa-2x"></i> Kinlab</h2>
            <p>2200 Oakwood Drive<br>
                Beverly Hills, CA 90201</p>

            <ul class="contact-list">
                <li><i class="fa fa-phone"></i> 555-612-5869</li>
                <li><i class="fa fa-fax"></i> 555-612-5870</li>
                <li><i class="fa fa-envelope"></i> info@kinlab.com</li>
            </ul>


        </div>
        <div class="four columns">
            <iframe src="http://www.map-generator.org/ac48dded-5f33-4a74-8a2e-cef580bb393c/iframe-map.aspx" scrolling="no" width="300px" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>


        <div class="four columns">
            <img src="images/buildingexterior.jpg" alt="" class="u-max-full-width">
        </div>
    </div>

    <!-- the div and main closes after here -->

<?php include 'footer.php' ?>