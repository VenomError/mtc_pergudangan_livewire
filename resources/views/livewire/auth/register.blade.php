<div>
    <h3 class="panel-title">Registration</h3>
    <div>

        @error('name')
            <code>
                {{ $message }}
            </code>
        @enderror
        <div class="input-group mb-25">
            <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Full Name" wire:model='name'>
        </div>

        @error('email')
            <code>
                {{ $message }}
            </code>
        @enderror
        <div class="input-group mb-25">
            <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Email" wire:model='email'>
        </div>

        @error('phone')
            <code>
                {{ $message }}
            </code>
        @enderror
        <div class="input-group mb-25">
            <span class="input-group-text"><i class="fa-regular fa-phone"></i></span>
            <input type="text" class="form-control" placeholder="Phone" wire:model='phone'>
        </div>

        @error('password')
            <code>
                {{ $message }}
            </code>
        @enderror
        <div class="input-group mb-20">
            <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
            <input type="password" class="form-control rounded-end" placeholder="Password" wire:model='password'>
            <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
        </div>
        <div class="d-flex justify-content-between mb-25">
            <div class="form-check">
            </div>
        </div>

        <button class="btn btn-primary w-100 login-btn" wire:click='register()'>
            <span wire:loading.class='d-none'>Register</span> <span wire:loading.class.remove='d-none'
                class="d-none">Loading...</span>
        </button>
        <p class="text-white fs-14 mt-2">Have an account ? <a href="{{ route('login') }}">Login</a> here</p>
    </div>
</div>
