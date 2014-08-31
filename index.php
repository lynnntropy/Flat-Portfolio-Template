<html>

    <head>
        <meta charset="utf-8">
        <script src="bower_components/platform/platform.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

        <script src="js/bootstrap.min.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Roboto:500,700,400,100,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">

        <link rel="import" href="bower_components/polymer/polymer.html">

        <link rel="import" href="bower_components/core-icons/core-icons.html">

        <link rel="import" href="bower_components/paper-checkbox/paper-checkbox.html">
        <link rel="stylesheet" href="bower_components/paper-shadow/paper-shadow.css">
        <link rel="import" href="bower_components/paper-tabs/paper-tabs.html">
        <link rel="import" href="bower_components/paper-button/paper-button.html">

        <link rel="import" href="bower_components/paper-input/paper-input.html">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="lightbox/js/lightbox.min.js"></script>
        <link href="lightbox/css/lightbox.css" rel="stylesheet" />
    </head>

    <body>

        <div class="container">
            <div class="main-paper card paper-shadow-top-z-1">
                <div class="card-inner paper-shadow-bottom-z-1">
                    <div class="name-header">
                        <div class="name">Veselin Romić</div>
                        <div class="subtitle">Software Developer. UX Designer. Tinkerer.</div>

                        <div id="header-tabs">
                            <paper-tabs selected="0" class="transparent-teal">

                                <paper-tab id="about-me-tab">ABOUT ME</paper-tab>
                                <paper-tab id="projects-tab">PROJECTS</paper-tab>
                                <paper-tab id="contact-tab">CONTACT</paper-tab>

                            </paper-tabs>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="about-me panel-faded-in active-content">
                            <h1>Who am I?</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                            <h1>What do I do?</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>

                            <h2>Let's build the future together.</h2>
                            <small>Get in touch, and let me help you make your next great idea come to life.</small>

                            <div id="contact-button-div">
                                <paper-button id="contact-button" raisedButton class="colored" label="Contact"></paper-button>
                            </div>
                        </div>

                        <div class="projects panel-faded-out inactive-content">

                            <div class="project">
                                <div class="project-title">First fancy project</div>

                                <div class="image-card card paper-shadow-top-z-1">
                                    <div class="card-inner paper-shadow-bottom-z-1">
                                        <a data-lightbox="first-project" href="img/stock_photos/penguin-429125_640.jpg">
                                            <div class="card-image" style="background-image: url('img/stock_photos/penguin-429125_640.jpg')"></div>
                                            <div class="image-zoom-hint">click to enlarge</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="image-card card paper-shadow-top-z-1">
                                    <div class="card-inner paper-shadow-bottom-z-1">
                                        <a data-lightbox="first-project" href="img/stock_photos/penguins-429128_640.jpg">
                                            <div class="card-image" style="background-image: url('img/stock_photos/penguins-429128_640.jpg')"></div>
                                            <div class="image-zoom-hint">click to enlarge</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="image-card card paper-shadow-top-z-1">
                                    <div class="card-inner paper-shadow-bottom-z-1">
                                        <a data-lightbox="first-project" href="img/stock_photos/bible-428947_640.jpg">
                                            <div class="card-image" style="background-image: url('img/stock_photos/bible-428947_640.jpg')"></div>
                                            <div class="image-zoom-hint">click to enlarge</div>
                                        </a>
                                    </div>
                                </div>

                                <p class="important-details"><b>Skills used:</b> Very fancy skills, Fancier skills, Extremely fancy skills.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="project">
                                <div class="project-title">Second fancy project</div>

                                <div class="image-card card paper-shadow-top-z-1">
                                    <div class="card-inner paper-shadow-bottom-z-1">
                                        <a data-lightbox="second-project" href="img/stock_photos/clouds-429228_640.jpg">
                                            <div class="card-image" style="background-image: url('img/stock_photos/clouds-429228_640.jpg')"></div>
                                            <div class="image-zoom-hint">click to enlarge</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="image-card card paper-shadow-top-z-1">
                                    <div class="card-inner paper-shadow-bottom-z-1">
                                        <a data-lightbox="second-project" href="img/stock_photos/flowers-429041_640.jpg">
                                            <div class="card-image" style="background-image: url('img/stock_photos/flowers-429041_640.jpg')"></div>
                                            <div class="image-zoom-hint">click to enlarge</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="image-card card paper-shadow-top-z-1">
                                    <div class="card-inner paper-shadow-bottom-z-1">
                                        <a data-lightbox="second-project" href="img/stock_photos/pistachio-428544_640.jpg">
                                            <div class="card-image" style="background-image: url('img/stock_photos/pistachio-428544_640.jpg')"></div>
                                            <div class="image-zoom-hint">click to enlarge</div>
                                        </a>
                                    </div>
                                </div>

                                <p class="important-details"><b>Skills used:</b> Very fancy skills, Fancier skills, Extremely fancy skills.</p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <div class="project">
                                <div class="project-title">Third fancy project</div>

                                <div class="image-card card paper-shadow-top-z-1">
                                    <div class="card-inner paper-shadow-bottom-z-1">
                                        <a data-lightbox="third-project" href="img/stock_photos/shoes-428608_640.jpg">
                                            <div class="card-image" style="background-image: url('img/stock_photos/shoes-428608_640.jpg')"></div>
                                            <div class="image-zoom-hint">click to enlarge</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="image-card card paper-shadow-top-z-1">
                                    <div class="card-inner paper-shadow-bottom-z-1">
                                        <a data-lightbox="third-project" href="img/stock_photos/sunset-429618_640.jpg">
                                            <div class="card-image" style="background-image: url('img/stock_photos/sunset-429618_640.jpg')"></div>
                                            <div class="image-zoom-hint">click to enlarge</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="image-card card paper-shadow-top-z-1">
                                    <div class="card-inner paper-shadow-bottom-z-1">
                                        <a data-lightbox="third-project" href="img/stock_photos/raspberry-427390_640.jpg">
                                            <div class="card-image" style="background-image: url('img/stock_photos/raspberry-427390_640.jpg')"></div>
                                            <div class="image-zoom-hint">click to enlarge</div>
                                        </a>
                                    </div>
                                </div>

                                <p class="important-details"><b>Skills used:</b> Very fancy skills, Fancier skills, Extremely fancy skills.</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>

                        <div class="contact panel-faded-out inactive-content">

                            <div class="social-buttons">


                                <a href="http://github.com/omegavesko" class="btn btn-default contact-social-button">
                                    <i class="fa fa-github-alt"></i>
                                    Github
                                </a>


                                <a href="http://facebook.com/omegavesko" class="btn btn-default contact-social-button">
                                    <i class="fa fa-facebook-square"></i>
                                    Facebook
                                </a>

                                <a href="http://omegavesko.tumblr.com" class="btn btn-default contact-social-button">
                                    <i class="fa fa-tumblr-square"></i>
                                    Tumblr
                                </a>

                                <a href="http://twitter.com/omegavesko" class="btn btn-default contact-social-button">
                                    <i class="fa fa-twitter"></i>
                                    Twitter
                                </a>

                            </div>

                            <div class="contact-tagline">You have the dream, I make the magic.</div>
                            <div class="email"><i class="fa fa-envelope-o"></i> andy.anderson@andy.co</div>

                            <div class="form-separator">- or -</div>
                            <div class="contact-form">
<!--                                <section>-->
<!--                                    <paper-input label="Your name" required error="Hey, I need this!"></paper-input>-->
<!--                                    <paper-input label="Your email"></paper-input>-->
<!--                                    <paper-input multiline label="Your email" style="height: 150px;"></paper-input>-->
<!--                                </section>-->

                                <form class="form-horizontal">
                                    <fieldset>
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control input-md" required="">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control input-md" required="">
                                        <textarea class="form-control" id="body" name="body">Message body</textarea>

                                        <button id="messageSubmitButton" name="submitbutton" class="btn btn-primary">Send</button>

                                    </fieldset>
                                </form>


                                <!--                                <paper-input multiline rows="4" label="Message body"></paper-input>-->
<!--                                <br><paper-input multiline label="This input is 3 rows high" style="height: 200px;"></paper-input>-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                Want your portfolio to look like mine? Get the template <a href="#">here</a>!<br />
                Veselin Romić © 2014
            </div>
        </div>

        <script type="text/javascript" src="main.js"></script>
    </body>

</html>