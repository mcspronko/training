<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

namespace Pronko\Training\Test\Unit\Model;

use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager as ObjectManagerHelper;
use PHPUnit\Framework\TestCase;
use Pronko\Training\Model\UserManagement;

/**
 * Class UserManagementTest
 */
class UserManagementTest extends TestCase
{
    public function testGetUser()
    {
        $objectManagerHelper = new ObjectManagerHelper($this);

        /** @var UserManagement $object */
        $object = $objectManagerHelper->getObject(UserManagement::class);

        $user = $object->getUser();

        $this->assertEquals('John Doe', $user->getName());
    }
}
