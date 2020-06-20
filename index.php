<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fondation KOUYO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>
<div class='popup'>
<div class='cnt223'>
<h1>Pensée du jour:</h1>
<p>
"La famine affective déprogramme le cerveau de la femme et la rend vulnérable. Hommes donnez du temps à vos épouses"
<br/>
<br/>
<a href='' class='close'>X</a>
</p>
</div>
</div>
    <!-- include du menu -->
    <?php include 'menu_index.php'; ?>
    <!-- include du menu -->
    <!-- END nav -->

    

    <!-- <div class="hero-wrap" style="background-image: url('images/20995.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-6 order-md-last ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="color: gold; ">
                        NOUS POUVONS ENSEMBLE BATIR DES FAMILLES FORTES</h1>
                    <p><a href="#" class="btn btn-black py-3 px-4">Comment vous aidez ?</a></p>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="play-video pb-5 d-flex align-items-center">
                        <p><a class="btn btn-primary" data-toggle="modal" href="#modal-video"><i class="ion-ios-play "></i></span> <span class="play" style="color: green;">Voir plus</span></a></p>

                        <div class="modal fade" id="modal-video" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">close <i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe type="text/html" width="440" height="360" src="https://www.youtube.com/embed/FYFPcArJfZw?rel=0?wmode=transparent&amp;fs=1&amp;rel=0&amp;enablejsapi=1&amp;version=3" frameborder="0" allowfullscreen=""></iframe>
                                        <p>Your video</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/22989.jpg" height="600px" alt="Second slide">


                <div class="carousel-caption d-none d-md-block">
                    <div class="row">
                        <div class="play-video pb-5 d-flex align-items-center">
                            <p style="display: inline-block; transform: rotate(-90deg);"><a class="btn btn-primary" data-toggle="modal" href="#modal-video"><i class="ion-ios-play "></i></span> <span class="play" style="color: green;">Voir plus</span></a></p>

                            <div class="modal fade" id="modal-video" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">close <i class="fa fa-times"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe type="text/html" width="440" height="360" src="https://www.youtube.com/embed/FYFPcArJfZw?rel=0?wmode=transparent&amp;fs=1&amp;rel=0&amp;enablejsapi=1&amp;version=3" frameborder="0" allowfullscreen=""></iframe>
                                            <p>Your video</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col">
                            <h1 class="text-right" style="color:#ffb400;"> NOUS POUVONS ENSEMBLE BATIR DES FAMILLES FORTES</h1>
                            <p class="text-right"><a href="#" class="btn btn-primary py-3 px-4">Rejoignez-nous </a></p>
                        </div>

                    </div>


                </div>


            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/46862.jpg" height="600px" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-right" style="color:#ffb400;"> NOUS POUVONS ENSEMBLE BATIR DES FAMILLES FORTES</h1>
                    <p class="text-right"><a href="#" class="btn btn-primary py-3 px-4">Rejoignez-nous </a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/22989.jpg" height="600px" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Titre</h5>
                    <p>Sous-Titre</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>

        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-volunteer">
        <div class="container">
            <div class="row">
                <div class="col-md-7 img-volunteer" style="background-image: url(images/image.png);">
                    <div class="row no-gutters justify-content-end">
                        <div class="col-md-4">
                            <div style="padding-bottom: 80px;"></div>
                            <div class="text py-5 pl-md-6 pr-md-3" style="padding-top: 40px;">
                                <h2 class="mb-4">Mots Du Président</h2>
                                <p style="color: teal;">Ensemble bâtissons des familles modèles pour renforcer et préserver
                                    leur stabilité. Sans stabilité, il sera difficile de préserver une famille heureuse.</p>
                                <p class="text-center"><a href="#" class="btn btn-primary py-3 px-4">Voir Plus</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center ">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active carousel-item-left">
                                <img class="first-slide" src="images/768ca045ed66c70bd8838309c506cc9c.jpg" alt="First slide">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1 style="color:white;">Actualités.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                            elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir Plus</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-next carousel-item-left">
                                <img class="second-slide" src="images/768ca045ed66c70bd8838309c506cc9c.jpg" alt="Second slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1 style="color:white;">Autre exemple d'Actualités.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                            elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir Plus</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="third-slide" src="images/768ca045ed66c70bd8838309c506cc9c.jpg" alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption text-right">
                                        <h1 style="color:white;">Encore Plus d'Actualités</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                            elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir plus</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!-- <div class="about-text py-5 pl-md-5">
                    <h2>Actualités :</h2>
                    <h3 style="color: white;"> La Fondation Kouyo soutient les populations vulnérables d'Attécoubé </h3>
                    <p style="color: gold;">Près de 200 kits alimentaires et du matériel de protection sanitaire. C'est
                        le don fait aux cas sociaux de la commune d'Attécoubé par la Fondation Kouyo, le lundi 27 avril
                        2020.</p>
                    <p><a href="#actualite" class="btn btn-black py-3 px-4">Savoir plus.</a></p>
                </div>  -->
                </div>
            </div>
        </div>
    </section>

    <section class="services-section py-5 py-md-0 bg-light">
        <div class="container">
            <div class="row no-gutters d-flex">
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-charity"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Aide & Support</h3>
                            <p> Des valeurs solides pour bâtir la meilleure approche possible vis-à-vis des partenaires et
                                des populations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-adoption"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Familles modèles</h3>
                            <p>Partenaires sociaux et humanitaires constituent une solide fondation pour y arriver.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-volunteer"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Missions</h3>
                            <p>Des missions pluridimensionnelles au bénéfice des familles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-open-book"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Education</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-causes" id="actualite" style="padding-top: 40px;">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h2 class="mb-4" style="color: darkgreen;">Pour la stabilité de la cellule familiale, socle de
                        l’équilibre sociale, aucune n’action n’est de trop…</h2>

                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 40px;">
            <div class="row">
                <div class="col-4 ">
                    <img src="images/23633[1].jpg" alt="" width="400px">
                </div>
                <div class="col-8 " style="padding-left: 40px;">
                    <H3>Solidarité : La Fondation Kouyo soutient les populations vulnérables d'Attécoubé</H3>
                    <p style="color: teal;">Près de 200 kits alimentaires et du matériel de protection sanitaire. C'est le
                        don fait aux cas sociaux de la commune d’Attécoubé par la Fondation Kouyo, le lundi 27 avril 2020.
                        La cérémonie a eu pour cadre la cour de la mairie. <br>
                        Ce don vise à soutenir les populations vulnérables de ladite commune en cette période de crise
                        sanitaire du Covid-19. C’est une initiative de la Fondation Kouyo et son partenaire le Restaurant
                        Cook-Africa. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimony-section" style="padding-top:40px ;">
        <div class="container">
            <div class="row ftco-animate justify-content-center">

                <div class="col-md-12 py-5">

                    <div class="heading-section heading-section-white pt-4 ftco-animate">
                        <h2 class="mb-0">Propos recueillis</h2>
                    </div>
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">

                            <div class="testimony-wrap pb-4">
                                <div class="col-md-12 media">
                                    <img class="rounded-circle col-md-4" src="images/1531851508M-DANHO-CLAUDE-PAULIN-3-[1].jpg" alt="Generic placeholder image" width="100px">
                                    <div class="col-md-6 media-body">

                                        <div class="text">
                                            <p class="mb-4">"Nous vous remercions d’avoir pensé à nos populations en ces
                                                moments
                                                difficiles. Votre action cadre avec notre approche de solidarité." <br>.</p>
                                        </div>
                                        <div class="d-flex">

                                            <div class="pos ml-3">
                                                <p class="name"> Paulin DANHO</p>
                                                <span class="position">Ministre des Sport <br> Maire de la commune
                                                    d'attécoubé</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">

                            <div class="testimony-wrap pb-4">
                                <div class="col-md-12 media">
                                    <img class="rounded-circle col-md-4" src="images/1.jpg" alt="Generic placeholder image" width="100px">
                                    <div class="col-md-6 media-body">

                                        <div class="text">
                                            <p class="mb-4">"J'ai une admiration pour les domaines d’intervention de la Fondation
                                                Kouyo. Je suis sensiblement intéressé par la Protection des enfants et les activités
                                                Génératrices de Revenues en faveur des femmes et des Jeunes"</p>
                                        </div>
                                        <div class="d-flex">

                                            <div class="pos ml-3">
                                                <p class="name">Jean Baptiste OUEDRAOGO</p>
                                                <span class="position">Directeur du Département de la Coopération au Développement
                                                    du Conseil de l'Entente.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- <div class="item">
                        <div class="testimony-wrap pb-4">
                            <div class="text">
                                <p class="mb-4">"J'ai une admiration pour les domaines d’intervention de la Fondation
                                    Kouyo. Je suis sensiblement intéressé par la Protection des enfants et les activités
                                    Génératrices de Revenues en faveur des femmes et des Jeunes"</p>
                            </div>
                            <div class="d-flex">
                                <div class="user-img" style="background-image: url()">
                                </div>
                                <div class="pos ml-3">
                                    <p class="name">Jean Baptiste OUEDRAOGO</p>
                                    <span class="position">Directeur du Département de la Coopération au Développement
                                        du Conseil de l'Entente.</span>
                                </div>
                            </div>
                        </div>
                    </div> -->


                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- include du footer -->
    <?php include 'footer.php'; ?>
    <!-- include du footer -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>