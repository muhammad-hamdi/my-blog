<div class="form-group row">
    {{ Form::label(null, $label, ['class' => 'control-label col-lg-2']) }}
    <div class="col-lg-10">
        <img
            class="img-responsive file-styled-target"
            src="{{ $url }}"
            id="{{ $name }}"
            @foreach (($attributes ?: []) as $key => $value)
                {{ $key }}="{{ $value }}"
            @endforeach>
    </div>
</div>
