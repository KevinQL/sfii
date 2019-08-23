<?php
class IngresoControllersB{

    public function ingresoController(){

        if (isset($_POST["usuarioIngreso"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioIngreso"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordIngreso"])) {
                #$encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $datosCont = array("usuario" => $_POST["usuarioIngreso"], "password" => $_POST["passwordIngreso"]);


                $respuesta = IngresoModelsB::ingresoModels($datosCont, "usuarios");

               // $intentos = $respuesta["intentos"];
                //$usuarioActual = $_POST["usuarioIngreso"];
               // $maxIntentos = 2;
                //header("location:index.php?action=inicio");
                //if ($intentos < $maxIntentos) {

                    if ($respuesta["Cargo"] == $_POST["usuarioIngreso"] && $respuesta["Clave"] == $_POST["passwordIngreso"]) {

                       /* $intentos = 0;
                        $datosCont = array("usuarioActual" => $usuarioActual, "actualizarIntentos" => $intentos);
                        $respuestaActualizarIntentos = IngresoModelsB::intentosModels($datosCont, "usuarios");*/

                        session_start();
                        $_SESSION["validar"] = true;
                        $_SESSION["usuario1"] = $respuesta["usuario"];

                        header("location:home");
                        // header("location:index.php?action=inicio");


                    } else {
                       // ++$intentos;

                       // $datosCont = array("usuarioActual" => $usuarioActual, "actualizarIntentos" => $intentos);
                       // $respuestaActualizarIntentos = IngresoModelsB::intentosModels($datosCont, "usuarios");


                        echo '<div class="alert alert-danger">Error Usuario o contaseña  incorrecto1.</div>';
                    }

              /*  } else {


                    $intentos = 0;
                    $datosCont = array("usuarioActual" => $usuarioActual, "actualizarIntentos" => $intentos);
                    $respuestaActualizarIntentos = IngresoModelsB::intentosModels($datosCont, "usuarios");


                    echo '<div class="alert alert-danger">Ha intentado 3 veces, demuestra que no es un robot </div>';
                    //header("location:index.php?action=fallo3intentos");


                }*/


            }
        }


    }
}
