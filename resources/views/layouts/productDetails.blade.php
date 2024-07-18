<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left and Right Containers with Tailwind CSS</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-8">
    <div class="container mx-auto px-4 flex flex-wrap justify-between">
        <div class="left-container w-full md:w-1/2 mb-4 md:mb-0">
            <div class="relative">
                <img src="path_to_your_image.jpg" alt="Slideshow Image" class="w-full h-auto object-cover">
                <!-- Add more images for slideshow -->
            </div>
        </div>
        <div class="right-container w-full md:w-1/2">
            <div class="px-4">
                <p class="text-lg font-semibold mb-2">Line 1 of description</p>
                <p class="text-base mb-2">Line 2 of description</p>
                <p class="text-base mb-2">Line 3 of description</p>
                <p class="text-base mb-2">Line 4 of description</p>
            </div>
        </div>
    </div>
</body>
</html>
