<?php

namespace Livewire\Concerns;

trait PerformsRedirects
{
    public $redirectTo;

    public function redirect($url)
    {
        $this->redirectTo = $url;
    }

    public function redirectRoute($name, $parameters = [], $absolute = true)
    {
        $this->redirectTo = route($name, $parameters, $absolute);
    }

    public function redirectAction($name, $parameters = [], $absolute = true)
    {
        $this->redirectTo = action($name, $parameters, $absolute);
    }
}
