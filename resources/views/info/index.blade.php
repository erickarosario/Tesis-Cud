@extends('layouts.admin')
@section('content')<br>
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					ADMINISTRADOR DE INFORMACION
				</span>

				<label class="label-input100" for="email"><h3>TITULO</h3></label>
				<div class="wrap-input100 validate-input" >
					<input class="input100" type="text"  placeholder="ingresar titulo">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for=""><h3>IMAGENES O VIDEOS</h3></label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" require="Type first name">
					<input  type="file" name="img" >
				
				</div>
			
					<label class="label-input100" ><h3>FECHA </h3></label>
				<div class="wrap-input100">
					<input  class="input100" type="date"  placeholder="insertar fecha">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" ><h3>DESCRIPCION</h3></label>
				<div class="wrap-input100 validate-input" >
					<textarea  class="input100"  placeholder="ingrese descripcion"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						REGISTRAR DATOS
					</button>
				</div>
			</form>
</div>
			</div>



	<div id="dropDownSelect1"></div>


@endsection