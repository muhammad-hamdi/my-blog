<!-- Table Panel -->
<div class="panel panel-flat">
    @if (isset($heading))
        <div class="panel-heading">
            {{ $heading }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    {{ $thead }}
                </tr>
            </thead>
            <tbody>
                @if(isset($model))
                    @if ($model->count())
                        {{ $tbody }}
                    @else
                        <tr>
                            <td colspan="100%" style="text-align: center;">
                                @lang('dashboard.components.list.empty')
                            </td>
                        </tr>
                    @endif
                @else
                    {{ $tbody }}
                @endif
            </tbody>
        </table>
    </div>
    {{-- Generate Pagination If Pagination Links Not Empty --}}
    @if (isset($model) && method_exists($model, 'links') && ! empty($model->links()->toHtml()))
        <div class="panel-heading" style="padding: 25px;">
            <div class="heading-elements">
                {{ $model->appends(request()->query())->links() }}
            </div>
        </div>
    @endif
</div>
<!-- /Table Panel -->
