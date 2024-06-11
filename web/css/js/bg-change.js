document.addEventListener("DOMContentLoaded", function () {
  const images = [
    "../../../pics/palawan.png",
    "../../../pics/greece.png",
    "../../../pics/japan.png",
    // Add more image paths as needed
  ];
  let currentIndex = 0;

  function changeBackgroundImage() {
    const newImage = new Image();
    newImage.src = images[currentIndex];
    newImage.classList.add("bg-image");
    newImage.onload = () => {
      newImage.classList.add("fade-in");
    };

    document.body.appendChild(newImage);

    const oldImages = document.querySelectorAll(".bg-image");
    if (oldImages.length > 1) {
      const oldImage = oldImages[0];
      oldImage.classList.remove("fade-in");
      oldImage.classList.add("fade-out");
      setTimeout(() => {
        oldImage.parentNode.removeChild(oldImage);
      }, 1000); // Change to match your CSS transition duration
    }

    currentIndex = (currentIndex + 1) % images.length;
  }

  setInterval(changeBackgroundImage, 5000);

  changeBackgroundImage(); // Initially change background image
});
