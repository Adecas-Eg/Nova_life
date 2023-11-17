@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <section class="pt-3 pt-md-5 pb-md-5 pt-lg-8 bg-gray-200">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    <div class="card shadow-lg mb-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-primary border-radius-lg p-3">
                                <h3 class="text-white mb-0">Terminos &amp; Condiciones</h3>
                            </div>
                        </div>
                        <div class="card-body p-5">

                            ¡Bienvenido a Nova Life!

                            Estos términos y condiciones establecen las reglas y regulaciones para el uso del sitio web de
                            Nova Life, ubicado aquí.

                            Al acceder a este sitio web, asumimos que aceptas estos términos y condiciones. No continúes
                            utilizando Nova Life si no estás de acuerdo en aceptar todos los términos y condiciones
                            establecidos en esta página.

                            La siguiente terminología se aplica a estos Términos y Condiciones, Declaración de Privacidad y
                            Aviso Legal, y a todos los Acuerdos: "Cliente", "Usted" y "Su" se refieren a usted, la persona
                            que inicia sesión en este sitio web y cumple con los términos y condiciones de la empresa. "La
                            Empresa", "Nosotros", "Nuestro" y "Nosotros", se refiere a nuestra empresa. "Parte", "Partes" o
                            "Nosotros", se refiere tanto al Cliente como a nosotros. Todos los términos se refieren a la
                            oferta, aceptación y consideración del pago necesario para llevar a cabo el proceso de nuestra
                            asistencia al Cliente de la manera más apropiada para el propósito expreso de satisfacer las
                            necesidades del Cliente con respecto a la provisión de los servicios declarados por la Empresa,
                            de acuerdo con y sujeto a la ley vigente en los Países Bajos. Cualquier uso de la terminología
                            anterior u otras palabras en singular, plural, mayúsculas y/o él/ella o ellos, se toma como
                            intercambiable y, por lo tanto, se refiere a lo mismo.
                            <h3 class="mt-5 mb-3" id="cookies">Cookies</h3>
                            <p>Utilizamos cookies. Al acceder a Nova Life, aceptas el uso de cookies de acuerdo con la
                                Política de Privacidad de Nova Life.

                                La mayoría de los sitios web interactivos utilizan cookies para permitirnos recuperar los
                                detalles del usuario en cada visita. Las cookies son utilizadas por nuestro sitio web para
                                habilitar la funcionalidad de ciertas áreas y facilitar la visita de las personas a nuestro
                                sitio. Algunos de nuestros socios afiliados/publicitarios también pueden utilizar cookies.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footers.auth.footer')
@endsection
