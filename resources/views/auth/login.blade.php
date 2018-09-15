@extends('layouts.app')

@section('content')
<div class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
              <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h1>Login</h1>
                <p class="text-muted">Entre com sua conta</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="row">
                  <div class="col-6">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar
                    <button type="submit" class="btn btn-primary">
                      Entrar
                    </button>
                  </div>
                  <div class="col-6 text-right">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      Esqueceu sua senha ?
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Cadastro</h2>
                <p>Não possue acesso, requisite um novo acesso!</p>
                <a class="btn btn-primary active mt-3" href="{{ route('register') }}">
                  Requisitar Acesso
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
