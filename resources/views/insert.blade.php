@extends('layouts.app')

@section('content')

	<form method="POST" action="">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}

	</form>

@endsection