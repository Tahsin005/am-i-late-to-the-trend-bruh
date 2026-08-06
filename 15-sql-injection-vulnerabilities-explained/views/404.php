<?php require('partials/head.php')?>

<?php require('partials/nav.php') ?>

<!-- Main Content -->
<main class="flex items-center justify-center min-h-screen bg-gray-900 text-white">
  <div class="text-center space-y-6">
    <h1 class="text-9xl font-extrabold text-red-500">404</h1>
    <h2 class="text-3xl md:text-4xl font-bold">Page Not Found</h2>
    <p class="text-gray-400 max-w-lg mx-auto">
      Oops! The page you are looking for doesn’t exist or has been moved.
      Let’s get you back on track.
    </p>
    <div>
      <a href="/"
         class="inline-block px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition">
        Go Back Home
      </a>
    </div>
  </div>
</main>

<?php require('partials/footer.php')?>
