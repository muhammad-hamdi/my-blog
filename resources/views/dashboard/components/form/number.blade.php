<div class="form-group row{{ $errors->has($name) ? ' has-error' : '' }}">
    {{ Form::label($name, $label, ['class' => 'control-label col-lg-2']) }}
    <div class="col-lg-10">
        {{ Form::number($name, $value ?: old($name), array_merge(['class' => 'form-control'], $attributes ?: [])) }}
        @if ($errors->has($name))
            <strong class="help-block">{{ $errors->first($name) }}</strong>
        @endif
    </div>
</div>
