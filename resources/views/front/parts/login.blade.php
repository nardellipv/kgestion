<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .login-container {
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .login-logo {
        position: relative;
        margin-left: -41.5%;
    }

    .login-logo img {
        position: absolute;
        width: 20%;
        margin-top: 19%;
        background: #282726;
        border-radius: 4.5rem;
        padding: 5%;
    }

    .login-form-1 {
        padding: 9%;
        background: #3764eb;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-1 h3 {
        text-align: center;
        margin-bottom: 12%;
        color: #fff;
    }

    .login-form-2 {
        padding: 9%;
        background: #f05837;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-2 h3 {
        text-align: center;
        margin-bottom: 12%;
        color: #fff;
    }

    .btnSubmit {
        font-weight: 600;
        width: 50%;
        color: #282726;
        background-color: #fff;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
    }

    .btnForgetPwd {
        color: #fff;
        font-weight: 600;
        text-decoration: none;
    }

    .btnForgetPwd:hover {
        text-decoration: none;
        color: #fff;
    }
</style>
<div id="login" class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Ingresar</h3>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input id="email" type="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" placeholder="Email"
                           required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" placeholder="Contraseña" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Ingresar') }}
                    </button>
                </div>
                <div class="form-group">
                    <a href="#" class="btnForgetPwd">Olvide mi contraseña</a>
                </div>
            </form>
        </div>
        <div class="col-md-6 login-form-2">
            <div class="login-logo">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            </div>
            <h3>Registrarse</h3>
            <form method="POST" action="{{ route('register') }}"
                  aria-label="{{ __('Register') }}">
                @csrf
                    <div class="form-group">
                        <input id="name" type="text"
                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name" value="{{ old('name') }}" placeholder="Nombre"
                               required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" placeholder="Email"
                               required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <small class="text text-primary">
                            Mínimo 6 caracteres
                        </small>
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" placeholder="Confirmar Password"
                               required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">
                        {{ __('Registrarse') }}
                    </button>
            </form>
        </div>
    </div>
</div>