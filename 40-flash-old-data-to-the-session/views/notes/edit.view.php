<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>
<!-- Main Content -->
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/note">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full">
                <label for="body" class="block text-sm font-medium leading-6 text-white">Body</label>
                <div class="mt-2">
                    <textarea id="body" name="body" rows="3"
                              class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                              placeholder="Here's an idea for a note..."><?= $note['body'] ?? '' ?></textarea>
                </div>
                <?php if (isset($errors['body'])): ?>
                    <p class="mt-2 text-sm text-red-500"><?= $errors['body'] ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-4 flex-wrap">
            <button form="delete-form" class="text-sm font-semibold text-red-500 hover:text-red-400 mr-auto">Delete</button>

            <a href="/notes"
               class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-500">
                Cancel
            </a>
            <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Update
            </button>
        </div>
    </form>

    <form id="delete-form" class="hidden" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
    </form>
  </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
