function previewImages() {

    var preview = document.querySelector('#preview');

    
    if (this.files) {
      [].forEach.call(this.files, readAndPreview);
    }
  
    function readAndPreview(file) {
  
      // Make sure `file.name` matches our extensions criteria
      if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
        return alert(file.name + " is not an image");
      } // else...
      
      var reader = new FileReader();
      
      reader.addEventListener("load", function() {

        var newDiv = document.createElement("div");
        var image    = new Image();
        image.width  = 400;
        image.height = 300;
        image.title  = file.name;
        image.src    = this.result;
        newDiv.appendChild(image);
        preview.appendChild(newDiv);
        
      });
      
      reader.readAsDataURL(file);
      
    }
  
  }
  
  document.querySelector('.file-input').addEventListener("change", previewImages);



  $('.my_caroussel').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true
  });
  