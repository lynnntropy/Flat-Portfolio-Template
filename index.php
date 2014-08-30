<html>

    <head>
        <meta charset="utf-8">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

        <script src="bower_components/platform/platform.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Roboto:500,700,400,100,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">

        <link rel="import" href="bower_components/paper-checkbox/paper-checkbox.html">
        <link rel="stylesheet" href="bower_components/paper-shadow/paper-shadow.css">
        <link rel="import" href="bower_components/paper-tabs/paper-tabs.html">
        <link rel="import" href="bower_components/paper-button/paper-button.html">
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
                            <div align="center">Projects go here!</div>
                        </div>

                        <div class="contact panel-faded-out inactive-content">
                            <div align="center">Contact and social stuff goes here!</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                Want your portfolio to look like this? Get the template <a href="#">here</a>!<br />
                (c) Veselin Romić 2014
            </div>
        </div>

        <script type="text/javascript" src="main.js"></script>
    </body>

</html>