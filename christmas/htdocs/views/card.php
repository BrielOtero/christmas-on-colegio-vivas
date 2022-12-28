<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Navidad en Colegio Vivas</title>

    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700'>
    <script type="text/javascript" src="../js/snowstorm.js"></script>
    <link rel="stylesheet" href="../css/mod-bootstrap.min.css" />
    <link rel="stylesheet" href="../slick/slick.css" />
    <link rel="stylesheet" href="../slick/slick-theme.css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/card-style.css" />

    <?php
    require_once '../controllers/toysController.php';
    require_once '../controllers/letterController.php';
    $objToysController = new ToysController();
    $objLetterController = new LetterController();

    /* Add toys */
    if (
        isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['description']) && !empty($_POST['description']) &&
        isset($_POST['image']) && !empty($_POST['image'])
    ) {
        $objToysController->addToy($_POST['name'], $_POST['description'], $_POST['image']);
    }


    /* Get toys */
    $toys = $objToysController->getToys();


    /* Add Letter */
    if (
        isset($_POST['card']) && !empty($_POST['card']) &&
        isset($_POST['content']) && !empty($_POST['content']) &&
        isset($_POST['signature']) && !empty($_POST['signature'])
    ) {
        $letter = $_POST['card'];
        $selectedToys = "";
        foreach($letter as $value){
            $selectedToys = $selectedToys.$value.",";
        }
        $objLetterController->addLetter($selectedToys, $_POST['content'], $_POST['signature']);
    }
    ?>
    <style>
        /* .card {
            border: .3rem solid transparent;
            transition: 200ms ease-in-out transform;
        } */

        .card:active {
            transform: scale(.97)
        }

        .checkbox {
            display: none;
        }

        input[id="card_0"]:checked~label[for="card_0"] .card,
        input[id="card_1"]:checked~label[for="card_1"] .card,
        input[id="card_2"]:checked~label[for="card_2"] .card,
        input[id="card_3"]:checked~label[for="card_3"] .card,
        input[id="card_4"]:checked~label[for="card_4"] .card,
        input[id="card_5"]:checked~label[for="card_5"] .card,
        input[id="card_6"]:checked~label[for="card_6"] .card,
        input[id="card_7"]:checked~label[for="card_7"] .card,
        input[id="card_8"]:checked~label[for="card_8"] .card,
        input[id="card_9"]:checked~label[for="card_9"] .card,
        input[id="card_10"]:checked~label[for="card_10"] .card,
        input[id="card_11"]:checked~label[for="card_11"] .card,
        input[id="card_12"]:checked~label[for="card_12"] .card,
        input[id="card_13"]:checked~label[for="card_13"] .card,
        input[id="card_14"]:checked~label[for="card_14"] .card,
        input[id="card_15"]:checked~label[for="card_15"] .card,
        input[id="card_16"]:checked~label[for="card_16"] .card,
        input[id="card_17"]:checked~label[for="card_17"] .card,
        input[id="card_18"]:checked~label[for="card_18"] .card,
        input[id="card_19"]:checked~label[for="card_19"] .card,
        input[id="card_20"]:checked~label[for="card_20"] .card,
        input[id="card_21"]:checked~label[for="card_21"] .card,
        input[id="card_22"]:checked~label[for="card_22"] .card,
        input[id="card_23"]:checked~label[for="card_23"] .card,
        input[id="card_24"]:checked~label[for="card_24"] .card,
        input[id="card_25"]:checked~label[for="card_25"] .card,
        input[id="card_26"]:checked~label[for="card_26"] .card,
        input[id="card_27"]:checked~label[for="card_27"] .card,
        input[id="card_28"]:checked~label[for="card_28"] .card,
        input[id="card_29"]:checked~label[for="card_29"] .card,
        input[id="card_30"]:checked~label[for="card_30"] .card,
        input[id="card_31"]:checked~label[for="card_31"] .card,
        input[id="card_31"]:checked~label[for="card_32"] .card,
        input[id="card_33"]:checked~label[for="card_33"] .card,
        input[id="card_34"]:checked~label[for="card_34"] .card,
        input[id="card_35"]:checked~label[for="card_35"] .card,
        input[id="card_36"]:checked~label[for="card_36"] .card,
        input[id="card_37"]:checked~label[for="card_37"] .card,
        input[id="card_38"]:checked~label[for="card_38"] .card,
        input[id="card_39"]:checked~label[for="card_39"] .card,
        input[id="card_40"]:checked~label[for="card_40"] .card {
            box-shadow: rgba(0, 0, 0, 0.66) 0 30px 60px 0, rgba(222, 47, 50, 0.75) 0 0 0 5px, inset rgba(255, 255, 255, 0.5) 0 0 0 6px;
        }
    </style>


</head>


<body>
    <!-- Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="tm-main-container">
        <div class="tm-top-container">
            <!-- Menu -->
            <nav id="tmNav" class="tm-nav">
                <div id="h"></div>
                <a class="tm-navbar-menu" href="#">Menu</a>
                <ul class="tm-nav-links">
                    <li class="tm-nav-item">
                        <a href="../index.html#h" data-linkid="0" data-align="right" class="tm-nav-link">Inicio</a>
                    </li>
                    <li class="tm-nav-item active">
                        <a href="./card.php#h" data-linkid="1" data-align="middle" class="tm-nav-link">Carta</a>
                    </li>
                    <li class="tm-nav-item">
                        <a href="./recipes.html#h" data-linkid="2" data-align="middle" class="tm-nav-link">Recetas</a>
                    </li>
                    <li class="tm-nav-item">
                        <a href="./santa.html#h" data-linkid="3" data-align="left" class="tm-nav-link">Santa Claus</a>
                    </li>
                    <li class="tm-nav-item">
                        <a rel="nofollow" href="https://www.colegiovivas.com/" class="tm-nav-link external">Colegio
                            Vivas</a>
                    </li>
                </ul>
            </nav>
            <!-- Site header -->

            <header class="tm-site-header-box tm-bg-dark tm-nav-item">
                <a href="../index.html">
                    <h1 data-linkid="0" data-align="right" class="tm-nav-link tm-site-title">Colegio Vivas</h1>
                </a>
                <a href="../index.html">
                    <p data-linkid="0" data-align="right" class="tm-nav-link mb-0 tm-site-subtitle">Te desea una feliz
                        Navidad!</p>
                </a>
            </header>
        </div>



        <!-- tm-top-container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Site content -->
                    <div class="tm-content">

                        <!-- Popup -->
                        <form id="toyform" action="#" method="post">
                            <div class="form-popup-bg">
                                <div class="form-container">
                                    <button id="btnCloseForm" class="close-button">X</button>
                                    <h1>Añade tu juguete!</h1>
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input name="name" type="text" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Descripcion</label>
                                        <textarea name="description" type="text" class="form-control" cols="10" rows="2"
                                            maxlength="100"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">URL de la Imagen</label>
                                        <input name="image" class="form-control" type="text" />
                                    </div>
                                    <button>Añadir</button>
                                </div>
                            </div>
                        </form>

                        <!-- Section 1 About Me -->
                        <section class="tm-section tm-section-1">
                            <div class="tm-textbox-2">
                                <h2 class="tm-text-blue mb-4">ENVIALE TU CARTA A PAPA NOEL!</h2>
                                <!-- Letter -->
                                <form class="letter" action="#" method="post">
                                    <table>
                                        <tr>
                                            <th>Primero debes seleccionar tus regalos!</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>Si no está tu regalo añadelo aquí<button id="btnOpenForm">Añade tu
                                                        juguete</button></h3>
                                            </td>
                                        </tr>
                                    </table>

                                    <div id="app" class="container">
                                        <?php
                                        $i = 0;
                                        while ($fila = mysqli_fetch_array($toys)) {

                                            print '<input class="checkbox" type="checkbox" name="card[]" value="'.$fila["id"].'" id="card_' . $i . '">';
                                            print '<label for="card_' . $i . '">';
                                            print '<card id="card_' . $i . '" data-image="' . $fila["image"] . '">';
                                            print '<h1 slot="header">' . $fila["name"] . '</h1>';
                                            print '<p slot="content">' . $fila["description"] . '</p>';
                                            print '</card>';
                                            print '</label>';
                                            $i++;
                                        }
                                        ?>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>Querido Papa Noel,</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="content" id="papanoel" cols="120" rows="10"
                                                    placeholder="Empieza a escribir aquí la carta..."></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    <label id="firma">Firma: </label>
                                                    <input type="text" name="signature" id="firmatext" placeholder="Introduce tu firma aquí">
                                                    </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="enviarcarta" name="enviarcarta" type="submit"
                                                    value="Enviar Carta a Papa Noel ">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>



        <div class="tm-bottom-container">

            <footer>
            </footer>

        </div>
    </div>
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/background.cycle.js"></script>
    <script src="../slick/slick.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/music.js"></script>
    <!--Import Card Style-->
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>
    <script type="text/javascript" src="../js/card-script.js"></script>
    <!--Import Popup Form-->
    <script src="../js/popupForm.js"></script>

    <script>
        let slickInitDone = false;
        let previousImageId = 0,
            currentImageId = 0;
        let pageAlign = "left";
        let bgCycle;
        let links;
        let eachNavLink;

        window.onload = function () {
            $("body").addClass("loaded");

        };


        function navLinkClick(e) {

            if (links.hasClass("open")) {
                links.fadeOut();
            }
            links.toggleClass("open");

            if ($(e.target).hasClass("external")) {
                return;
            }
        }

        $(document).ready(function () {
            // Set first page
            $(".tm-section").fadeOut(0);
            $(".tm-section-1").fadeIn();

            // Set Background images
            // https://www.jqueryscript.net/slideshow/Simple-jQuery-Background-Image-Slideshow-with-Fade-Transitions-Background-Cycle.html
            bgCycle = $("body").backgroundCycle({
                imageUrls: [
                    "../img/photo-03.jpg",
                    "../img/photo-02.jpg",
                    "../img/photo-04.jpg",
                    "../img/photo-05.jpg"
                ],
                fadeSpeed: 2000,
                duration: -1,
                backgroundSize: SCALING_MODE_COVER
            });

            eachNavLink = $(".tm-nav-link");
            links = $(".tm-nav-links");

            // "Menu" open/close
            if (links.hasClass("open")) {
                links.fadeIn(0);
            } else {
                links.fadeOut(0);
            }

            $("#tm_about_link").on("click", navLinkClick);
            $("#tm_work_link").on("click", navLinkClick);

            // Each menu item click

            eachNavLink.on("click", navLinkClick);

            $(".tm-navbar-menu").click(function (e) {
                if (links.hasClass("open")) {
                    links.fadeOut();
                } else {
                    links.fadeIn();
                }

                links.toggleClass("open");
            });


            // window resize
            $(window).resize(function () {
                // If current page is Gallery page, set it up
                if (currentImageId === 2) {
                    setupSlider();
                }

                // Adjust footer
                adjustFooter();
            });

            adjustFooter();
        }); // DOM is ready

        function adjustFooter() {
            const windowHeight = $(window).height();
            const topHeight = $(".tm-top-container").height();
            const middleHeight = $(".tm-content").height();
            let contentHeight = topHeight + middleHeight;

            if (pageAlign === "left") {
                contentHeight += $(".tm-bottom-container").height();
            }

            if (contentHeight > windowHeight) {
                $(".tm-bottom-container").addClass("tm-static");
            } else {
                $(".tm-bottom-container").removeClass("tm-static");
            }
        }

        function setupSlider() {
            let slidesToShow = 4;
            let slidesToScroll = 2;
            let windowWidth = $(window).width();

            if (windowWidth < 480) {
                slidesToShow = 1;
                slidesToScroll = 1;
            } else if (windowWidth < 768) {
                slidesToShow = 2;
                slidesToScroll = 1;
            } else if (windowWidth < 992) {
                slidesToShow = 3;
                slidesToScroll = 2;
            }

            if (slickInitDone) {
                $(".tm-gallery").slick("unslick");
            }

            slickInitDone = true;

            $(".tm-gallery").slick({
                dots: true,
                customPaging: function (slider, i) {
                    var thumb = $(slider.$slides[i]).data();
                    return `<a>${i + 1}</a>`;
                },
                infinite: true,
                prevArrow: false,
                nextArrow: false,
                slidesToShow: slidesToShow,
                slidesToScroll: slidesToScroll
            });

            // Open big image when a gallery image is clicked.
            $(".slick-list").magnificPopup({
                delegate: "a",
                type: "image",
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
</body>

</html>