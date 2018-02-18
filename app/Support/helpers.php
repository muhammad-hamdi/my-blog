<?php

if ( ! function_exists('send_sms')) {
    /**
     * Send a message to a given user or mobile number.
     *
     * @param \App\Models\User|string $reciever
     * @param string $message
     * @return bool
     */
    function send_sms($reciever, $message)
    {

        // test on text file
        if (app()->environment('local', 'testing')) {
            $file = fopen(public_path('sms.txt'), "a");

            fwrite($file, $message . \Carbon\Carbon::now() . "\n");

            fclose($file);
        }

        // TODO: Send using mobiley api...
    }
}

if ( ! function_exists('get_supported_languages')) {

    /**
     * Get the supported language by the application.
     *
     * @return \App\Locales\Language[]
     */
    function get_supported_languages()
    {
        return App\Locales\Language::all();
    }
}

if ( ! function_exists('get_query_string_value')) {

    /**
     * Extract a query string value from a given url.
     *
     * @param $url
     * @param $property
     * @return mixed
     */
    function get_query_string_value($url, $property)
    {
        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $params);

        return $params[$property] ?? null;
    }
}

if ( ! function_exists('css_route_active')) {

    /**
     * Generate html element class if route is equals to a given route.
     *
     * @param  string $route
     * @param  string $className
     *
     * @return string
     */
    function css_route_active($route, $className = 'active')
    {
        return Route::currentRouteName() == $route ? $className : '';
    }
}

if ( ! function_exists('css_resource_active')) {

    /**
     * Generate html element class if route is in a given resource.
     *
     * @param  string $resource
     * @param  array $routes
     * @param  string $className
     *
     * @return string
     */
    function css_resource_active($resource, $routes = [], $className = 'active')
    {
        $routes = array_merge($routes, ['index', 'store', 'create', 'show', 'destroy', 'update', 'edit']);

        foreach ($routes as $route) {
            if (Route::currentRouteName() == ($resource.'.'.$route)) {
                return $className;
            }
        }

        return '';
    }
}

if ( ! function_exists('html_to_text')) {
    /**
     * Remove dangerous tags (with attributes) from html.
     *
     * @param  string $html
     *
     * @return string
     */
    function html_to_text($html)
    {
        return strip_tags($html);
    }
}

if ( ! function_exists('validate_base64')) {

    /**
     * Validate a base64 content.
     *
     * @param string $base64data
     * @param array $allowedMime  example ['png', 'jpg', 'jpeg']
     * @return bool
     */
    function validate_base64($base64data, array $allowedMime)
    {
        // strip out data uri scheme information (see RFC 2397)
        if (strpos($base64data, ';base64') !== false) {
            list(, $base64data) = explode(';', $base64data);
            list(, $base64data) = explode(',', $base64data);
        }

        // strict mode filters for non-base64 alphabet characters
        if (base64_decode($base64data, true) === false) {
            return false;
        }

        // decoding and then reeconding should not change the data
        if (base64_encode(base64_decode($base64data)) !== $base64data) {
            return false;
        }

        $binaryData = base64_decode($base64data);

        // temporarily store the decoded data on the filesystem to be able to pass it to the fileAdder
        $tmpFile = tempnam(sys_get_temp_dir(), 'medialibrary');
        file_put_contents($tmpFile, $binaryData);


        // guard Against Invalid MimeType
        $allowedMime = array_flatten($allowedMime);

        // no allowedMimeTypes, then any type would be ok
        if (empty($allowedMime)) {
            return true;
        }

        // Check the MimeTypes
        $validation = Illuminate\Support\Facades\Validator::make(
            ['file' => new Illuminate\Http\File($tmpFile)],
            ['file' => 'mimes:' . implode(',', $allowedMime)]
        );

        return ! $validation->fails();
    }
}

if ( ! function_exists('languages')) {

    /**
     * Returns an array of all locales languages.
     *
     * @return array
     */
    function languages()
    {
        return (array) config('app.locales');
    }
}

if ( ! function_exists('language')) {

    /**
     * Returns locale language code.
     *
     * @param string $key
     * @return array
     */
    function language($key)
    {
        $language = app()->getLocale();

        return config('app.locales.' . $language)[$key] ?? null;
    }
}
