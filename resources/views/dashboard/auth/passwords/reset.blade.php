@extends('dashboard.auth.layout')

@section('content')
<form action="{{ route('password.request') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300">
                <i class="icon-unlocked"></i>
            </div>
            <h5 class="content-group">@lang('auth.sentences.Reset Password')</h5>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback has-feedback-left">
            <input type="email" name="email" class="form-control" placeholder="@lang('users.email')" required>
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
            <input type="password" name="password" class="form-control" placeholder="@lang('users.password')" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback has-feedback-left">
            <input type="password" name="password_confirmation" class="form-control" placeholder="@lang('users.password_confirmation')" required>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn bg-pink-400 btn-block">@lang('auth.sentences.Reset Password')</button>
        </div>
    </div>
</form>
@endsection
