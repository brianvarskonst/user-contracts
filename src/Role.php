<?php

declare(strict_types=1);

namespace Bvsk\Contracts\User;

interface Role
{

    public const USER = 'ROLE_USER';

    public const ADMIN = 'ROLE_ADMIN';

    public const CONTRIBUTOR = 'ROLE_CONTRIBUTOR';

    public const EDITOR = 'ROLE_EDITOR';

    public const SWITCHABLE = 'CAN_SWITCH_USER';

    public const SUPER_ADMIN = 'ROLE_SUPER_ADMIN';

    public const ALL = [
        Role::USER => 'User',
        Role::CONTRIBUTOR => 'Contributor',
        Role::EDITOR => 'Editor',
        Role::ADMIN => 'Administrator',
        Role::SUPER_ADMIN => 'Super Administrator',
    ];
}
