<h2 class="mb-4">Systems</h2>

<div class="mb-4">
    <a
        href="/portal/public/systems/create"
        class="btn btn-primary"
    >
        Add System
    </a>
</div>

<div class="row g-4">

    <?php foreach ($systems as $system): ?>

        <div class="col-12">

            <div class="card system-card">

                <div class="card-body">

                    <div class="system-name">
                        <?= htmlspecialchars($system['name']) ?>
                    </div>

                    <div class="system-department">
                        <?= htmlspecialchars($system['department']) ?>
                    </div>

                </div>

            </div>

        </div>

    <?php endforeach; ?>

</div>