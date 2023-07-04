let slider = document.getElementById("slider");
let images = slider.getElementsByTagName("img");
let currentindex_img = 0;

function change_image(){
    images[currentindex_img].style.display = "none";
    currentindex_img = (currentindex_img + 1) % images.length;
    images[currentindex_img].style.display = "block";
}

setInterval(change_image,3000);