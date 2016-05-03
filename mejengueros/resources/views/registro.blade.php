@extends('layout.principal')
@section('content')
<section class="fondo">
<nav class="teal darken-4">
	<div class="nav-wrapper">
		<a href="{{asset('index')}}" class="brand-logo flow-text">Mejengueros FC</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
		</ul>
	</div>
</nav>
	<div class="container">
		<div class="row">
			<form class="col s12" action="{{asset('registro')}}" method="POST">
			{{Csrf_field ()}}
				<div class="row">
					<div class="input-field col s6">
					<input placeholder="" name="nombre" id="first_name" type="text" class="validate">
						<label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" name="lastname" type="text" class="validate">
						<label for="last_name">Last Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" name="pass" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" name="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="action">Registrar
					<i class="material-icons right">done</i>
				</button>
				<button href='index' class="btn waves-effect waves-light" name="cancel">Cancelar
					<i class="material-icons right">cancel</i>
				</button>
			</form>
		</div>
	</div>
</section>
@stop