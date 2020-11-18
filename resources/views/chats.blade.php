@extends('layouts.app')

@section('content')
<div class="container">
<example-component :user="{{ auth()->user() }}"></example-component>
</div>
@endsection
