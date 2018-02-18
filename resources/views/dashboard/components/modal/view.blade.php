<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">
            {{ $title }}
        </h4>
      </div>
      <div class="modal-body">
        <p>{{ $slot }}</p>
      </div>
      <div class="modal-footer">
          @if (isset($footer))
              {{ $footer }}
          @else
              <button type="button" class="btn btn-default" data-dismiss="modal">@lang('general.close')</button>
              <button type="button" class="btn btn-primary">@lang('general.save')</button>
          @endif
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
