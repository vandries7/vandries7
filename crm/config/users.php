<?php
return [
    'Users' => [
        // Table used to manage users
        'table' => 'CRMUsers',
        // Controller used to manage users plugin features & actions
        'controller' => 'CakeDC/Users.Users',
        'Email' => [
            // determines if the user should include email
            'required' => true,
            // determines if registration workflow includes email validation
            'validate' => true,
        ],
        'Registration' => [
            // determines if the register is enabled
            'active' => true,
            // determines if the reCaptcha is enabled for registration
            'reCaptcha' => true,
            //ensure user is active (confirmed email) to reset his password
            'ensureActive' => false,
            // default role name used in registration
            'defaultRole' => 'user',
            // show verbose error to users
            'showVerboseError' => false,
        ],
        'Tos' => [
            // determines if the user should include tos accepted
            'required' => true,
        ],
        'Social' => [
            // enable social login
            'login' => false,
        ],
        // Avatar placeholder
        'Avatar' => ['placeholder' => 'CakeDC/Users.avatar_placeholder.png'],
        'RememberMe' => [
            // configure Remember Me component
            'active' => true,
        ],
        'Superuser' => ['allowedToChangePasswords' => false], // able to reset any users password
    ],
    //Default authentication/authorization setup
    'Auth' => [
        'Authentication' => [
            'serviceLoader' => \CakeDC\Users\Loader\AuthenticationServiceLoader::class
        ],
        'AuthenticationComponent' => [],
        'Authenticators' => [],
        'Identifiers' => [],
        "Authorization" => [
            'enable' => true,
            'serviceLoader' => \CakeDC\Users\Loader\AuthorizationServiceLoader::class
        ],
        'AuthorizationMiddleware' => [],
        'AuthorizationComponent' => [],
        'SocialLoginFailure' => [],
        'FormLoginFailure' => [],
        'RbacPolicy' => [
            'adapter' => [
                'role_field' => 'group_name',

            ]
        ],
        'Auth.Identifiers.Password.fields.username' => 'email',
        'Auth.Authenticators.Form.fields.username' => 'email',
    ],
    'SocialAuthMiddleware' => [],
    'OAuth' => []


];
