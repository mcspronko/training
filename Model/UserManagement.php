<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

namespace Pronko\Training\Model;

use Pronko\Training\Model\UserFactory;

/**
 * Class UserManagement
 */
class UserManagement
{
    /**
     * @var UserFactory
     */
    private $userFactory;

    /**
     * UserManagement constructor.
     * @param UserFactory $userFactory
     */
    public function __construct(UserFactory $userFactory)
    {
        $this->userFactory = $userFactory;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->userFactory->create();
    }
}
