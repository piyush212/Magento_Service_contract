<?php
namespace Piyush\Employee\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Piyush\Employee\Api\Data\HamburgerInterface;
use Piyush\Employee\Model\ResourceModel\Hamburger as ResourceModel;

/**
 * Class Hamburger
 */
class Hamburger extends AbstractModel implements
    HamburgerInterface,
    IdentityInterface
{
    const CACHE_TAG = 'employee_data';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getId()
    {
        return $this->getData('id');
    }
    public function getName()
    {
        return $this->getData('Name');
    }
    public function setName($Name)
    {
        return $this->setData('Name', $Name);
    }
    public function getEmail()
    {
        return $this->getData('Email');
    }
    public function setEmail($Email)
    {
        return $this->setData('Email', $Email);
    }
    public function getNumber()
    {
        return $this->getData('Number');
    }
    public function setNumber($Number)
    {
        return $this->setData('Mobile', $Number);
    }
}
