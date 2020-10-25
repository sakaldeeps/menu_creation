@extends('layout')

@section('content')
<h1>this is home page</h1>
@foreach($lang as $languages)
<p>
{{$languages}}
</p>

@endforeach
@endsection