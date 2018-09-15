@extends('layouts.app')

@section('content')
<div class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
            <div class="card-body p-4">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <h1>Requisição de Acesso</h1>
                    <p class="text-muted"></p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="icon-user"></i>
                        </span>
                    </div>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Usuário">
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                  </div>
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-mail">
                  @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                </span>
            </div>
            <input id="password" type="password" class="form-control" name="password" required placeholder="Senha">
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
        <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="icon-lock"></i>
            </span>
        </div>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repita a Senha">
    </div>
    <button type="submit" class="btn btn-primary">
        Registrar
    </button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection