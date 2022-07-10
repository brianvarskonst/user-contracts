<?php

declare(strict_types=1);

namespace Bvsk\Contracts\User\Authentication;

interface AuthenticationStatus
{

    /**
     * This isn't a role, but it kind of acts like one, and every user that has logged in will have this.
     * This is similar to IS_AUTHENTICATED_REMEMBERED, but stronger.
     * Users who are logged in only because of a "remember me cookie" will have IS_AUTHENTICATED_REMEMBERED,
     * but will not have IS_AUTHENTICATED_FULLY
     */
    public const IS_AUTHENTICATED_FULLY = 'IS_AUTHENTICATED_FULLY';

    /**
     * All logged in users have this, even if they are logged in because of a "remember me cookie".
     * Even if you don't use the "remember me" functionality, you can use this to check if the user is logged in.
     *
     * @link https://symfony.com/doc/current/security/remember_me.html
     */
    public const IS_AUTHENTICATED_REMEMBERED = 'IS_AUTHENTICATED_REMEMBERED';

    /**
     * Only users authenticated using the remember me functionality, (i.e. a remember-me cookie).
     *
     * @link https://symfony.com/doc/current/security/remember_me.html
     */
    public const IS_REMEMBERED = 'IS_REMEMBERED';

    /**
     * When the current user is impersonating another user in this session, this attribute will match.
     *
     * @link https://symfony.com/doc/current/security/impersonating_user.html
     */
    public const IS_IMPERSONATOR = 'IS_IMPERSONATOR';
}
