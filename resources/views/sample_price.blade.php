@extends('layouts/mainLayout')

@section('content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <h3 class="uppercase color-primary mb40 mb-xs-24" spellcheck="false" data-ms-editor="true">Sample Price</h3>
          <div class="table-responsive">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th>Dental Procedure</th>
                  <th>Unit</th>
                  <th>US Prices</th>
                  <th class="cell-primary">Our Price</th>
                  <th>Your Savings</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Consultation</td>
                  <td>per visit</td>
                  <td class="cell-danger">$90</td>
                  <td class="cell-primary">Free</td>
                  <td>$90</td>
                </tr>
                <tr>
                  <td>Single Tooth X-Rays</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$30</td>
                  <td class="cell-primary">Free</td>
                  <td>$30</td>
                </tr>
                <tr>
                  <td>Panoramic X-Rays</td>
                  <td>per mouth</td>
                  <td class="cell-danger">$115</td>
                  <td class="cell-primary">$50</td>
                  <td>$65</td>
                </tr>
                <tr>
                  <td>Cleaning</td>
                  <td>per mouth</td>
                  <td class="cell-danger">$95</td>
                  <td class="cell-primary">$30</td>
                  <td>$65</td>
                </tr>
                <tr>
                  <td>Extraction</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$185</td>
                  <td class="cell-primary">$80</td>
                  <td>$105</td>
                </tr>
                <tr>
                  <td>Deep Cleaning </td>
                  <td>per quadrant</td>
                  <td class="cell-danger">$300</td>
                  <td class="cell-primary">$100</td>
                  <td>$200</td>
                </tr>
                <tr>
                  <td>Teeth Whitening</td>
                  <td>per mouth</td>
                  <td class="cell-danger">$500</td>
                  <td class="cell-primary">$150</td>
                  <td>$350</td>
                </tr>
                <tr>
                  <td>Metal/Porcelain Crown</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$1,200</td>
                  <td class="cell-primary">$200</td>
                  <td>$1,000</td>
                </tr>
                <tr>
                  <td>Zirconia Crown</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$1,500</td>
                  <td class="cell-primary">$450</td>
                  <td>$1,050</td>
                </tr>
                <tr>
                  <td>Endodontics</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$1,200</td>
                  <td class="cell-primary">$200</td>
                  <td>$1,000</td>
                </tr>
                <tr>
                  <td>Post</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$450</td>
                  <td class="cell-primary">$120</td>
                  <td>$330</td>
                </tr>
                <tr>
                  <td>Acrylic Dentures</td>
                  <td>complete</td>
                  <td class="cell-danger">$1,400</td>
                  <td class="cell-primary">$500</td>
                  <td>$900</td>
                </tr>
                <tr>
                  <td>Resin Dentures</td>
                  <td>complete</td>
                  <td class="cell-danger">$1,750</td>
                  <td class="cell-primary">$750</td>
                  <td>$1,000</td>
                </tr>
                <tr>
                  <td>Relining</td>
                  <td>per mouth</td>
                  <td class="cell-danger">$350</td>
                  <td class="cell-primary">$120</td>
                  <td>$230</td>
                </tr>
                <tr>
                  <td>Parcial (TCS)</td>
                  <td>per mouth</td>
                  <td class="cell-danger">$1,880</td>
                  <td class="cell-primary">$450</td>
                  <td>$1,430</td>
                </tr>
                <tr>
                  <td>Mouth Guard</td>
                  <td>per mouth</td>
                  <td class="cell-danger">$450</td>
                  <td class="cell-primary">$120</td>
                  <td>$330</td>
                </tr>
                <tr>
                  <td>Dental Implant</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$3,500</td>
                  <td class="cell-primary">$750</td>
                  <td>$2,750</td>
                </tr>
                <tr>
                  <td>Crown Over Implants</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$2,500</td>
                  <td class="cell-primary">$500</td>
                  <td>$2,000</td>
                </tr>
                <tr>
                  <td>Bone Graft</td>
                  <td>per site</td>
                  <td class="cell-danger">$1,400</td>
                  <td class="cell-primary">$450</td>
                  <td>$950</td>
                </tr>
                <tr>
                  <td>Maxillary Sinus Elevation</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$1,600</td>
                  <td class="cell-primary">$500</td>
                  <td>$1,100</td>
                </tr>
                <tr>
                  <td>Porcelain Veneer</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$1,400</td>
                  <td class="cell-primary">$350</td>
                  <td>$1,050</td>
                </tr>
                <tr>
                  <td>All On Four</td>
                  <td>per arch</td>
                  <td class="cell-danger">$12,000</td>
                  <td class="cell-primary">$4,400</td>
                  <td>$7,600</td>
                </tr>
                <tr>
                  <td>E-Max</td>
                  <td>per site</td>
                  <td class="cell-danger">$1,300</td>
                  <td class="cell-primary">$250</td>
                  <td>$1,050</td>
                </tr>
                <tr>
                  <td>Flipper</td>
                  <td>per site</td>
                  <td class="cell-danger">$550</td>
                  <td class="cell-primary">$150</td>
                  <td>$400</td>
                </tr>
                <tr>
                  <td>Wisdom molar extraction</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$250</td>
                  <td class="cell-primary">$100</td>
                  <td>$150</td>
                </tr>
                <tr>
                  <td>Wisdom molar surgery</td>
                  <td>per tooth</td>
                  <td class="cell-danger">$480</td>
                  <td class="cell-primary">$200</td>
                  <td>$280</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>      
    </div>
  </section>
@endsection