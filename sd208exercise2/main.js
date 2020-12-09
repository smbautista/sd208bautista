
$("li.tab a").on("click", function (event) {
  event.preventDefault();

  $(this).parent().addClass("active");
  $(this).parent().siblings().removeClass("active");
  target = $(this).attr("href");
  $(".tab-content > div").not(target).hide();
  $(target).fadeIn(600);

});

// $('#signupForm').on('submit',function(e){
//   $('#login').show().fadeIn(500)
//   $('#signup').hide().fadeOut(500)
// })