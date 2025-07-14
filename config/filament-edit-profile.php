<?php

return [
    'show_custom_fields' => true,
    'custom_fields' => [
        'github' => [
            'type' => 'text', 
            'label' => 'Github username',
            'placeholder' => '', 
            'rules' => 'nullable|string|max:255',
            'required' => false,
        ],
        'twitter' => [
            'type' => 'text', 
            'label' => 'Twitter username',
            'placeholder' => '', 
            'rules' => 'nullable|string|max:255',
            'required' => false,
        ],
    ]
];
return [
    'avatar' => [
        'disk' => 'public',
        'directory' => 'user-avatars/yassine.jpg',
        'rules' => 'mimes:jpeg,png|max:1024',
    ],
];
