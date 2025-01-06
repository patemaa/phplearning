<?php require("partials/head.php");?>
<?php require("partials/nav.php");?>
<?php require("partials/header.php");?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p><?=htmlspecialchars($note['body'])?></p>
            <p class="mt-6 text-purple-700 hover:text-blue-500 hover:underline">
                <a href="/notes">Go Back</a>
            </p>
        </div>
    </main>
<?php require("partials/footer.php");?>