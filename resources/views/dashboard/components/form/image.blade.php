<div class="form-group row{{ $errors->has($name) ? ' has-error' : '' }}">
    {{ Form::label($name, $label, ['class' => 'control-label col-lg-2']) }}
    <div class="col-lg-10">
        <div class="media no-margin-top">
            <div class="media-left">
                <a href="#">
                    <img
                    src="{{ $value or '' }}"
                    @foreach (array_merge($imageAttributes ?: [], ['id' => $name, 'class' => 'img-rounded file-styled-target']) as $key => $val)
                        {{ $key }}="{{ $val }}"
                    @endforeach
                    data-width="150"
                    data-height="150"
                    onclick="$('input[name=\'{{ $name }}\']').click();">
                </a>
            </div>

            <div class="media-body">
                <div class="uploader">
                    {{ Form::file($name, array_merge(['class' => 'file-styled', 'accept' => 'image/*', 'id' => $name, 'data-target' => $name], $inputAttributes ?: [])) }}
                    <span class="filename" style="user-select: none;">
                        @lang('dashboard.components.forms.imageinput.no-file-selected')
                    </span>
                    <span class="action btn bg-pink-400 legitRipple" style="user-select: none;">
                        @lang('dashboard.components.forms.imageinput.choose')
                    </span>
                </div>
                <span class="help-block">
                    {{ $errors->has($name) ? $errors->first($name) : trans('dashboard.components.forms.imageinput.help') }}
                </span>
            </div>
        </div>
    </div>
</div>
