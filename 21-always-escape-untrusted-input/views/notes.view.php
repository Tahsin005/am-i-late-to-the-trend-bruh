<?php require('partials/head.php')?>

<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>

<!-- Main Content -->
<main>
  <div class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8">
    <ul class="space-y-3">
      <?php foreach ($notes as $note) : ?>
        <li>
          <a
            href="/note?id=<?= $note['id'] ?>"
            class="block truncate rounded-xl border border-slate-700/60 bg-slate-800/50 p-4 text-slate-100 shadow-lg backdrop-blur-sm transition hover:border-slate-600 hover:bg-slate-800"
          >
            <?= htmlspecialchars($note['body']) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <?php if (empty($notes)) : ?>
      <p class="text-sm text-slate-400">You don't have any notes yet.</p>
    <?php endif; ?>

    <p class="mt-6 text-center text-sm text-slate-400">
      <a href="/notes/create" class="text-white hover:underline">Create Note</a>
    </p>
  </div>
</main>

<?php require('partials/footer.php')?>
