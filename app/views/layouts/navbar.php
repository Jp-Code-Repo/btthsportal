<nav class="navbar portal-navbar px-4">

    <div>

        <?php if (($pageTitle ?? '') === 'Dashboard'): ?>

            <span class="fw-semibold">
                Dashboard
            </span>

        <?php else: ?>

            <nav aria-label="breadcrumb">

                <ol class="breadcrumb mb-0">

                    <li class="breadcrumb-item">
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li
                        class="breadcrumb-item active"
                        aria-current="page"
                    >
                        <?= htmlspecialchars($pageTitle ?? '') ?>
                    </li>

                </ol>

            </nav>

        <?php endif; ?>

    </div>

    <div>
        Guest User
    </div>

</nav>