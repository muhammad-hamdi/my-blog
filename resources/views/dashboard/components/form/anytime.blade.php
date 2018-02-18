<div class="form-group row{{ $errors->has($name) ? ' has-error' : '' }}">
    {{ Form::label($name, $label, ['class' => 'control-label col-lg-2']) }}

    <div class="col-lg-10">
        <span>
            <button type="button" class="btn btn-default btn-icon" id="any_time_picker_button_{{ $name }}"><i class="icon-calendar3"></i></button>
        </span>

        <span class="col-lg-11">

            {{ Form::text($name, $value ?: old($name), array_merge(['class' => 'form-control', 'id' => "any_time_picker_input_$name"], $attributes ?: [])) }}

            @if ($errors->has($name))
                <strong class="help-block">{{ $errors->first($name) }}</strong>
            @endif

            <span class="help-block">Format must be YYYY-MM-DD HH:MM:SS</span>
        </span>

    </div>

</div>


@push('scripts')
    <script>
        // On demand picker
        $('#any_time_picker_button_{{ $name }}').click(function (e) {
            $('#any_time_picker_input_{{ $name }}').AnyTime_noPicker().AnyTime_picker().focus();
            e.preventDefault();
        });
    </script>
@endpush