<?php

declare(strict_types=1);

class SystemController extends Controller
{
    public function index(): void
    {
        $systems = [
            [
                'name' => 'Enrollment System',
                'department' => 'Registrar Department'
            ],
            [
                'name' => 'Library System',
                'department' => 'Library Department'
            ],
            [
                'name' => 'HR System',
                'department' => 'Human Resources'
            ]
        ];

        $this->view('systems/index', [
            'systems' => $systems
        ]);
    }

    public function create(): void
    {
        $this->view('systems/create');
    }
}