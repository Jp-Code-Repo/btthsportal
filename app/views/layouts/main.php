<?php

/** @var string $content */
?>

<?php require __DIR__ . '/header.php'; ?>

<div class="d-flex">
    <?php require __DIR__ . '/sidebar.php'; ?>

    <div class="flex-grow-1">
        <?php require __DIR__ . '/navbar.php'; ?>

        <main class="p-4">
            <?= $content ?>
        </main>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>