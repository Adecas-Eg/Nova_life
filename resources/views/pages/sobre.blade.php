@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <section class="pt-3 pt-md-5 pb-md-5 pt-lg-8 bg-gray-200">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    <div class="card shadow-lg mb-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-primary border-radius-lg p-3">
                                <h3 class="text-white mb-0">Sobre nosotros</h3>
                            </div>
                        </div>
                        <div class="card-body p-5">

                            "Nosotros: Somos su Compañero en la Búsqueda del Hogar Perfecto"

                            En Nova lie, entendemos que tu hogar es más que un lugar; es el escenario de tus
                            sueños, experiencias y momentos preciosos. Somos tu aliado apasionado en la búsqueda del hogar
                            perfecto, ya sea para comprar o rentar.

                            Nuestro equipo está formado por expertos en bienes raíces comprometidos con hacer que tu proceso
                            de búsqueda sea fluido y satisfactorio. Nos dedicamos a entender tus necesidades, aspiraciones y
                            preferencias, para ofrecerte opciones que no solo cumplen con tus expectativas, sino que las
                            superan.

                            Con un enfoque personalizado y tecnología de vanguardia, te proporcionamos acceso a una amplia
                            gama de propiedades a través de recorridos virtuales, imágenes detalladas y descripciones
                            precisas. Simplificamos la búsqueda para que puedas explorar desde la comodidad de tu hogar,
                            ahorrando tiempo y esfuerzo.

                            En Nova lie, no solo ayudamos a encontrar casas y rentas, sino que también te
                            guiamos a través de cada paso del proceso, asegurándonos de que cada transacción sea tan sin
                            complicaciones como sea posible. Tu satisfacción y comodidad son nuestra prioridad.

                            Confía en nosotros para ser tu compañero de confianza en la búsqueda de tu próximo hogar.
                            Estamos aquí para convertir tus sueños inmobiliarios en realidad.


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footers.auth.footer')
@endsection
