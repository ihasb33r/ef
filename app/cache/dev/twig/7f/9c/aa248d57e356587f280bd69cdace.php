<?php

/* AcmeUserBundle:Default:base.html.twig */
class __TwigTemplate_7f9caa248d57e356587f280bd69cdace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
    <!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
        <!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
            <!--[if gt IE 8]><!--> <html lang=\"en\"> <!--<![endif]-->
                <head>
                    <meta charset=\"utf-8\" />

                    <!-- Set the viewport width to device width for mobile -->
                    <meta name=\"viewport\" content=\"width=device-width\" />

                    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

                    <!-- Included CSS Files -->
                    <link rel=\"stylesheet\" href=\"http://ihasb33r.com/stylesheets/foundation.css\">
                    <link rel=\"stylesheet\" href=\"http://ihasb33r.com/stylesheets/app.css\">
                    <link href='http://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>


                    <!--[if lt IE 9]>
                    <link rel=\"stylesheet\" href=\"stylesheets/ie.css\">
                    <![endif]-->


                    <!-- IE Fix for HTML5 Tags -->
                    <!--[if lt IE 9]>
                    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
                    <![endif]-->



                    <style>
                        body
                        { 
                            padding-bottom:200px;
                            padding-top:20px;
                            background-color:#3591a5;
                            background-image:url('/ef/web/images/background-bottom.png');
                            background-repeat:repeat-x;
                            background-position:bottom center; 
                        }
                        .article {
                            padding-top:20px;
                            padding-bottom:10px;
                            background-color:white;
                            border-bottom-left-radius:15px;
                            border-bottom-right-radius:15px;
                            background:url(\"/ef/web/images/stripe.png\");
                            margin-bottom:20px;
                        }
                        .header {
                            background:url(\"/ef/web/images/stripe.png\");
                        }
                        .header h3 {
                            padding-left:30px;
                        }
                        img.profile{
                            margin-bottom:20px;
                            margin-left:20px;
                            width:auto;
                        }
                        .container{
                            margin-bottom:230px;
                        }
                        .photo{
                            text-align:center;
                        }
                        .map {
                            text-align:center;
                        }
                        .map img {
                            margin-right:20px;
                            margin-left:-10px;
                        }
                        .phone {
                            border-radius:10px;
                            background:url(\"/ef/web/images/stripe.png\");
                            text-align:center;
                            height:125px;

                        }
                        .phonehelp {
                            margin-bottom:0px;
                            margin-top:20px;
                            font-weight:bold;
                        }
                        .phone h2{
                            margin-top:5px;
                            color:green;
                            margin-bottom:0px;
                        }
                        .phonetax{
                            font-style:italic;
                            margin-top:0px;
                        }
                        .content {
                            position:relative;
                        }

                        .top{
                            vertical-align:baseline;
                            margin-bottom:35px;
                        }
                        .sidebar {
                            padding-top:35px;
                        }
                        .form {
                            padding-left:10px;
                        }


                    </style>
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>

                </head>
                <body>
                    <div class=\"container top\">
                        <div class=\"row\">
                            <div class=\"seven columns top\">
                                <img src=\"/ef/web/images/logo.png\">
                            </div>
                            <div class=\"three offset-by-two columns top phone\">
                                <p class=\"phonehelp\">
                                Για βοήθεια καλέστε:
                                </p>
                                <h2>12345</h2>
                                <p class=\"phonetax\">
                                Αστική Χρέωση
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"nine columns\">
                        
    ";
        // line 140
        $this->displayBlock('content', $context, $blocks);
        // line 141
        echo "                            </div>
                            <div class=\"three columns sidebar\">
    ";
        // line 143
        $this->displayBlock('sidebar', $context, $blocks);
        // line 144
        echo "                            </div>
                        </div>
                    </div>
                </body>
            </html>

";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 140
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 143
    public function block_sidebar($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:base.html.twig";
    }

}
