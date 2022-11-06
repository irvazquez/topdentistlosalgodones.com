@extends('layouts/mainLayout')

@section('content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <h3 class="uppercase color-primary mb40 mb-xs-24" spellcheck="false" data-ms-editor="true">Sample Price</h3>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Dental Procedure</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cleaning</td>
                <td>$30</td>
              </tr>
              <tr>
                <td>Fillings</td>
                <td>$60 - 80</td>
              </tr>
              <tr>
                <td>Extraction</td>
                <td>$80 per tooth</td>
              </tr>
              <tr>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>      
    </div>
  </section>
@endsection