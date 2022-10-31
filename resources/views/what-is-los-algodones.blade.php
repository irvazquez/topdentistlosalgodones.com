@extends('layouts/mainLayout')

@section('content')
  @include('partials/text_center', ['content' => $text_center[0]])

  @include('partials/right_imagen_text', ['content' => $right_imagen[0]])

  @include('partials/text_center', ['content' => $text_center[1]])

  @include('partials/left_imagen_text', ['content' => $left_imagen[0]])

  @include('partials/text_center', ['content' => $text_center[2]])

@endsection