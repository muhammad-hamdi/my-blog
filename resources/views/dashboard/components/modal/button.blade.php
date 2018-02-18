<!-- Button trigger modal -->
<button type="button" class="btn btn-{{ $status or 'primary' }}" data-toggle="modal" data-target="#{{ $id }}">
  {{ $content or $slot }}
</button>
