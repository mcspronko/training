<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

namespace Pronko\Training\Test\Integration\Model;

use Magento\TestFramework\Helper\Bootstrap;
use PHPUnit\Framework\TestCase;
use Pronko\Training\Model\User;
use Pronko\Training\Model\UserManagement;

/**
 * Class UserManagementTest
 */
class UserManagementTest extends TestCase
{
    public function testGetUser()
    {
        $objectManager = Bootstrap::getObjectManager();
        /** @var User $object */
        $object = $objectManager->create('JohnDoe');

        $this->assertEquals('Max Pronko', $object->getName());
    }
}
