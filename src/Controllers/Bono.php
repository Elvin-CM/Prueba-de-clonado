<?php

namespace Controllers;

use Controllers\PublicController;
use Views\Renderer;

class Bono extends PublicController
{
    public function run(): void
    {
        $arrMenues =
            [
                "label" => "Productos",
                "icon" => "",
                "url" => "index.php?page=Menu-Productos",
                "items" => [
                    "negro",
                    "red",
                    "blue"
                ]
            ];
        Renderer::render("bono", $arrMenues);
    }
}
