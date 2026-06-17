<h2 class="mb-4">Welcome to Portal</h2>

<!-- Announcements -->

<div class="card dashboard-card mb-4">

    <div class="card-body">

        <h5 class="card-title">
            Announcements
        </h5>

        <?php foreach ($announcements as $announcement): ?>

            <div class="border-bottom py-3">

                <div class="fw-semibold">
                    <?= htmlspecialchars($announcement['title']) ?>
                </div>

                <small class="text-muted">
                    <?= htmlspecialchars($announcement['date']) ?>
                </small>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<!-- My Systems -->

        <h5 class="card-title mb-4">
            My Systems
        </h5>

        <div class="row g-3">

            <?php foreach ($systems as $system): ?>

                 <div class="col-12 col-md-6 col-lg-3">

                    <div class="card system-card">

                        <div class="card-body">

                            <div class="system-icon mb-3">
                                <?= htmlspecialchars($system['icon']) ?>
                            </div>

                            <div class="system-name mb-1">
                                <?= htmlspecialchars($system['name']) ?>
                            </div>

                            <div class="system-department mb-2">
                                <?= htmlspecialchars($system['department']) ?>
                            </div>

                            <div class="system-description mb-3">
                                <?= htmlspecialchars($system['description']) ?>
                            </div>

                            <a
                                href="<?= htmlspecialchars($system['url']) ?>"
                                class="btn btn-primary btn-sm"
                            >
                                Open System
                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>