@extends('layouts/mainLayout')

@section('content')
  @include('partials/text_center', [ 'content' => $text_center[0]] )  

  @include('partials/right_imagen_box_text', [ 'content' => $right_imagen_box[0] ])

  @include('partials/two_columns', [ 'content' => $two_columns[0] ])

  @include('partials/left_imagen_box_text', [ 'content' => $left_imagen_box[0] ])

  @include('partials/two_columns', [ 'content' => $two_columns[1] ])

  @include('partials/text_tabs', [ 'content' => $text_tabs[0] ])
@endsection