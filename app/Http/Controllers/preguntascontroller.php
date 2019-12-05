<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\pregunta;

class preguntascontroller extends Controller
{
      public function APreguntas (Request $datos){

        $validaciones = [
              'pregunta' => 'required|max:71',
              'respuesta' => 'required|integer',
              'respuesta1' => 'required|integer',
              'respuesta2' => 'required|integer',
              'respuesta3' => 'required|integer',

            ];
            // $mensajes = [];

            $this->validate($datos, $validaciones);
            $PreguntaNueva = new Pregunta();
            $PreguntaNueva->nombre = $datos['pregunta'];
            $PreguntaNueva->respuesta = $datos['respuesta'];
            $PreguntaNueva->respuesta1 = $datos['respuesta1'];
            $PreguntaNueva->respuesta2 = $datos['respuesta2'];
            $PreguntaNueva->respuesta3 = $datos['respuesta3'];
            $PreguntaNueva->save();

            return redirect('/preguntas');

















          // $PreguntaNuevo = new Pregunta();
          // $PreguntaNuevo->pregunta = $req["pregunta"];
          // $PreguntaNuevo->respuesta = $req["respuesta"];
          // $PreguntaNuevo->respuesta1 = $req["respuesta1"];
          // $PreguntaNuevo->respuesta2 = $req["respuesta2"];
          // $PreguntaNuevo->respuesta3 = $req["respuesta3"];
          //
          //
          // $PreguntaNuevo->save();
          // return redirect('/preguntas');
      }

  }
