<div class="">
    @if ($message = session()->has('succes'))
        <div class="alert alert-info mx-3 alert-dismissible fade show" role="alert">
            <span class="alert-icon alert text-white"><i class="ni ni-like-2"></i></span>
            <span class="text-white mb-0">{{ session('succes') }}</span>
        </div>
    @endif
    @if ($message = session()->has('error'))
        <div class="alert alert-danger" role="alert">
            <p class="text-white mb-0">{{ session('error') }}</p>
        </div>
    @endif
</div>
