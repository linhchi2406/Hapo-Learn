<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <ul class="nav">
                <li class="modal-content-login focus-on nav-item col-6" id="modal-login">
                    <a class="login nav-link active text-center" data-toggle="tab" href="#login" role="tab">LOGIN</a>
                </li>
                <li class="modal-content-register nav-item col-6" id="modal-register">
                    <a class="register nav-link text-center" data-toggle="tab" href="#register" role="tab">REGISTER</a>
                </li>
            </ul>
            <button class="btn btn-close-login d-flex justify-content-center align-items-center position-absolute" data-dismiss="modal" type="button">
                <span aria-hidden="true" class="position-absolute">&times;</span>
            </button>
            <div class="tab-content">
                <div class="tab-pane fade in show active p-3" id="login" role="tabpanel">
                    <form method="POST" action="{{ route('login') }}" role="form">
                        {!! csrf_field() !!}
                        <div class="modal-body mb-1 tab-pane">
                            <div class="md-form mb-4">
                                <label class="form-label" for="email-login">Username:</label>
                                <input id="email-login" type="email" class="form-control form-input @error('login_email') is-invalid @enderror" name="login_email" value="{{ old('login_email') }}" required autocomplete="email" autofocus>
                                @error('login_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="md-form mb-1">
                                <label class="form-label" for="password-login">Password:</label>
                                <input id="password-login" type="password" class="form-control form-input @error('login_password') is-invalid @enderror" name="login_password" required autocomplete="current-password">
                                @error('login_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="md-form form-group remember-checkbox mb-4 form-check p-0">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="float-right forgot-password" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-login w-50 mb-3 py-2">
                                    LOGIN
                                </button>
                                
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center p-0">
                            <span class="w-25 text-center position-relative">Login with</span>
                            <a class="btn login-google w-100 py-3 mb-3" href="#"><i class="fa fa-google"></i> Google</a>
                            <a class="btn login-facebook w-100 py-3 mb-5" href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade p-3" id="register" role="tabpanel">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="modal-body mb-1 tab-pane">
                            <div class="md-form form-sm mb-4">
                                <label class="form-label" for="name">Username:</label>
                                <input id="name" type="text" class="form-control form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="md-form form-sm mb-4">
                                <label class="form-label" for="email">Email:</label>
                                <input id="email" type="email" class="form-control form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="md-form form-sm mb-4">
                                <label class="form-label" for="password">Password:</label>
                                <input id="password" type="password" class="form-control form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="md-form form-sm mb-4">
                                <label class="form-label" for="password-confirm">Repeat Password:</label>
                                <input id="password-confirm" type="password" class="form-control form-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="text-center mt-2 mb-4">
                                <button type="submit" class="btn btn-login w-50">
                                    REGISTER
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
