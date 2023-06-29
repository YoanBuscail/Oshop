<?php

class ErrorController extends ControllerModel
{
    public function error404()
    {
        $this->show("error404");
    }
}