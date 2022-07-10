<?php

declare(strict_types=1);

namespace Bvsk\Contracts\User;

interface RoleHierarchy
{
    public const MAP = [
        Role::CONTRIBUTOR => Role::USER,
        Role::EDITOR => Role::CONTRIBUTOR,
        Role::ADMIN => [
            Role::EDITOR,
            Role::SWITCHABLE,
        ],
    ];
}
