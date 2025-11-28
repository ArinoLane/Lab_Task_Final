<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Travel Agency Banner</title>
  <style>
    body { text-align: center; font-family: Arial, sans-serif; }
    h1 { margin-bottom: 20px; }
    #slider {
      width: 800px;
      height: 450px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }
    .controls {
      margin-top: 15px;
    }
    button {
      margin: 0 10px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <h1>Explore Beautiful Destinations</h1>

  <!-- Main Image -->
  <img id="slider" src="" alt="Travel Destination">

  <!-- Navigation Buttons -->
  <div class="controls">
    <button onclick="prevImage()">Previous</button>
    <button onclick="nextImage()">Next</button>
  </div>

  <script>
    // 1. Array of image URLs
    let images = [
      "https://picsum.photos/id/1018/800/450", // Beach
      "https://picsum.photos/id/1025/800/450", // Mountains
      "https://picsum.photos/id/1035/800/450", // City
      "https://picsum.photos/id/1043/800/450"  // Forest
    ];

    // 2. Preload images into cache
    const cache = [];
    for (let i = 0; i < images.length; i++) {
    const img = new Image();
    img.src = images[i];
    cache[i] = img; // assign directly by index
    }

    // 3. Track current index
    let currentIndex = 0;

    // 4. Reference to the <img> tag
    let slider = document.getElementById("slider");

    // 5. Function to show image
    function showImage(index) {
      slider.src = images[index].src; // use cached image
    }

    // 6. Next and Previous functions
    function nextImage() {
      currentIndex = (currentIndex + 1) % images.length; // loop forward
      showImage(currentIndex);
    }

    function prevImage() {
      currentIndex = (currentIndex - 1 + images.length) % images.length; // loop backward
      showImage(currentIndex);
    }

    
    // 8. Initialize first image
    showImage(currentIndex);
  </script>

</body>
</html>
