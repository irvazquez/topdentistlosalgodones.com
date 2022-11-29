@section('flash_message')
  @if(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div>
        {{ session('success') }}
      </div>
    </div>
  @endif
  @if($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif

@endsection
<section class="pt120 pt-xs-40 pb0" id="getEstimate">
  <div class="container">
    <div class="col-md-12">
      <h3 class="mb40 mb-xs-16" spellcheck="false" data-ms-editor="true">GET A FREE ESTIMATE</h3>
      <form
        id="estimate"
        method="POST"
        data-success="Thanks for your submission, we will be in touch shortly."
        data-error="Please fill all fields correctly."
        enctype="multipart/form-data"
        action="{{ route('estimateForm') }}"
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
        <div class="mb-3">
          <label for="formFile" class="form-label">Maximum of 4 images (OPTIONAL 2 MB per image)</label>
          <input
            id="fileImages"
            class="form-control"
            type="file"
            name="files[]"
            accept="image/*"
            id="formFile"
            multiple
          >
      </div>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>
</section>
