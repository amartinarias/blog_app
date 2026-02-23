<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto py-10 px-5">
        <h1 class="text-3xl font-bold my-4">
            My personal blog
        </h1>

       {{ $slot }}
    </div>

</body>
</html>