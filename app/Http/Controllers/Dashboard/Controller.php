<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * The default page size for eloquent.
     *
     * @var int
     */
    protected $pageSize = 5;

    /**
     * Send a flash message and Redirect to index.
     *
     * @param  string $event
     * @param  string $level
     * @param  string $resource
     * @param  string $lang
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToIndexWithFlash($event = 'created', $level = 'success', $resource = null, $lang = null)
    {
        $this->flash($event, $level, $lang);

        return $this->redirectToIndex($resource);
    }

    /**
     * Send a flash message.
     *
     * @param  string $event
     * @param  string $level
     * @param  string $lang
     *
     * @return \Laracasts\Flash\FlashNotifier
     */
    public function flash($event = 'created', $level = 'success', $lang = null)
    {
        if (! $lang) {
            $lang = $this->guessLangName();
        }

        return flash(trans($lang . '.messages.' . $event), $level);
    }

    /**
     * Redirect to index.
     *
     * @param null $resource
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToIndex($resource = null)
    {
        if (! $resource) {
            $resource = $this->guessResourceName();
        }

        return redirect()->route("dashboard.$resource.index");
    }

    public function redirectToBack($resource = null)
    {
        if (! $resource) {
            $resource = $this->guessResourceName();
        }

        return redirect()->route("create");
    }

    /**
     * Guess the resource name of the controller.
     *
     * @return string
     */
    protected function guessResourceName()
    {
        $classBaseName = class_basename(get_class($this));

        return str_plural(snake_case(str_replace('Controller', '', $classBaseName), '-'));
    }

    /**
     * Guess the lang name of the controller.
     *
     * @return string
     */
    protected function guessLangName()
    {
        $classBaseName = class_basename(get_class($this));

        return str_plural(snake_case(str_replace('Controller', '', $classBaseName)));
    }
}
