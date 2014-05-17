//rotateScript.js
var prefix = "images/imageSlides/ArtSupplies";

var imageArray = new Array(13);
for (var i=0; i<imageArray.length; i++)
    imageArray[i] = prefix + i + ".jpg";

//Rotate the images in the array
var imageCounter = 0;
function rotate()
{
    var imageObject = document.getElementById('indexImage');
    imageObject.src = imageArray[imageCounter];
    ++imageCounter;
    if (imageCounter == 13) imageCounter = 0;
}

function startRotation()
{
    document.getElementById('indexImage').src=imageArray[0];
    setInterval('rotate()', 1500);
}
