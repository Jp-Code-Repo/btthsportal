<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="mb-0">
        Departments
    </h2>

    <a
        href="/departments/create"
        class="btn btn-primary"
    >
        Add Department
    </a>

</div>

<div class="row g-2">

    <?php foreach ($departments as $department): ?>

        <div class="col-12">

            <div class="card system-card">

                <div class="card-body">

                    <div class="system-name">
                        <?= htmlspecialchars($department['name']) ?>
                    </div>

                    <div class="system-department">
                        Status:
                        <?= htmlspecialchars($department['status']) ?>
                    </div>

                </div>

            </div>

        </div>

    <?php endforeach; ?>

</div>