<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innova Tesis Perú</title>
    <style>
        .custom-float-button {
            width: 80px;
            height: 60px;
            position: fixed;
            bottom: 50px;
            right: 50px;
            padding: 10px; /* Ajusta el espacio interno del botón */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /*Sombra ligera */ */ */
            /*background-color: #28a745;  Color verde */
            /*color: #fff; Texto en color blanco */
            /* border-radius: 50%; Bordes redondeados para forma circular */ 
        }
        .custom-float-button i {
            font-size: 30px; /* Ajusta el tamaño del ícono */
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body  class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="#">Innova Tesis Peru</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                            <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="#publicaciones">Posts</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                        </ul>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                         class="btn btn-primary ms-lg-3">Envianos un mensaje</a>
                    </div>
                </div>
    </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">LOGRA TUS <span class="text-primary">METAS</span> CON NUESTRA ASESORIA 100% PERSONALIZADA
                                </h1>
                                <p class="lead fw-normal text-white-50 mb-4">Logra tus metas PROFESIONALES, queremos acompañarte a dar el gran paso.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="img/chica-graduada.png" width="70%" alt="..." /></div>
                    </div>
                </div>
        </header>
            <!-- Servicios-->
            <section class="py-5" id="servicios">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0 d-flex align-items-center">
                            <div class="text-center text-lg-start">
                            <h2 class="fw-bolder mb-0">Los Servicios que te Ofrecemos:</h2>
                             </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                        <div class="feature-box bg-light border rounded-3 p-4">
                                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></div>
                                        <h2 class="h5"> <img src="img/mortarboard (1).svg" width="12%" alt=""> Tesis Pregrado</h2>
                                        <p class="mb-0">Facilitamos la creación de tesis de pregrado, guiando a los estudiantes a lo largo de cada fase del proceso. 
                                            Desde la selección del tema hasta la redacción final, nos aseguramos de que tu tesis destaque por su originalidad,
                                            rigor académico y contribución al campo de estudio.</p>
                                        </div>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature-box bg-light border rounded-3 p-4">
                                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></i></div>
                                            <h2 class="h5"> <img src="img/mortarboard-fill.svg" width="10%" alt=""> Tesis Posgrado</h2>
                                            <p class="mb-0">Para aquellos que buscan obtener un título de posgrado, ofrecemos asesoramiento especializado en la elaboración de tesis. 
                                                Nuestros consultores expertos en diversas áreas académicas te guiarán para desarrollar una tesis 
                                                que demuestre un profundo conocimiento del tema y contribuya de manera significativa al conocimiento 
                                                existente en tu campo.</p>
                                        </div>
                                    </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature-box bg-light border rounded-3 p-4">
                                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></i></div>
                                        <h2 class="h5"> <img src="img/bookmark-fill.svg" width="10%" alt=""> Proyecto</h2>
                                        <p class="mb-0">Ofrecemos servicios completos para el desarrollo de proyectos de tesis, desde la conceptualización hasta la elaboración final. 
                                                        Nuestro equipo de expertos trabaja en estrecha colaboración contigo para asegurarse de que tu proyecto 
                                                        cumpla con los más altos estándares académicos y refleje tu visión de manera precisa.</p>
                                    </div>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature-box bg-light border rounded-3 p-4">
                                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></i></div>
                                        <h2 class="h5"> <img src="img/clipboard-check.svg" width="10%" alt=""> Servicio de Turnitin</h2>
                                        <p class="mb-0">Garantizamos la originalidad de tu trabajo con nuestros servicios de Turnitin. 
                                                        Utilizamos herramientas avanzadas para realizar exhaustivas verificaciones de plagio, 
                                                        asegurándonos de que tu tesis cumpla con los estándares éticos y académicos. Con nosotros, 
                                                        puedes confiar en la autenticidad y la integridad de tu trabajo académico.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Nosotros -->
            <section class="py-4" style="background-color:#F8F9FA;" id="nosotros">
                <div class="container px-5 my-5">
                    <div class="row">
                        <div class="col-lg-7 py-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="info-box border p-3">
                                        <img src="img/house-fill.svg" width="4%" alt="" class="ms-4">
                                        <div class="ms-4">
                                            <h5><br>NOSOTROS</h5>
                                            <p>Somos una empresa que brinda asesoría de Tesis, proyectos, servicios de apoyo, 
                                                a toda persona que lo requiera, contamos con profesionales altamente calificados, 
                                                ofreciendo un excelente servicio al cliente.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="info-box border p-3">
                                    <img src="img/rocket-fill.svg" width="4%" alt="" class="ms-4">
                                        <div class="ms-4">
                                            <h5><br>Misión</h5>
                                            <p>Contribuir en el asesoramiento pedagógico de nuestros clientes, 
                                                dando un buen conocimiento para facilitarles el camino, 
                                                gracias a una eficiente asesoría, excelente planeamiento, 
                                                análisis y buen desarrollo de procesos, comprometiéndonos con alcanzar su éxito.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="info-box border p-3">
                                        <img src="img/pin-fill.svg" width="4%" alt="" class="ms-4">
                                        <div class="ms-4">
                                            <h5><br>Visión</h5>
                                            <p>Consolidarnos como la primera alternativa de servicios 
                                                integrales de formación y capacitación; que impulsa a 
                                                nuestros clientes a que cumplan sus objetivos, metas y sueños.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img id="animatedImage" src="img/graduada.jpeg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Posts -->
            <section class="page-section portfolio" id="publicaciones">
            <div class="container">
                
                <!-- Heading-->
                <h2 class="page-section-heading text-center text-uppercase mb-0"> Posts</h2>
                <!-- Publicacion Grid Items-->
                
                <div class="row justify-content-center">
                    
                    @yield('content')
                </div>
            </div>
        </section>
         <!-- Mapa y numeros -->
            <section class="contact-us" id="contacto">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.522358807587!2d-79.9086717217715!3d-6.705917075987792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ced93986be5f5%3A0xbf2674128fb2e51b!2sLeandro%20Pastor%20141%2C%20Lambayeque%2014013!5e0!3m2!1ses-419!2spe!4v1700675149790!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                                    <div class="row">
                                        <!-- <div class="col-lg-6">
                                            <div class="contact-info">
                                                <div class="icon">
                                                <i class="fa fa-phone"></i>
                                                </div>
                                                <h4>Phone</h4>
                                                <span>010-020-0340</span>
                                            </div>
                                        </div> -->
                                        <div class="col-lg-6">
                                            <div class="contact-info">
                                                <div class="icon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                            <h4><i class="bi bi-telephone-outbound-fill"></i> Mobile</h4>
                                            <span>  934 505 753</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-info">
                                                <div class="icon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                            <h4><i class="bi bi-pin-map-fill"></i> Direccion</h4>
                                            <span>Leandro Pastor 141, Lambayeque</span>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="https://maps.app.goo.gl/zd4U1vwS6TS4VFPi6" target="_blank">Ir al Mapa</a>
                                </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="container-fluid">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-sm-12 bg-cover"
                                        style="background-image: url(img/message.jpg); min-height:300px;"><!-- poner entre parentesis la imagen -->
                                        <div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <form class="p-lg-5 col-12 row g-3">
                                            <div>
                                                <h1>CONTACTO</h1>
                                                <p>No dude en contactarnos y nos comunicaremos con usted lo antes posible.</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="userName" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" placeholder="Nombre" id="userName"
                                                    aria-describedby="emailHelp">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="userName" class="form-label">Numero</label>
                                                <input type="text" class="form-control" placeholder="+51912345678" id="numero"
                                                    aria-describedby="emailHelp">
                                            </div>
                                            <div class="col-12">
                                                <label for="userName" class="form-label">Correo</label>
                                                <input type="email" class="form-control" placeholder="usuario@example.com"
                                                    id="correo" aria-describedby="emailHelp">
                                            </div>
                                            <div class="col-12">
                                                <label for="exampleInputEmail1" class="form-label">Comentario</label>
                                                <textarea name=""
                                                    class="form-control" id="" rows="4"></textarea>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>   
                 
    </main>  
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    <div class="copyright text-center text-lg-start">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="https://wa.me/51992058366" target="_blank" class="btn btn-outline-success custom-float-button">
        <i class="bi bi-whatsapp"></i>
    </a>
    <script>
        const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
    </script> 
</body>
</html>
