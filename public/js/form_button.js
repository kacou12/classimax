$('.sendButton').attr('disabled', true);
$('.sendButton').css('cursor', 'not-allowed');
$('#login_form').on('submit', function(){
  $('.gif').css("display", 'inline-block');
})

$(".val1").on('focus change keypress keydown',function(event) {
        validateInputs(event);
    });

$(".val2").on('focus change keypress keydown',function(event) {
    validateInputs();
});

function validateInputs(event){
    var disableButton = true;
    var cursor = 'not-allowed';

    var val1 = $(".val1").val();
    var val2 = $(".val2").val();

    if(val1.length >= 2 && val2.length >= 8 ){          
        disableButton = false;
        cursor = "pointer";
    }else{
      disableButton = true;
      cursor = 'not-allowed';
    }

    $('.sendButton').attr('disabled', disableButton);
    $('.sendButton').css('cursor', cursor);
}