<?php

class viewsControlersb
{


    public function template()
    {

        include "views/template.php";

    }

    public function enlacesController()
    {

        if (isset($_GET["action"])) {

            $enlaces = $_GET["action"];

        } else {

            $enlaces = "index";

        }

        $respuesta = EnlacesModelsB::enlacesModels($enlaces);

        include $respuesta;

    }


}
