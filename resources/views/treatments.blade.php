@extends('layouts/mainLayout')

@section('content')
  @foreach($treatment as $template)
    @include('partials/' . $template->template, ['content' => $template->content])
  @endforeach
@endsection