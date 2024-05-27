$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $("#dynamic").addClass("stuck");
    } else {
      $("#dynamic").removeClass("stuck");
    }
  });
});
