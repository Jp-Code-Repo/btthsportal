<?php

declare(strict_types=1);

class DepartmentController extends Controller
{
    public function index(): void
    {
        $departmentModel = new DepartmentModel();

        $departments = $departmentModel->getAll();

        $this->view('departments/index', [
            'departments' => $departments
        ]);
    }

    public function create(): void
    {
        $this->view('departments/create');
    }

    public function store(): void
    {
        $name = trim($_POST['name'] ?? '');

        $status = (int) ($_POST['status'] ?? 1);

        if ($name === '') {

            header('Location: /portal/public/departments/create');
            exit;
        }

        $departmentModel = new DepartmentModel();

        $result = $departmentModel->create([
            'name' => $name,
            'status' => $status,
        ]);

        if ($result) {

            $_SESSION['toast'] = [
                'type' => 'success',
                'message' => 'Department added successfully.'
            ];

        } else {

            $_SESSION['toast'] = [
                'type' => 'error',
                'message' => 'Failed to add department.'
            ];
        }

        header('Location: /portal/public/departments');
        exit;
    }
}