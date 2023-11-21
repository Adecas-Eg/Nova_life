@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <div class="bg-gray-200 container-fluid py-4">

        <section class="pt-3 pt-md-5 pb-md-5 pb-lg-7">
            <div class="container">
                <div class="col-12 mx-auto">
                    <div class="card shadow-lg">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-info border-radius-lg p-4">
                                <h3 class="text-white mb-0">FAQ</h3>
                                <p class="text-white opacity-8 mb-0">U: Aug 30 2021</p>
                            </div>
                        </div>
                        <div class="card-body p-sm-5 pt-0">
                            <h5 class="my-4">Basicas</h5>
                            <div class="accordion" id="accordionFaq">
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            ¿Como me registro?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">
                                            Ir a la Página de Registro:

                                            Una vez en la página principal del sitio, busca un enlace que generalmente se
                                            llama "Registrarse" o "Crear cuenta".

                                            Haz clic en el enlace de registro, y serás dirigido a una página que contiene un
                                            formulario de registro. Completa los campos requeridos, que generalmente
                                            incluyen:
                                            Usuario.
                                            Dirección de correo electrónico.
                                            Contraseña
                                            Acepta Términos y Condiciones:

                                            Después de completar todos los campos obligatorios y realizar cualquier
                                            verificación necesaria, haz clic en el botón de envío o "Registrarse" para
                                            enviar el formulario.

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            ¿Tiene algun costo publicar inmuebles?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">
                                            la publicación en nuestro portal es gratuita actualmente
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            ¿Que informacion puedo ingresar para la publicacion de mi inmueble?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">
                                            Puedes publicar una breve descripción de tu inmueble en la cual especifique su
                                            ubicación, área, precio y demás características que generen interés a los
                                            usuarios. También puedes cargar fotos.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingFour">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            ¿Como puedo modificar mis inmuebles?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">
                                            En tu Menú Personal ingresa tus datos de usuario (E- mail y clave), en la
                                            pestaña Administrar inmuebles podrás seleccionar el aviso que quieras modificar
                                            o
                                            desactivar.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingFifth">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth"
                                            aria-expanded="false" aria-controls="collapseFifth">
                                            ¿Como me contactarian los clientes?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseFifth" class="accordion-collapse collapse"
                                        aria-labelledby="headingFifth" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">

                                            Los usuarios interesados en tu inmueble te contactarán directamente a través de
                                            tu E- mail y teléfono, luego de llenar el formulario adjunto al aviso. Si eres
                                            un profesional y dispones de una Oficina Virtual Constructor, tu microsite te
                                            ofrece la posibilidad de monitorear el impacto de tu publicación.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-5 mb-4">Cuenta &amp; Configuracion</h5>
                            <div class="accordion" id="accordionFaq2">
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingOne1">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                            aria-expanded="false" aria-controls="collapseOne1">
                                            ¿Como puedo cambiar mi contraseña?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseOne1" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne1" data-bs-parent="#accordionFaq2">
                                        <div class="accordion-body text-sm opacity-8">
                                            En tu Menú Personal ingresa tus datos de usuario (E- mail y clave), en la
                                            pestaña perfil estan sus datos personales alli puede cambiar la contraseña
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingTwo1">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                            aria-expanded="false" aria-controls="collapseTwo1">
                                            ¿Cómo puedo eliminar mi cuenta?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseTwo1" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo1" data-bs-parent="#accordionFaq2">
                                        <div class="accordion-body text-sm opacity-8">
                                            No actualmente no puede eliminar su cuenta puede enviar un correo pulsando <a
                                                href="">aqui</a> para solicitar desactivar la cuenta
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingThree1">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                            aria-expanded="false" aria-controls="collapseThree1">
                                            ¿Que hacer si olvide mi contraseña?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseThree1" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree1" data-bs-parent="#accordionFaq2">
                                        <div class="accordion-body text-sm opacity-8">
                                            En tu Menú Personal encontrarás la opción de Recordar Clave, en la cual podrás
                                            digitar tu E-mail de contacto y en pocos minutos recibirás un mensaje de
                                            recuperación.
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footers.auth.footer')
@endsection
