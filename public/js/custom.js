function readURL(input) {
  if (input.files && input.files[0]) {
    let reader = new FileReader();

    reader.onload = function (e) {
      $('#prevImg').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

$("#fileImages").change(function () {
  readURL(this);
});