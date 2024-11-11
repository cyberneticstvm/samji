$(function () {
    "use strict";
    
    $('.select2').select2({
        placeholder: "Select",
        /*allowClear: true*/
    });

    $(document).on("change", ".multi_img", function(e){
        if (window.File && window.FileReader && window.FileList && window.Blob){
          var data = $(this)[0].files; //this file data           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb me-3').attr('src', e.target.result) .width('10%')
                  .height('100%'); //create image element 
                      $('#multi_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
    });
});