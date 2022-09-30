<?php


namespace Piyush\Employee\Model\ResourceModel\Hamburger;


use Piyush\Employee\Model\Hamburger;
use Piyush\Employee\Model\ResourceModel\Hamburger as HamburgerResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
       
       $this->_init(Hamburger::class, HamburgerResourceModel::class);
    }
}