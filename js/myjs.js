/* click on blue block alert */
$("#blue-block").on('click', function() {
  alert("hello BRN");
})

/* click on green block move green block left */
$("#green-block2").on('click', function() {
  $(this).animate({right: '+=10'},0)
})

/* hover  red block change green block */
$(".red-block").hover(
/* when enter the red block */
  function() {
  $(".green-block").css("background" ,"purple")
  $(".green-block").css({"background" :"purple","width":"150px","height":"150px","transition":"2s"})
  },
/* when leaving the red block */
  function(){
    $(".green-block").css({"background" :"green","width":"50px","height":"200px"})
  })
