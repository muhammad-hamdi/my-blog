@php
    $supportedLanguages = \App\Locales\Language::all();
@endphp

<div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        @foreach($supportedLanguages as $language)
        <li role="presentation" class="{{ $loop->first ? 'active' : '' }}">
            <a href="#multilingual-form-{{ $language->getCode() }}" aria-controls="home" role="tab" data-toggle="tab">
                {{ $language->getName() }}
            </a>
        </li>
        @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        @foreach($supportedLanguages as $language)
            <div role="tabpanel" class="tab-pane{{ $loop->first ? ' active' : '' }}" id="multilingual-form-{{ $language->getCode() }}">
                <?php
                    $renderResult = $render($language->getCode(), $language);

                    if (is_array($renderResult)) {
                        foreach ($renderResult as $item) {
                            echo e($item);
                        }
                    } else {
                        echo e($renderResult);
                    }
                ?>
            </div>
        @endforeach
    </div>
</div>