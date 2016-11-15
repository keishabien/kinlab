<?php include 'header.php' ?>

    <!-- all content goes here;
    content is wrapper in a main tag and a div with container class -->
    <div class="row">
        <div class="twelve columns">
            <h1>Visit Our Office</h1>

            <p>Kinlab can offer you the best in prental genetric modification and care, so you can feel confident in
                having the best baby possible. Schedule an appointment to tour our office and meet with one of our
                doctors today!</p>
        </div>
    </div>

    <div class="row" id="location">
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
            <iframe src="http://www.map-generator.org/ae86f991-edcb-4a61-80cc-634fd21e3e13/iframe-map.aspx"
                    scrolling="no" width="300px" height="200px" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"></iframe>
        </div>


        <div class="four columns">
            <img src="images/buildingexterior.jpg" alt="" class="u-max-full-width">
        </div>
    </div>

    <div class="row">
        <div class="four columns">
            <img src="images/office.jpg" alt="" class="u-max-full-width">
        </div>
        <div class="four columns">
            <img src="images/doctoroffice.jpg" alt="" class="u-max-full-width">
        </div>
        <div class="four columns">
            <img src="images/treatmentroom.jpg" alt="" class="u-max-full-width">
        </div>
    </div>
    <div class="u-cf" style="height:20px;"></div>
    <div class="row" id="message">
        <h3>Message Us</h3>

        <form>
            <div class="row">
                <div class="row">
                    <div class="six columns">
                        <label for="Input">Your First Name</label>
                        <input class="u-full-width" placeholder="first name" id="firstName" type="text">
                    </div>
                    <div class="six columns">
                        <label for="Input">Your Last Name</label>
                        <input class="u-full-width" placeholder="last name" id="lastName" type="text">
                    </div>
                </div> <!-- end row  -->


                <div class="row">
                    <div class="six columns">
                        <label for="Input">Partner's First Name</label>
                        <input class="u-full-width" placeholder="first name" id="firstName" type="text">
                    </div>
                    <div class="six columns">
                        <label for="Input">Partner's Last Name</label>
                        <input class="u-full-width" placeholder="last name" id="lastName" type="text">
                    </div>
                </div> <!-- end row  -->

                <div class="row">
                    <div class="six columns">
                        <label for="Input">Email Address</label>
                        <input class="u-full-width" placeholder="email address" id="email" type="text">
                    </div>

                    <div class="six columns">
                        <label for="Input">Telephone</label>
                        <input class="u-full-width" placeholder="telephone" id="telephone" type="text">
                    </div>


                    <!-- end row  -->

                    <div class="row">
                        <div class="eight columns">
                            <label for="Input">Street Address</label>
                            <input class="u-full-width" placeholder="street Address" id="streetAddress" type="text">
                        </div>
                        <div class="four columns">
                            <label for="Input">Suite No.</label>
                            <input class="u-full-width" placeholder="suite no." id="suiteNo" type="text">
                        </div>
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="six columns">
                            <label for="Input">City</label>
                            <input class="u-full-width" placeholder="city" id="city" type="text">
                        </div>
                        <div class="four columns dropdown">
                            <label for="Input">State</label>
                            <select>
                                <option value="select">- select -</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="two columns">
                            <label for="Input">Zipcode</label>
                            <input class="u-full-width" placeholder="postal" id="postal" type="text">
                        </div>
                    </div> <!-- end row -->


                    <div class=" twelve columns">
                        <input type="text" name="date1" id="date1" class="form-control" data-select="date"
                               placeholder="preferred date">
                        <span class="input-group-btn">
  <button class="btn btn-primary" type="button" data-toggle="select"><i class="fa fa-calendar"></i></button>
</span>
                    </div>
                    <label class="twelve columns example-send-yourself-copy">
                        <input type="checkbox">
                        <span class="label-body">Send me a reminder</span>
                    </label>
                </div>


                <!--   <input class="kinlab-button" value="Submit" type="submit" onclick="return confirm('Are you sure?')">
                 -->


        </form>
</div>
       <button class="kinlab-button" value="Submit" type="submit" onclick="window.location.href='contact-confirmation.php'">Submit</button>

    </div>
    <!-- the div and main closes after here -->
<?php include 'footer.php' ?>