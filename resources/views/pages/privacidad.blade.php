@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <div class="bg-gray-200 container-fluid py-4">
        <section class="pt-3 pt-md-5 pb-md-5 pt-lg-9 mt-8 mt-md-7 mt-lg-0">
            <div class="container">
                <div class="col-12 mx-auto pb-5">
                    <div class="card shadow-lg">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg p-4">
                                <h3 class="text-white mb-0">Política de privacidad</h3>
                                <p class="text-white opacity-8 mb-0">Última modificación: 01 de Noviembre de 2023</p>
                            </div>
                        </div>
                        <div class="card-body p-5 pt-0">
                            <h5 class="mt-5 mb-3">Introduccion</h5>
                            En Nova Life, accesible aquí, una de nuestras principales prioridades es la privacidad de
                            nuestros visitantes. Este documento de Política de Privacidad contiene tipos de información que
                            se recopilan y registran por Nova Life y cómo la utilizamos.

                            Si tienes preguntas adicionales o necesitas más información sobre nuestra Política de
                            Privacidad, no dudes en contactarnos por correo electrónico a hello@nova-life.com.

                            Esta política de privacidad se aplica solo a nuestras actividades en línea y es válida para los
                            visitantes de nuestro sitio web en lo que respecta a la información que comparten y/o
                            recopilamos en Nova Life. Esta política no es aplicable a ninguna información recopilada fuera
                            de línea o a través de canales distintos a este sitio web.
                            Gestión de tu Información
                            A menos que se indique lo contrario, Nova Life y/o sus licenciantes son propietarios de los
                            derechos de propiedad intelectual de todo el material en Nova Life. Todos los derechos de
                            propiedad intelectual están reservados. Puedes acceder a esto desde Nova Life para tu propio uso
                            personal, sujeto a restricciones establecidas en estos términos y condiciones.
                            <h5 class="mt-5 mb-3">Administrar su información</h5>
                            <p>A menos que se indique lo contrario, Nova Life y/o sus licenciantes son propietarios de los
                                derechos de propiedad intelectual de todo el material en Nova Life. Todos los derechos de
                                propiedad intelectual están reservados. Puedes acceder a esto desde Nova Life para tu propio
                                uso personal, sujeto a restricciones establecidas en estos términos y condiciones.

                                No debes:

                                Republicar material de Nova Life
                                Vender, alquilar o sublicenciar material de Nova Life
                                Reproducir, duplicar o copiar material de Nova Life
                                Redistribuir contenido de Nova Life
                                Este acuerdo comenzará en la fecha de hoy. Nuestros Términos y Condiciones fueron creados
                                con la ayuda del Generador de Términos y Condiciones y el Generador de Política de
                                Privacidad.

                                Algunas partes de este sitio web ofrecen la oportunidad a los usuarios de publicar e
                                intercambiar opiniones e información en ciertas áreas del sitio web. Nova Life no filtra,
                                edita, publica ni revisa los comentarios antes de su presencia en el sitio web. Los
                                comentarios no reflejan las opiniones de Nova Life, sus agentes y/o afiliados. Los
                                comentarios reflejan las opiniones de la persona que publica sus puntos de vista. En la
                                medida permitida por las leyes aplicables, Nova Life no será responsable de los comentarios
                                ni de cualquier responsabilidad, daño o gasto causado y/o sufrido como resultado del uso y/o
                                publicación y/o aparición de los comentarios en este sitio web.

                                Nova Life se reserva el derecho de monitorear todos los comentarios y de eliminar cualquier
                                comentario que se considere inapropiado, ofensivo o que cause incumplimiento de estos
                                Términos y Condiciones.
                            </p>
                            <h5 class="mt-5 mb-3">Seguridad</h5>
                            No seremos responsables de ningún contenido que aparezca en tu sitio web. Acuerdas protegernos y
                            defendernos contra todas las reclamaciones que surjan en tu sitio web. No deben aparecer enlaces
                            en ningún sitio web que puedan interpretarse como difamatorios, obscenos o criminales, o que
                            infrinjan, violen de otra manera, o promuevan la infracción u otra violación de los derechos de
                            terceros.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footers.auth.footer')
@endsection
