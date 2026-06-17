<h2 class="mb-4">Departments</h2>

<div class="mb-4">
    <a
        href="/portal/public/departments/create"
        class="btn btn-primary"
    >
        Add Department
    </a>
</div>

<div class="row g-4">

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