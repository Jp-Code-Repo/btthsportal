<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="mb-0">
        Systems
    </h2>

    <a
         href="/systems/create"
        class="btn btn-primary"
    >
        Add System
    </a>

</div>

<div class="row g-2">

    <?php foreach ($systems as $system): ?>

        <div class="col-12">

            <div class="card system-card">

                <div class="card-body">

                    <div class="system-name">
                        <?= htmlspecialchars($system['name']) ?>
                    </div>

                    <div class="system-department">
                        <?= htmlspecialchars($system['department_name']) ?>
                    </div>
                    
                </div>

            </div>

        </div>

    <?php endforeach; ?>

</div>