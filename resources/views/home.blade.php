@extends('layouts.layout')

@section('title', 'INICIO ')




@section('contenido')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <main>


        <div class="sectionhome">

            <h1 class="text__inicio">Bienvenidos a Egresados SENA</h1>


        </div>



        <div class="sectionhome1">

            <div class="personaje3d">
                <img class="imgperson" src="../img/3d person.png" alt="">
            </div>

            <div class="cartas">
                <div class="cartas_hijo">
                    <div class="card_efect" id="imagen1">
                        <img src="../img/Vector (1).svg" alt="">
                        <div class="contenedor__text_egresados">
                            <div class="text_cantidad_egresados">
                                <p class="cantidad">127</p>
                                <p class="mil">mil</p>
                            </div>
                            <div class="text_egresados_card">
                                <p class="egresados_text">Egresados</p>
                                <p class="activos_text">Activos</p>
                            </div>
                        </div>
                        <div class="card__content__egresados">
                            <p class="card__title">Egresados</p>
                            <p class="card__description">Con 127,000 egresados, marcamos metas más altas, impulsando excelencia y desarrollo. ¡Hacia un futuro brillante!
                            </p>
                        </div>
                    </div>

                    <div class="card_efect" id="imagen2">
                        <img src="../img/eventos.svg" alt="">
                        <div class="contenedor__text_eventos">

                            <div class="text_cantidad_egresados">
                                <p class="eventos">Asiste a nuestros</p>
                            </div>

                            <div class="text_egresados_card">
                                <p class="eventos_text">Eventos</p>

                            </div>

                        </div>

                        <div class="card__content__eventos">
                            <p class="card__title">Eventos</p>
                            <p class="card__description">Tenemos eventos divertidos e informativos para ti, enriqueciendo tu trayectoria. ¡Participa y construye un futuro brillante!.</p>
                        </div>

                    </div>

                </div>

                <div class="cartas_hijo">
                    <div class="card_efect grande " id="imagen3">
                        <img src="../img/empre.svg" alt="">
                        <div class="contenedor__text_empre">

                            <div class="text_cantidad_empre">
                                <p class="empre">HAZ  TU EMPRENDIMIENTO  VISIBLE</p>
                            </div>

                            <div class="text_egresados_card">
                                <p class="empre_text">Publica hoy mismo.</p>

                            </div>

                        </div>

                        <div class="card__content__empre">
                            <p class="card__title">Empredimiento sena</p>
                            <p class="card__description">Tenemos para ti la oportunidad de publicar tu emprendimiento, abriendo la puerta a que otros lo descubran y se sumen a contribuir. ¡Construyamos juntos un camino hacia un futuro prometedor!.</p>
                        </div>
                    </div>
                </div>

                <div class="cartas_hijo">
                    <div class="card_efect" id="imagen4">
                        <img src="../img/cursos.svg" alt="">
                        <div class="contenedor__text_curso">

                            <div class="text_cantidad_curso">
                                <p class="curso">Cursos</p>
                            </div>

                            <div class="text_egresados_card">
                                <p class="curso_text">Disponibles para ti.</p>
                            </div>

                        </div>
                        <a href="https://egresadoscolomboaleman.blogspot.com/"><div class="card__content__curso">
                            <p class="card__title">Curso</p>
                            <p class="card__description">Ofrecemos cursos exclusivos para egresados, brindándote la oportunidad de ampliar tu formación con el Sena. ¡Impulsa tu crecimiento profesional con nosotros!.</p>
                        </div>
                    </a>
                    </div>

                    <div class="card_efect" id="imagen5">
                        <img src="../img/actu.svg" alt="">

                        <div class="contenedor__text_actu">

                            <div class="text_cantidad_actu">
                                <p class="actu">ACTUALIZA</p>
                            </div>

                            <div class="text_egresados_card">
                                <p class="actu_text">Tus datos constantemente.</p>
                            </div>

                        </div>

                        <div class="card__content__actu">
                            <p class="card__title">Actualiza tus datos</p>
                            <p class="card__description">Actualiza tus datos para beneficios exclusivos y comunicación fácil. ¡Optimiza tu experiencia posteducativa con nosotros!.</p>
                            <a href="/NewPassword"><button type="submit" class="btn btn-primary" style="margin-top: 1rem;">Actualizar</button></a>
                        </div>
                    </div>

                </div>

            </div>


        </div>


        {{-- <div class="indentidad">
            <h2>¿Quienes somos?</h2>
            <p>Bienvenido a Leo Sena App, tu plataforma de seguimiento de egresados diseñada para mantener a nuestra comunidad informada, conectada y en constante crecimiento. En Leo Sena App, nos dedicamos a proporcionar una experiencia única para nuestros egresados, ofreciendo noticias relevantes, actualizaciones exclusivas y oportunidades de aprendizaje continuo.</p>
            <p>En Leo Sena App, nos enorgullece ser el vínculo que mantiene viva la llama de la comunidad de egresados. Nuestra misión es impulsar el éxito y el desarrollo personal y profesional de cada miembro de la familia Leo Sena. A través de esta plataforma, buscamos fortalecer los lazos, fomentar la colaboración y brindar recursos educativos para que todos puedan alcanzar sus metas.</p>
        </div> --}}

        {{-- <hr class="sidebar-divider my-0">

        <div class="mision">


            <h2>Mision</h2>
            <p class="card-text"></p>


        </div>

        <div class="cartas">



            <div class="card" style="width: 18rem;">
                <img src="../img/logou.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>Excelencia Académica</h2>
                    <p class="card-text"></p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="../img/logou.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>Diversidad e Inclusión</h2>
                    <p class="card-text"></p>
                </div>
            </div>


            <div class="card" style="width: 18rem;">
                <img src="../img/logou.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2>Innovación</h2>
                    <p class="card-text"></p>
                </div>
            </div>


        </div>

        <hr class="sidebar-divider my-0">

        <div class="variedad">

            <h2>Explora Nuestros Programas Académicos</h2>

            <p class="cursos"></p>

            <div class="cartas">



                <div class="card" style="width: 18rem;">
                    <img src="../img/derecho.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2>Derecho</h2>
                        <p class="card-text"> </p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="../img/estudiantes_6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2>Ingenieria en sistemas</h2>
                        <p class="card-text"></p>
                    </div>
                </div>


                <div class="card" style="width: 18rem;">
                    <img src="../img/medicinajpg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2>Medicina</h2>
                        <p class="card-text"></p>
                    </div>
                </div>


            </div>

            <button class="conoce" type="button">Conoce mas.</button>

        </div>


        <div class="profesores">

            <h1>DOCENTES</h1>

        </div>

        <div class="texto__docentes">

            <p>
            </p>
        </div>

        <div class="divisores">

            <hr class="sidebar-divider my-0 contactanos">

            <div class="texto__divisores">
                <p>CONTACTANOS</p>
            </div>

            <hr class="sidebar-divider my-0 contactanos">


        </div>

        <div class="contactanos">

            <div class="cartas">



                <div class="card" style="width: 18rem;">
                    <img src="../img/wsp.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">  contacte con nosotros.</p>
                        <button class="whats" id="boton-contacto" onclick="abrirWhatsApp()">WhatsApp</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="../img/twiter.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">  contacte con nosotros.</p>
                       <a href="https://twitter.com/"><button class="twitter">twitter</button></a>
                    </div>
                </div>


                <div class="card" style="width: 18rem;">
                    <img src="../img/ig.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">  contacte con nosotros.</p>
                       <a href="https://www.instagram.com/"><button class="instagram">instagram</button></a>
                    </div>
                </div> --}}






        </div>


        </div>

    </main>





@endsection
