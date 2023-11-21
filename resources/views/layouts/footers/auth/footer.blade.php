<footer class="footer pt-5 mt-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <a href="/">
                        <img src="{{ asset('img/logo1.png') }}" alt="main_logo" height="30%" width="15%">
                    </a>
                    <h6 class="font-weight-bolder mb-4">Nova Life</h6>
                </div>
                <div>
                    <ul class="d-flex flex-row ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.facebook.com/novalife" target="_blank">
                                <i class="fab fa-facebook text-lg opacity-8" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://twitter.com/novalife" target="_blank">
                                <i class="fab fa-twitter text-lg opacity-8" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://github.com/novalifeofficial" target="_blank">
                                <i class="fab fa-github text-lg opacity-8" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w"
                                target="_blank">
                                <i class="fab fa-youtube text-lg opacity-8" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Compañia</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sobre')}}" target="_blank">
                                Sobre nosotros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('faq')}}" target="_blank">
                                Preguntas frecuentes
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                    <h6 class="text-sm">Terminos legales</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('terminos')}}"
                                target="_blank">
                                Terminos  &amp; Condiciones
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('privacidad')}}"
                                target="_blank">
                                Privacidad
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark my-4 text-sm font-weight-normal">
                        Todos  derechos de autor Reservados ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Nova Life
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
