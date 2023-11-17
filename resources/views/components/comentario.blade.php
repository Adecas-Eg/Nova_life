<section>
    <div class="container my-5 py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card text-dark ">
                    <div class="card-body p-4 ">
                        <h4 class="mb-0 text-small lh-sm border-bottom">Comentarios </h4>
                        <p class="fw-light mb-4 pb-2 small lh-sm mt-2 ">Sección de comentarios del inmueble</p>
                        <form action="{{ route('comment.store', $casa->id) }}" method="post">
                            @csrf
                            <div class="d-flex text-body-secondary  ">
                                <textarea name="comment" class="form-control  mb-0 small lh-sm border-bottom" style="resize:none">
                            </textarea>
                            </div>
                            <div class="d-flex text-body-secondary pt-3 justify-content-end align-content-end">
                                <input type="submit" class="btn  bg-gradient-dark btn-sm lh-sm" id="prueba"
                                    value="Confirmar">
                            </div>
                        </form>
                        {{-- mostrar los comentarios --}}
                        @if (!empty($comments))
                            @foreach ($comments as $comment)
                                <div class="d-flex flex-start mt-2">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar"
                                        width="60" height="60" />
                                    <div>
                                        <h6 class="fw-bold mb-1">{{ $comment->user->username }}</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="mb-0 small lh-sm ">
                                                {{ $comment->created }}
                                            </p>
                                            @if ($comment->user->id == auth()->user()->id)
                                                <a href="#!" class="link-muted" data-bs-toggle="modal"
                                                    data-bs-target="#update{{ $comment->id }}"><i
                                                        class="fas fa-pencil-alt text-gradient text-dark ms-2"></i></a>
                                                <a href="#!" class="link-muted" data-bs-toggle="modal"
                                                    data-bs-target="#delete{{ $comment->id }}"><i
                                                        class="fas fa-trash-alt  text-gradient text-danger ms-2"></i></a>
                                            @endif

                                        </div>
                                        <p class="mb-0 small lh-sm border-bottom">
                                            {{ $comment->comment }}
                                        </p>
                                    </div>
                                </div>


                                {{-- modal para update de comentarios --}}
                                <div class="modal fade" id="update{{ $comment->id }}" tabindex="-1"
                                    aria-labelledby="exampleModdcalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('comment.update', $comment) }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        Modificar comentario
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <textarea name="comment" class="form-control   border-bottom" cols="40" rows="8">  {{ $comment->comment }}
                                                        </textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="delete{{ $comment->id }}" tabindex="-1"
                                    aria-labelledby="exampleModdcalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('comment.destroy', $comment) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        Eliminar comentario
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-danger">Confirmar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="d-flex flex-start mt-2">
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar"
                                    width="60" height="60" />

                            </div>
                        @endif
                    </div>
                    <hr class="my-0" />
                </div>
            </div>
        </div>
    </div>
</section>
