@section('addCss')
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
  <style>
    .dropzone {
      border: none;
      background-color: #f5f5f5;
    }

    .dropzone .dz-message .dz-button {
      font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-weight: 500;
      color: #777;
      text-transform: uppercase!important;
      font-size: 12px;
      line-height: 24px;
    }
  </style>
@endsection

<section class="image-edge pt120 pt-xs-40 pb0">
  <div class="col-md-6 col-sm-4 p0">
    <img alt="Screenshot" class="mb-xs-24" src="{{ asset('img/utensilios_cepillo.jpg') }}">
  </div>
  <div class="container">
    <div class="col-md-5 col-md-offset-1 col-sm-7 col-sm-offset-1 v-align-transform right">
      <h3 class="mb40 mb-xs-16" spellcheck="false" data-ms-editor="true">GET A FREE ESTIMATE</h3>
      <form
        id="estimate"
        class="form-email"
        data-success="Thanks for your submission, we will be in touch shortly."
        data-error="Please fill all fields correctly."
        enctype="multipart/form-data"
        action="#"
      >
        @csrf
        @method('POST')
        <input
          type="text"
          class="validate-required"
          name="name"
          placeholder="Your Name"
          spellcheck="false"
          data-ms-editor="true"
        >
        <input
          type="text"
          class="validate-required"
          name="phone"
          placeholder="Your Phone"
          spellcheck="false"
          data-ms-editor="true"
        >
        <input
          type="text"
          class="validate-required validate-email"
          name="email"
          placeholder="Email Address"
          spellcheck="false"
          data-ms-editor="true"
        >
        <textarea
          class="validate-required"
          name="message"
          rows="4"
          placeholder="Please describe your dental case or treatment that you are intersted."
          spellcheck="false"
          data-ms-editor="true"
        ></textarea>
        <div
          class="dropzone"
          id="files"
          style="margin-bottom: 24px"
        ></div>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>
</section>

@section('addJs')
  <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
  <script>
    Dropzone.autoDiscover = false;
    $("div#files").dropzone({ url: "#" });
  </script>
@endsection