@extends('dashboard.auth.layout', ['title' => trans('auth.actions.login')])

@section('content')
<!-- Simple login form -->
<form action="{{ route('login') }}" method="POST">
    {{ csrf_field() }}
    <div class="panel panel-body login-form{{ $errors->any() ? ' animated shake' : '' }}">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300">
                <i class="icon-lock"></i>
            </div>
            <h5 class="content-group">
                @lang('auth.sentences.Login to your account')
                <small class="display-block">
                    @lang('auth.sentences.Enter your credentials below')
                </small>
            </h5>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback has-feedback-left">
            <input type="email" name="email" class="form-control" placeholder="@lang('users.attributes.email')" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback has-feedback-left">
            <input type="password" name="password" class="form-control" placeholder="@lang('users.attributes.password')" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
        </div>
        <div class="form-group login-options">
            <div class="row">
                <div class="col-sm-6">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="remember" class="styled" checked="checked">
                        @lang('auth.sentences.Remember me')
                    </label>
                </div>

                <div class="col-sm-6 text-right">
                    <a href="{{ route('password.request') }}">@lang('auth.sentences.Forgot password')</a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn bg-pink-400 btn-block">
                @lang('auth.actions.login')
                <i class="icon-circle-left2 position-right"></i>
            </button>
        </div>
    </div>
</form>
<!-- /simple login form -->
@endsection