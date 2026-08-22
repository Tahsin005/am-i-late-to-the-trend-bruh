<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>
<!-- Main Content -->
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <ul>
      <?php foreach ($notes as $note) : ?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= htmlspecialchars($note['body']) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <?php if (empty($notes)) : ?>
      <p class="mt-4 text-gray-400">You don't have any notes yet.</p>
    <?php endif; ?>

    <p class="mt-6">
      <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
    </p>
  </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
