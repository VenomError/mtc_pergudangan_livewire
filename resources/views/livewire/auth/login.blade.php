<div>
    <h3 class="panel-title">Login</h3>

    <form method="POST" wire:submit='login'>
        @csrf
        @error('login')
            
        <div class="login-status">
            <div class="msg-error alert alert-danger py-2 px-3 rounded mb-20 fs-14"><i
                class="fa-regular fa-circle-exclamation me-2"></i> {{ $message }}</div>
            </div>
        @enderror


        @error('email')
        <code>{{ $message }}</code>
        @enderror
        <div class="input-group mb-25">
            <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Email address" wire:model='email'>
        </div>

        @error('password')
            <code>{{ $message }}</code>
        @enderror
        <div class="input-group mb-20">
            <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
            <input type="password" class="form-control rounded-end" placeholder="Password" wire:model='password'>
            <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
        </div>
        <div class="d-flex justify-content-between mb-25">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="loginCheckbox" wire:model.live='rememberMe'>
                <label class="form-check-label text-white" for="loginCheckbox">
                    Remember Me
                </label>
            </div>
            {{-- <a href="reset-password.html" class="text-white fs-14">Forgot Password?</a> --}}
        </div>
        <button class="btn btn-primary w-100 login-btn" type="submit">Sign in</button>
        <p class="text-white fs-14 mt-4">Dont have account? <a href="{{ route('register') }}">Register</a>
            here</p>
    </form>
</div>
