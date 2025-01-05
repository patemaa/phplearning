<?php require("partials/head.php");?>
<?php require("partials/nav.php");?>
<?php require("partials/header.php");?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p><?=$note['body']?></p>
            <p class="mt-6 text-purple-500 hover:text-blue-300 hover:underline">
                <a href="/notes">Go Back</a>
            </p>
        </div>
    </main>
<?php require("partials/footer.php");?>