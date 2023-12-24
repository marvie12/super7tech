<?php

return [
    'listing' => [
        [
            'label' => '#',
            'accessor' => 'id',
        ],
        [
            'label' => 'First Name',
            'accessor' => 'first_name',
        ],
        [
            'label' => 'Last Name',
            'accessor' => 'last_name',
        ],
        [
            'label' => 'Position',
            'accessor' => 'position',
        ],
        [
            'label' => 'Created At',
            'accessor' => 'created_at'
        ],
        [
            'label' => 'Actions',
            'accessor' => '',
        ]
    ],
    'form' => [
        [
            'label' => 'First Name',
            'accessor' => 'first_name',
            'type' => 'text',
            'place_holder' => 'Enter First Name',
            'required' => true
        ],
        [
            'label' => 'Last Name',
            'accessor' => 'last_name',
            'type' => 'text',
            'place_holder' => 'Enter Last Name',
            'required' => true
        ],
        [
            'label' => 'Position',
            'accessor' => 'position',
            'place_holder' => 'Select Position',
            'type' => 'dropdown',
            'options' => [
                'web_developer' => 'Web Developer',
                'web_designer' => 'Web Designer',
                'manager' => 'Manager',
            ],
            'required' => true
        ],
    ]

];