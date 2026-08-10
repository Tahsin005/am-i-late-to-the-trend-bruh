<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<!-- Main Content -->
<main class="flex items-center justify-center min-h-screen bg-gray-900 text-white">
  <div class="text-center space-y-6">
    <h1 class="text-9xl font-extrabold text-red-500">403</h1>
    <h2 class="text-3xl md:text-4xl font-bold">Access Denied</h2>
    <p class="text-gray-400 max-w-lg mx-auto">
      Oops! You don't have permission to access this page.
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

<?php require base_path('views/partials/footer.php') ?>
