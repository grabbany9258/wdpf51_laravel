// For Pagination

$(document).ready(function () {
  $("#select_page").on("change", function () {
    var path = $(this).val();
    window.location.href = path;
  });
  // $("#select_page").on("change", function () {
  //     var path = $(this).val();
  //     window.location.href = path;
  // });
});
// // Show selected photo
// function readURL(input) {
//   if (input.files && input.files[0]) {
//     var reader = new FileReader();
//     reader.onload = function (e) {
//       $("#showSelectedPhoto").attr("src", e.target.result);
//     };
//     reader.readAsDataURL(input.files[0]);
//   }
// }
