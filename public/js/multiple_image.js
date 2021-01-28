$('.input-images').imageUploader({
    label:"Déposez ici les images de votre annonce ",
});
$(window).on('mouseover change',function() {
  var up = $('.uploaded').children().length;
  if(up == 0){
    $('.upload-text').css('display', 'flex');
   }else{
    $('.upload-text').css('display', 'none');
   }
   console.log(up);
});


$('input:file').on('hover change',function() {
  var up = $('.uploaded').children().length;
  if(up == 0){
    $('.upload-text').css('display', 'flex');
   }else{
    $('.upload-text').css('display', 'none');
   }
   console.log(up);
});
