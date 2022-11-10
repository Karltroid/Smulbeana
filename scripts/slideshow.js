var slideshow_element, currentslide, slideshow_photos;

document.addEventListener("DOMContentLoaded", function(event) // wait for the webpage to finish loading
{ 
	slideshow_element = document.getElementById("join-server");

	slideshow_photos = ["url('../images/minecraft/slideshow/0.jpg')",
						"url('../images/minecraft/slideshow/1.jpg')",
						"url('../images/minecraft/slideshow/2.jpg')",
						"url('../images/minecraft/slideshow/3.jpg')",
						"url('../images/minecraft/slideshow/4.jpg')",
						"url('../images/minecraft/slideshow/5.jpg')",
						"url('../images/minecraft/slideshow/6.jpg')",
						"url('../images/minecraft/slideshow/7.jpg')"];

	currentslide = slideshow_photos.length - 1;

	carousel();
});


function carousel()
{
	currentslide = arrayrange(currentslide+1, 0, slideshow_photos.length);

	slideshow_element.style.backgroundImage = slideshow_photos[currentslide];

	setTimeout(carousel, 5000);

}


function arrayrange(current, min, max)
{
	if (current > max - 1)
		current = current - max;
	else if (current < min)
		current = current + max;

	return current;
}

