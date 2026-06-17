<?php
    // active/hightlight depending on the route
    $currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $isDashboard = str_ends_with($currentUri, '/public')
        || str_ends_with($currentUri, '/public/');

    $isSystems = str_contains($currentUri, '/systems');
    $isDepartments = str_contains($currentUri, '/departments');
?>

<div class="sidebar p-3">

    <div class="sidebar-brand mb-4">
        Portal
    </div>

    <ul class="nav flex-column">

        <li class="nav-item mb-2">
            <a href="/portal/public/" class="nav-link <?= $isDashboard ? 'active' : '' ?>">
                Dashboard
            </a>
        </li>

        <li class="nav-item mb-2">
            <a href="/portal/public/systems" class="nav-link <?= $isSystems ? 'active' : '' ?>">
                Systems
            </a>
        </li>

        <li class="nav-item mb-2">
            <a href="#" class="nav-link">
                Users
            </a>
        </li>

        <li class="nav-item mb-2">
            <a  href="/portal/public/departments" class="nav-link <?= $isDepartments  ? 'active' : '' ?>">
                Departments
            </a>
        </li>

        <li class="nav-item mb-2">
            <a href="#" class="nav-link">
                Requests
            </a>
        </li>

        <li class="nav-item mb-2">
            <a href="#" class="nav-link">
                Audit Logs
            </a>
        </li>

    </ul>

</div>