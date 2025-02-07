<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("views/partials/header.php"); ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <ul>
                <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/note?id=<?= $note['id'] ?>" class="hover:underline hover:text-blue-500">
                            <?= htmlspecialchars($note['body']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <p class="mt-6">
                <a href="/notes/create" class="mt-6 text-green-700 hover:underline hover:text-blue-500 ">Create note</a>
            </p>
        </div>
    </main>
<?php require base_path("views/partials/footer.php"); ?>