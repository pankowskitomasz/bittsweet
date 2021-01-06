<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
        <!--[if lt IE 9]>
        <script type="text/javascript" 
            src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
        </script>
        <script type="text/javascript"
            src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
        </script>
        <![endif]-->
        <link rel="icon"
            href="img/favicon.png">
        <link rel="stylesheet" 
            type="text/css"
            href="css/styles.min.css">
        <link rel="stylesheet" 
            type="text/css"
            href="css/font-awesome.min.css">
        <title>BittSweet Cafe | Message sent</title>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.html" class="navbar-text font-logo">
                        <img src="img/navbar-logo.png" alt="logo">
                        <strong>BittSweet</strong>
                    </a>
                    <button class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#main-nav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right text-uppercase font-menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About us</a>
                        </li> 
                        <li>
                            <a href="menu.html">Menu</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="staff.html">Staff</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid confirm-s1 p-40 opacity-9 d-flex">
            <div class="row mx-auto my-auto">
                <div class="alert alert-info text-center w-65vw">
                    <h3 class="font-header">Message sent!</h3>
                    <table class="table table-hover text-left">
                        <thead>
                            <tr>
                                <th colspan="2" class="font-header">Summary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First name</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fname']))
                                        echo htmlspecialchars($_POST['fname']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Last name</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['lname']))
                                        echo htmlspecialchars($_POST['lname']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fphone']))
                                        echo htmlspecialchars($_POST['fphone']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fmail']))
                                        echo htmlspecialchars($_POST['fmail']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fmsg']))
                                        echo htmlspecialchars($_POST['fmsg']);
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="contact.html" 
                        class="btn btn-lg btn-info">OK</a>
                </div>
            </div>
        </div>
        <footer class="container-fluid text-center bg-blk text-white p-20">
            <div class="row">
                <ul class="list-inline icon-list">
                    <li>
                        <a href="https://www.facebook.com"
                            rel="noopener noreferrer nofollow">
                            <span class="fa fa-facebook-f"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com"
                            rel="noopener noreferrer nofollow">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com"
                            rel="noopener noreferrer nofollow">
                            <span class="fa fa-instagram"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row border-bottom border-white">
                 <ul class="list-inline text-uppercase font-menu footer-menu p-20">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About us</a>
                    </li> 
                    <li>
                        <a href="menu.html">Menu</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="staff.html">Staff</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="row font-menu pt-20">
                <div class="col-xs-12 col-md-6">
                    <p class="">
                       Copyright &copy; 2019-2021 Tomasz Pankowski
                    </p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <ul class="list-inline footer-menu">
                        <li>
                            <a href="privacy.html">
                                Privacy &amp; Cookies
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>       
        <div class="modal" id="privacyModal">
            <div class="modal-dialog">
                <div class="modal-content p-20">
                    <div class="modal-header text-center">
                        <h4 class="font-header text-primary">GPDR Declaration</h4>
                    </div>
                    <div class="modal-body">
                        <p class="initialism">
                            This website is a <span class="text-danger"> demo version </span> of real website,  It doesn't collect and process,
                            in long term meaning (longer than needed for website operation during visitor's
                            presence), any user (visitor) data. All information collected during visitor's 
                            presence on this website are used only for technical purposes, required for 
                            correct operation of website or demonstration purposes related to technical 
                            mechanisms and presentation of its operation... 
                            <a href="privacy.html" class="label label-primary">More about privacy</a>
                        </p>                        
                        <p class="initialism">
                            If you accept privacy policy please click button "accept". If you 
                            refuse it, leave page by closing it in your web browser, please.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button class="btn btn-success"
                                onclick="acceptPrivacyPolicy()">
                                Accept
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <script type="text/javascript" 
            src="js/main.min.js">
        </script>
    </body>
</html>