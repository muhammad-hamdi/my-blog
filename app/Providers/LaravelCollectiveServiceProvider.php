<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class LaravelCollectiveServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Register custom form components.
         */

        Form::component('bsText', 'dashboard.components.form.text', ['label', 'name', 'value', 'attributes']);
        Form::component('bsTagsInput', 'dashboard.components.form.tags', ['label', 'name', 'value', 'attributes']);
        Form::component('bsTextarea', 'dashboard.components.form.textarea', ['label', 'name', 'value', 'attributes']);
        Form::component('bsHtmlEditor', 'dashboard.components.form.html-editor', ['label', 'name', 'value', 'attributes']);
        Form::component('bsNumber', 'dashboard.components.form.number', ['label', 'name', 'value', 'attributes']);
        Form::component('bsEmail', 'dashboard.components.form.email', ['label', 'name', 'value', 'attributes']);
        Form::component('bsPassword', 'dashboard.components.form.password', ['label', 'name', 'attributes']);
        Form::component('bsSelect', 'dashboard.components.form.select', ['label', 'name', 'options', 'value', 'attributes']);
        Form::component('bsMultipleSelect', 'dashboard.components.form.multiple-select', ['label', 'name', 'options', 'value', 'attributes']);
        Form::component('bsDatepicker', 'dashboard.components.form.datepicker', ['label', 'name', 'value', 'attributes']);
        Form::component('bsDatetimepicker', 'dashboard.components.form.anytime', ['label', 'name', 'value', 'attributes']);
        Form::component('bsImage', 'dashboard.components.form.image', ['label', 'name', 'value', 'imageAttributes', 'inputAttributes']);
        Form::component('bsImageDisplay', 'dashboard.components.form.image-display', ['label', 'name', 'url', 'attributes']);
        Form::component('bsSubmit', 'dashboard.components.form.submit', ['value', 'icon', 'attributes']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
