@extends('layout.principal')
@section('content')
<nav class="teal darken-4">
	<div class="nav-wrapper">
		<a href="{{asset('index')}}" class="brand-logo flow-text">Mejengueros FC</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="" class="flow-text">Inicio</a></li>
			<li><a href='registro' class="flow-text">Ingresar</a></li>
			<li>Bienvenido</li>
		</ul>
	</div>
</nav>
<div class="container">
</div>
<script src="js/main.js"></script>
<script src="//code.jquery.com/jquery-1.12.3.js"></script>

@stop