var myImage= document.getElementById("mainImage");
var imageArray=["image/cam1.jpg","image/cam2.jpg","image/cam3.jpg", "image/cam5.jpg", "image/camp.jpg", "image/cam7.jpg", "image/cam8.jpg", "image/cam9.jpg", "image/cam10.jpg"];
var imageIndex=0;
function changeImage() {
	myImage.setAttribute("src", imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex>=imageArray.length){
		imageIndex=0;
	}
}
setInterval(changeImage, 3000);