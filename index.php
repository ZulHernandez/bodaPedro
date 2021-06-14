<html>

<head>
    <title>
        F&O | Nuestra Boda
    </title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/p5.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="assets/css/gStyle.css">
    <link rel="shortcut icon" href="src/imgs/icons/sign.svg" type="image/x-icon">
    <script src="assets/js/home.js" type="text/javascript"></script>
</head>

<body>
    <div class="space"></div>
    <h1>FERNANDA & OMAR</h1>
    <center>
        <hr class="head-line">
    </center>
    <div class="space"></div>
    <div class="container">
        <div class="row div-portada">
            <div class="col-lg-7" style="padding:0px">
                <img src="src/imgs/portada1.jpeg" class="img-portada">
                <img src="src/imgs/portada.jpeg" class="img-portada img-1">
            </div>
            <div class="col-lg-5" style="padding: 50px;">
                <div class="space"></div>
                <div class="hidde">
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                </div>
                <h2 style="text-align: start;">24-JULIO-2021</h2>
                <hr>
                <br />
                <div class="row">
                    <div class="col-md-7">
                        <ul>
                            <li><a href="#deseos">Déjanos tus deseos</a></li>
                            <li><a href="#album">Nuestro albúm</a></li>
                            <li><a href="#boda">¡La boda!</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img class=" img-fluid" src="src/imgs/icons/sign.svg">
                    </div>
                </div>
                <div class="minspace"></div>
            </div>
        </div>
        <div class="space" id="deseos"></div>
        <h2 class="subtitle">Déjanos tus deseos</h2>
        <div class="minspace"></div>
        <center>
            <div style="width: 80%;">
                <p class="text-para">Queremos compartir con ustedes la alegría de nuestro compromiso y hacerlos partícipes de nuestra unión.
                    Aunque no podamos estar en el mismo lugar queremos sentirlos cerca.
                    Déjanos tus palabras y deseos para llevarlos con nosotros en esta nueva etapa de nuestras vidas.</p>
                <div class="minspace"></div>
                <div class="form-floating row">
                    <div class="col-lg-7">
                        <textarea id="mensaje" placeholder="Déjanos tu mensaje <3" maxlength="450" required></textarea>
                    </div>
                    <div class="col-lg-5">
                        <div class="hidde-back space"></div>
                        <div class="hidde minspace"></div>
                        <input type="text" id="name" placeholder="Remitente" maxlength="64" required autocomplete="false"></input>
                        <br /><br />
                        <input class="btn" type="submit" id="envia"></input>
                    </div>
                </div>
            </div>
        </center>
        <div class="space" id="album"></div>
        <h2 class="subtitle">Nuestro albúm</h2>
        <div class="minspace"></div>
        <div class="row">
            <div onclick="fireSwal(0)" class="col-5 grid-img-3" style="background-image: url(src/imgs/slides/1.jpeg);">
            </div>
            <div onclick="fireSwal(1)" class="col-7 grid-img-3" style="background-image: url(src/imgs/slides/2.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwal(2)" class="col-4 grid-img-2" style="background-image: url(src/imgs/slides/3.jpeg);">
            </div>
            <div onclick="fireSwal(3)" class="col-4 grid-img-2" style="background-image: url(src/imgs/slides/4.jpeg);">
            </div>
            <div onclick="fireSwal(4)" class="col-4 grid-img-2" style="background-image: url(src/imgs/slides/5.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwal(5)" class="col-7 grid-img-3" style="background-image: url(src/imgs/slides/6.jpeg);">
            </div>
            <div onclick="fireSwal(6)" class="col-5 grid-img-3" style="background-image: url(src/imgs/slides/7.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwal(7)" class="col-4 grid-img-2" style="background-image: url(src/imgs/slides/8.jpeg);">
            </div>
            <div onclick="fireSwal(8)" class="col-4 grid-img-2" style="background-image: url(src/imgs/slides/9.jpeg);">
            </div>
            <div onclick="fireSwal(9)" class="col-4 grid-img-2" style="background-image: url(src/imgs/slides/10.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwal(10)" class="col-6 grid-img-3" style="background-image: url(src/imgs/slides/11.jpeg);">
            </div>
            <div onclick="fireSwal(11)" class="col-6 grid-img-3" style="background-image: url(src/imgs/slides/12.jpeg);">
            </div>
        </div>
        <template id="my-template">
            <swal-html>
                <div class="place-card" id="c-img"></div>
            </swal-html>
        </template>
        <div class="minspace"></div>
        <center>
            <p class="text-cita">“La mayor felicidad de la vida es la convicción de que somos amados; amados por nosotros mismos, o más bien, amados a pesar de nosotros mismos”</p>
            <p class="text-cita" style="font-weight: bold;">- Víctor Hugo</p>
        </center>
        <div class="space"></div>
        <div class="space" id="boda"></div>
        <h2 class="subtitle" style="font-size: 10vw; text-decoration: none;">¡La boda!</h2>
        <h2 class="subtitle" style="font-size: 9vw;">Próximamente</h2>
        <div class="minspace"></div>
        <center>
            <div class="minspace"></div>
            <img style="width:50%" src="src/imgs/icons/logoTodo.svg">
            <div class="minspace"></div>
        </center>
        <div class="space"></div>
    </div>
    <div class="space"></div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/sendForm.js"></script>

</body>

</html>