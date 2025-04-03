<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

<div class="ml-64 p-4">
  @yield('content') 
  <div id="content"></div>
</div>

<div class="container mx-auto px-4">

  <footer class="py-3 mt-8 border-t border-gray-300 fixed-bottom bg-white w-full">
    <ul class="flex justify-center space-x-6 pb-3 mb-3 border-b">
      <li><a href="/" class="text-gray-500 hover:text-gray-800">Home</a></li>

    </ul>
    <p class="text-center text-gray-500">&copy; 2024 Bruno, Wagler</p>
  </footer>
</div>

</body>
</html>
