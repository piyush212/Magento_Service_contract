<?php

namespace Piyush\Employee\Block;

use Piyush\Employee\Model\ResourceModel\Hamburger\Collection;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\Api\SearchCriteriaBuilder;
//use Magento\Framework\Api\SortOrderBuilder;
use Piyush\Employee\Api\HamburgerRepositoryInterface;
use Magento\Framework\Api\FilterBuilder;

class Display extends Template
{
    /**
     * @var Collection
     */
  //  private $collection;

    /**
     * Display constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */

      /**
  * @var SearchCriteriaBuilder
  */
  protected $searchCriteriaBuilder;
 
  /**
  * @var SortOrderBuilder
  */
  //protected $sortOrderBuilder;
 
  /**
  * @var HamburgerRepositoryInterface
  */
  protected $hamburgerRepository;
  protected $filterBuilder;
   
    public function __construct(
        Context $context,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        FilterBuilder $filterbuilder,
       // SortOrderBuilder $sortOrderBuilder,
        HamburgerRepositoryInterface $hamburgerRepository,
       // Collection $collection,
        array $data = []
    ) {
       // $this->collection = $collection;
        parent::__construct($context, $data);
        $this->filterbuilder=$filterbuilder;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
       // $this->sortOrderBuilder = $sortOrderBuilder;
        $this->hamburgerRepository = $hamburgerRepository; 
        parent::__construct($context);
    }

    /**
     * @return Collection
     */
    public function getAllEmployee()
    {
    //    return $this->collection->getData();
    }

    /**
     * @return string
     */
    public function getPostUrl()
    {
        return $this->getUrl('employee/save/save');
    }

    /**
     * @return string
     */
    public function getEditPageUrl()
    {
        return $this->getUrl('employee/edit/edit');
    }

    /**
     * @return string
     */
    public function getDeleteUrl()
    {
        return $this->getUrl('employee/deletebyid/deletebyid');
    }
    public function getRecords(){
    

    //     $filter1 = $this->filterBuilder->setField('Name')
    //    ->setConditionType('like')
    //    ->setValue('%lplok%')
    //    ->create();
    //    $filter2 = $this->filterBuilder->setField('Mobile')
    //    ->setConditionType('like')
    //    ->setValue('%0997656789%')
    //    ->create();
    //    $this->searchCriteriaBuilder->addFilters([$filter1 , $filter2]);
       //$this->searchCriteriaBuilder->addFilter($filter1);
       $searchCriteria = $this->searchCriteriaBuilder->create();
       $searchResult = $this->hamburgerRepository->getList($searchCriteria);
       $items = $searchResult->getItems();
       return $items;
    
      }
   
        
  }

    
