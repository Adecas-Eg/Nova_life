<div class="">
    @if ($message = session()->has('info'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <span class="alert-icon alert text-white"><i class="ni ni-like-2"></i></span>
            <span class="text-white mb-0">{{ session('info') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($message = session()->has('error'))
        <div class="alert alert-danger" role="alert">
            <p class="text-white mb-0">{{ session('error') }}</p>
        </div>
    @endif
</div>
