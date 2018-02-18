<div class="form-group row{{ $errors->has($name) ? ' has-error' : '' }}">
    {{ Form::label($name, $label, ['class' => 'control-label col-lg-2']) }}
    <div class="col-lg-10">
        {{ Form::select($name, $options, $value ?: old($name), array_merge(['class' => 'form-control selectpicker show-tick', 'id' => $name, 'data-width' => '100%'], $attributes ?: [])) }}
        @if ($errors->has($name))
            <strong class="help-block">{{ $errors->first($name) }}</strong>
        @endif
    </div>
</div>
