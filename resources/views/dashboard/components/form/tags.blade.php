<div class="form-group row{{ $errors->has($name) ? ' has-error' : '' }}">
    {{ Form::label($name, $label, ['class' => 'control-label col-lg-2']) }}
    <div class="col-lg-10">
        {{ Form::text($name, $value ?: old($name), array_merge(['data-role' => 'tagsinput', 'class' => 'form-control', 'id' => $name], $attributes ?: [])) }}
        <strong class="help-block">@lang('dashboard.components.forms.tagsinput.help', ['separator' => '" , "'])</strong>
        @if ($errors->has($name))
            <strong class="help-block">{{ $errors->first($name) }}</strong>
        @endif
    </div>
</div>
