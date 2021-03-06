
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}">

<label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : '' }}">

<label for="ApellidoMaterno">{{'Apellido Materno'}}</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : '' }}">

<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}">

<label for="Foto">{{'Foto'}}</label>
@if(isset($empleado->Foto))
<br>
<img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="200">
<br>
@endif
<input type="file" name="Foto" id="Foto" value="">

<input type="submit" value="{{ $Modo == 'crear' ? 'Agregar' : 'Modificar' }}">

<a href="{{ url('/empleados') }}">Regresar</a>