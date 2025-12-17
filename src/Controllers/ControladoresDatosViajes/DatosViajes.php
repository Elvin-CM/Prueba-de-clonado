<?php

namespace Controllers\ControladoresDatosViajes;

use Controllers\PublicController;
use Dao\DaoViajes\DatosViajes as dv;
use Views\Renderer;

class DatosViajes extends PublicController
{
    public function run(): void
    {
        $viewData = [];
        $viewData["DatosViajes"] = [];
        $viewData["DatosViajes"] = dv::obtenerDatos();
        $viewData["total"] = count($viewData["DatosViajes"]);
        Renderer::render("VistaDatosViajes/listadatos", $viewData);
    }
}
