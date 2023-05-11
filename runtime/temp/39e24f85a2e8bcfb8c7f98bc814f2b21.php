<?php /*a:1:{s:85:"H:\开发数据\开发数据2022 12\3dweb\tp5\application\index\view\index\index.html";i:1683791700;}*/ ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="/static/css/bootstrap-4.4.1.css">

    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='/static/css/x3dom.css'>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/static/css/all.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/static/css/custom.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 

    <!-- Use a light box to view images in the gallery -->
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.fancybox.min.css">

    <title>Coca Cola Brand</title>

</head>
<body id="bodyColor">

<!-- Logo and navigation bar -->
<nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
    <div class="container-fluid">
        <!-- Brand -->
        <div class="logo">
            <a class="navbar-brand" href="index.html">
                <h1>1</h1>
                <h1>oca</h1>
                <h2>Cola</h2>
                <h3>Journey</h3>
                <p>Refreshing the world, one story at a time</p>
            </a>
        </div>

        <!-- Collapsible Navbar Menu Icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Link Menu item button to the links class navbar-collapse selector -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Links -->
            <ul class="navbar-nav ml-auto"> <!-- Use mx-auto to align centre, default to left or use mr-auto -->
                <!-- nothing changed from Lab 5 -->
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <!-- Replace Dropdown from lab 5 with single nav lnk to models -->
                <li class="nav-item">
                    <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Models" data-content="There are three X3D models: Coke, Sprite and Fanta">Models</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Start 3D App SPA Contents -->
<div class="container-fluid main_contents"> <!-- Start SPA Contents -->
    <!-- Home page block element -->
    <div id="home">
        <div class="row"> <!-- Main_3D Image or Carousel -->
            <div class ="col-sm-12">
                <div id="main_3d_image">
                    <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row of cards on the grid -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <a href="/static/assets/images/render_images/2.png" data-fancybox data-caption="My 3D Coke Can Render">
                        <img class="card-img-top img-fluid img-thumbnail" src="/static/assets/images/coca_cola.jpg" alt="Coca Cola">
                    </a>
                    <div class="card-body">
                        <div id="title_left" class="card-title drinksText"></div>

                        <div id="description_left" class="card-text drinksText"></div>
                        <a href="https://www.coca-cola.co.uk/" class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <a href="/static/assets/images/render_images/3.png" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                        <img class="card-img-top img-fluid img-thumbnail" src="/static/assets/images/sprite.jpg" alt="Sprite">
                    </a>
                    <div class="card-body">
                        <div id="title_centre" class="card-title drinksText"></div>
                        <div id="description_centre" class="card-text drinksText"></div>
                        <a href="https://www.coca-cola.co.uk/brands/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <a href="/static/assets/images/render_images/1.png" data-fancybox data-caption="My 3D Fanta Glass Render" class="thumbnail">
                        <img class="card-img-top img-fluid img-thumbnail" src="/static/assets/images/fanta.jpeg" alt="Fanta">
                    </a>
                    <div class="card-body">
                        <div id="title_right" class="card-title drinksText"></div>
                        <div id="description_right" class="card-text drinksText"></div>
                        <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End home page -->

    <!-- About page block element -->
    <div id="about" >
        Insert About Contents
    </div> <!-- End home page -->

    <!-- Start X3D models and 3D Image Gallery -->
    <div id="models">
        <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
        <div class="row">
            <!-- X3D Models — Place 4 models in here for the assignment -->
            <div class="col-sm-8">
                <div class="card text-left">
<!--                    <div class="card-header">-->
<!--                        <ul class="nav nav-tabs card-header-tabs">-->
<!--                            <li class="nav-item">-->
<!--                                <a id="navCoke" class="nav-link active" href="#">Coke</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a id="navSprite" class="nav-link" href="#">Sprite</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a id="navPepper" class="nav-link" href="#">Fanta</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
                    <div class="card-body">
                        <!-- X3D Models -->
                        <div>
<!--                            <div id="x3dModelTitle_coke" class="card-title drinksText"></div>-->
<!--                            <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>-->
<!--                            <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>-->

                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Fanta</button>

                            <!-- Place the X3D code here -->
                            <div class="model3D">
                                <x3d width="800px" height="400px" id="wire">
                                    <scene>
                                        <navigationInfo id="head" headlight='true' type='"EXAMINE"'></navigationInfo>
                                        <directionalLight id="directional" direction='0 -1 0' on ="TRUE" intensity='2.0' shadowIntensity='0.0'>
                                        </directionalLight>
                                        <PointLight id='point' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0' location='2 10 0.5 '  attenuation='0 0 0' radius='5.0000'> </PointLight>
                                        <SpotLight id='spot' on ="TRUE" beamWidth='0.9' color='0 0 1' cutOffAngle='0.78' location='0 0 12' radius='22'></SpotLight>
                                        <Switch whichChoice="0" id='SceneSwitch'>
                                            <transform DEF="ball">
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="/upload/coke.x3d" > </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="/upload/sprite.x3d"> </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="/upload/fanta.x3d"> </inline>
                                            </transform>
                                        </Switch>
                                        <timeSensor DEF='RotationTimer' id="RotationTimer"  cycleInterval='4' loop='true' enabled='true'></timeSensor>
                                        <orientationInterpolator DEF='Rotator' key='0 0.25 0.5 0.75 1' keyValue='0 1 0 0 0 1 0 1.57079 0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317'></orientationInterpolator>
                                        <ROUTE fromNode='RotationTimer' fromField='fraction_changed' toNode='Rotator' toField='set_fraction'></ROUTE>
                                        <ROUTE fromNode='Rotator' fromField='value_changed' toNode='ball' toField='set_rotation'></ROUTE>
                                    </scene>
                                </x3d>
                            </div>
<!--                            <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>-->
<!--                            <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>-->
<!--                            <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>-->
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3D image gallery -->
            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Gallery</a>
                            </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> <!-- End gallery card -->
            </div> <!-- End gallery column -->
        </div> <!-- End row for X3D Model and Gallery -->
    </div> <!-- End X3D Models and Gallery -->

    <!-- Start the interaction panels -->
    <div id="interaction" class="row" >
        <!-- Column for the camera view controls -->
        <div class="col-sm-3">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <!-- Dropdown nav-tab -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#" id="navbardrop">Cameras</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                        <h3>Camera Views</h3>
                    </div>
                    <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
<!--                    <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>-->
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();">Bottom</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
<!--                    <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>-->
                    <div class="card-text x3dCameraDescription drinksText">
                        <p>These buttons select a limited range of X3D model viewpoints, use the buttons for more camera views</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column for the animation controls -->
        <div class="col-sm-3">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Animation</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card-Title x3dAnimationSubtitle drinksText">
                        <h3>Animation Options</h3>
                    </div>
                    <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                    <div class="card-text x3dAnimationDescription drinksText">
                        <p>These buttons select a range of X3D animation options</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column for the render type and lighting controls -->
        <div class="col-sm-3">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" id="navbardrop">Render</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card-Title x3dRendersubtitle drinksText">
                        <h3>Render Options</h3>
                    </div>
<!--                    <a href="#" class="btn btn-success btn-responsive">Poly</a>-->
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wireframe</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Vertex</a>
<!--                    <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>-->
                    <div class="card-text x3dRenderDescription drinksText">
                        <p>These buttons select a limited number of render and lighting options; use the buttons for more options</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-3">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" id="navbardrop">Lights</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Vertex</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card-Title x3dRendersubtitle drinksText">
                        <h3>Lighting Options</h3>
                    </div>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="lightSwitch('point');">point</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="lightSwitch('spot');">spot On/Off</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="lightSwitch('directional');">directional On/Off</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="headlight();">Headlight On/Off</a>
                    <div class="card-text x3dRenderDescription drinksText">
                        <p>These buttons select a limited number of render and lighting options; use the buttons for more options</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End the interaction panels -->

    <!-- Row to hold one card to hold the coke descriptive text, etc.
    <div id="cokeDescription" class="row" >
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_coke" class="card-title drinksText"></div>
                    <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                    <div id="description_coke" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
    <div id="spriteDescription" class="row" >
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_sprite" class="card-title drinksText"></div>
                    <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                    <div id="description_sprite" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>
                </div>
            </div>
        </div>
    </div> <!-- End sprite description contents -->

    <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
    <div id="pepperDescription" class="row" >
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_pepper" class="card-title drinksText"></div>
                    <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                    <div id="description_pepper" class="card-text drinksText"></div>
                    <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-primary btn-responisve">Visit Fanta.</a>
                </div>
            </div>
        </div>
    </div> <!-- End pepper description contents -->

</div>  <!-- End 3D App SPA Contents -->

<!-- Your 3D App footer -->
<nav id="footerColor" class="navbar navbar-expand-sm footer">
    <div class="container-fluid">
        <div class="navbar-text float-left copyright">
            <p><span class="align-baseline">&copy 2023 3D Web Application | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
        </div>
        <div class="navbar-text social">
            <a href="https://github.com/"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
            <a href="https://investors.coca-colacompany.com/corporate-governance/contact-the-board#:~:text=Communications%20can%20be%20addressed%20to,%40coca%2Dcola.com."><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
            <a href="https://twitter.com/CocaCola?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
            <a href="https://www.facebook.com/cocacolaGB/?locale=en_GB"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
        </div>
    </div>
</nav>

<!-- My 3D App modals -->
<!-- Contact modal -->
<!-- The Modal -->
<div class="modal fade" id="contactModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>Winky Chong, Chichester 1, 126, Email: uc30@sussex.ac.uk</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/static/js/jquery-3.4.1.js"></script>
<script src="/static/js/popper.min.js"></script>
<!--<script src="js/bootstrap.js"></script>-->
<script src="/static/js/bootstrap-4.4.1.js"></script>

<!-- Include the x3dom JavaScript -->
<script src='/static/js/x3dom.js'></script>

<!-- Font Awesome Version 5 -->
<!-- <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script> -->
<!-- <script src="all.js"></script> -->

<!-- Custom JavaScript code for your 3d App -->
<!-- Also, intialises popovers-->
<script src="/static/js/custom.js" crossorigin="anonymous"></script>

<!-- JavaScript to swap for SPA and restyle -->
<script src="/static/js/swap_restyle.js"></script>

<!-- JavaScript and PHP based Gallery generator  -->
<script src="/static/js/gallery_generator.js"></script>

<!-- JQuery code to get content data from a backend JSON file -->
<script src="/static/js/getJsonData.js"></script>

<!-- JavaScript model interactions -->
<script src="/static/js/modelInteractions.js"></script>

<!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
<script src="/static/js/jquery.fancybox.min.js"></script>

</body>
</html>

