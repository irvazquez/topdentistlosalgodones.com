@extends('layouts/mainLayout')

@section('content')
  @include('partials/text_center', [ 'content' => $text_center[0]] )  

  @include('partials/right_imagen_box_text', [ 'content' => $right_imagen_box[0] ])

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <p spellcheck="false" data-ms-editor="true">
            You can also verify dentists´ licenses on government websites to verify they are allowed to practice in Mexico and have no claims for malpractice.
		      <br />
		      <br />
            To obtain certification in Dentistry in Mexico, one must study 4-5 years (Depending on the University) before earning their title as a Doctor of Dental Science. From that point, dentists will choose a field in which to specialize. Such as:
          </p>
        </div>
        <div class="col-sm-5">
          <ul style="list-style: circle; padding-left: 15px;">
            <li>Endodontics – (Performs root canals and similar treatments).</li>
            <li>Oral Maxillofacial Surgery – (Placement of implants, Sinus Lifting, Bone Graft, extractions, Orthognathic Surgery).</li>
            <li>Prosthodontics – (Crowns, Veneers, Bridges, and other restorative or cosmetic procedures).</li>
            <li>Orthodontics – (Braces, Invisalign).</li>
            <li>Periodontics – (Working with soft tissues, ligaments, and surrounding structures of the teeth).</li>
            <li>Pediatrics – (Dental Treatments of children).</li>
          </ul>
        </div>
        <div class="col-sm-12">
          <p>
            Each of these specialties has its rigorous tests and examinations and hones the doctor´s skill and knowledge in their respective fields. To be considered a specialist, in any of the treatments mentioned, dentists must spend five to eight years to complete each specialty is important because it will show you the skill level, knowledge, and experience that you should receive at that clinic.
          </p>
        </div>
      </div>
    </div>
  </section>

  @include('partials/left_imagen_box_text', [ 'content' => $left_imagen_box[0] ])
@endsection