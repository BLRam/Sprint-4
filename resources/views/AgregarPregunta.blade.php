@extends ('layouts.app')

@section('principal')
<form class="agregarpregunta" action="/preguntas" method="post"  enctype="multipart/form-data">
  {{ csrf_field() }}
 <label for="">Pregunta</label>
 <input type="text" name="pregunta" value="">
 <br>
 <label for="">Respuesta Correcta</label>
 <input type="text" name="respuesta" value="">
 <br>
 <label for="">Respuesta Incorrecta 1</label>
 <input type="text" name="respuesta1" value="">
 <br>
 <label for="">Respuesta Incorrecta 2</label>
 <input type="text" name="respuesta2" value="">
 <br>
 <label for="">Respuesta Respuesta Incorrecta 3</label>
 <input type="text" name="respuesta3" value="">
 <br>

 <button type="submit" name="button">Guardar</button>
</form>

@endsection
