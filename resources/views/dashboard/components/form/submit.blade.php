<button
    type="submit"
    class="btn btn-primary pull-right btn-lg"
    @foreach(($attributes ?: []) as $attr => $val)
        {{ $attr }}="{{ $val }}"
    @endforeach>
    {{ $value }}
    <i class="{{ $icon or 'icon-arrow-left13'}} position-right"></i>
</button>
