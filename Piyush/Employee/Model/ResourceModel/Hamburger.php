<?php


namespace Piyush\Employee\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Hamburger extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('employee_data', 'id');
    }
}