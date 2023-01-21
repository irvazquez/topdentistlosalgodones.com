@extends('layouts/mainLayout')

@section('content')
  @foreach($content as $template)
    @include('partials/' . $template->template, ['content' => $template->content])
  @endforeach
@endsection