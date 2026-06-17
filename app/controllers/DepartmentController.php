<?php

declare(strict_types=1);

class DepartmentController extends Controller
{
    public function index(): void
    {
        $departments = [
            [
                'name' => 'Registrar Department',
                'status' => 'Active'
            ],
            [
                'name' => 'Library Department',
                'status' => 'Active'
            ],
            [
                'name' => 'Human Resources',
                'status' => 'Active'
            ],
            [
                'name' => 'Quality Assurance',
                'status' => 'Active'
            ]
        ];

        $this->view('departments/index', [
            'departments' => $departments
        ]);
    }

    public function create(): void
    {
        $this->view('departments/create');
    }
}