<?php

return [

    'show_custom_fields' => true,

    'custom_fields' => [
        'Github' => [
            'type' => 'text',
            'label' => 'Github username',
            'placeholder' => '',
            'rules' => 'nullable|string|max:255',
            'required' => false,
        ],
        'Linkedin' => [
            'type' => 'text',
            'label' => 'Linkedin link_profile',
            'placeholder' => '',
            'rules' => 'nullable|string|max:255',
            'required' => false,
        ],
    ],

    'should_show_avatar_form' => true,
    'show_email_form' => true,
    'avatar_column' => 'avatar_url',
    'avatar_visibility' => 'public',
    'avatar_rules' => [
        'image',
        'mimes:jpeg,png,jpg,gif,webp',
        'max:2048',
        'dimensions:min_width=208,min_height=208',
    ],
    'disk' => 'public',
    'visibility' => 'public',
    'avatar_directory' => 'users/avatars',
];
