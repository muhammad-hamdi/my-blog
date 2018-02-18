@extends('dashboard.auth.layout')

@section('content')
<form action="{{ route('password.email') }}" method="POST">
    {{ csrf_field() }}
    <div class="panel panel-body login-form">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300">
                <i class="icon-key"></i>
            </div>
            <h5 class="content-group">@lang('auth.sentences.Reset Password')</h5>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback has-feedback-left">
            <input type="email" name="email" class="form-control" placeholder="@lang('users.attributes.email')" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn bg-pink-400 btn-block">
                @lang('auth.sentences.Send Password Reset Link')
            </button>
        </div>
    </div>
</form>
@endsection
