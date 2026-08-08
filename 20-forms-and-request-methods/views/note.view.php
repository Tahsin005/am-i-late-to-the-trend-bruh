<?php require('partials/head.php')?>

<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>

<!-- Main Content -->
<main>
  <div class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8">
    <a
      href="/notes"
      class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-red-400 transition hover:text-red-300"
    >
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
      Back to Notes
    </a>

    <div class="mt-6 rounded-xl border border-slate-700/60 bg-slate-800/50 p-6 shadow-lg backdrop-blur-sm">
      <p class="whitespace-pre-wrap leading-relaxed text-slate-100">
        <?= htmlspecialchars($note['body']) ?>
      </p>
    </div>
  </div>
</main>

<?php require('partials/footer.php')?>
