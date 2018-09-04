function loadImages () {

    var i = 1,
         imageFile = "",
         image;

    for (i = 1; i < 9; i++) {
        imageFile = document.getElementById("input_img" + i + "_src").value;
        if (imageFile !== "") {
           document.getElementById("img_src" + i).src = "/images/" + imageFile;
       }
    }
}

loadImages();