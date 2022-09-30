<?php
namespace Piyush\Employee\Controller\Deletebyid;

    use Magento\Framework\App\Action\Action;
    use Magento\Framework\App\Action\Context;
    use Magento\Framework\Exception\CouldNotSaveException;
    use Magento\Framework\Exception\LocalizedException;
    use Magento\Framework\Exception\NoSuchEntityException;
    use Magento\Framework\View\Result\PageFactory;

    use Piyush\Employee\Api\HamburgerRepositoryInterface;
    use Piyush\Employee\Api\Data\HamburgerInterface;

    class Deletebyid extends Action
    {
        protected $_pageFactory;

        protected $_hamburgerRepository;
        protected $_hamburgerModel;


        public function __construct(
            Context $context,
            PageFactory $pageFactory,
            HamburgerRepositoryInterface $hamburgerRepository,
            HamburgerInterface $hamburgerInterface
        ) {
            $this->_pageFactory = $pageFactory;
            $this->_hamburgerRepository=$hamburgerRepository;
            $this->_hamburgerModel = $hamburgerInterface;
            return parent::__construct($context);
        }

        public function execute()
        {
            $id = $_GET;
          
            try {
                $this->_hamburgerRepository->deleteById($id);
                // echo "Deleted the record with id =" .$id . "<br>" . "Go to database and check.";
            } catch (NoSuchEntityException $e) {
                echo "No such entity exception - " . $e->getMessage();
            } catch (LocalizedException $e) {
                echo "Localized Exception" . $e->getMessage();
            }
            $redirect = $this->resultRedirectFactory->create();
             $redirect->setPath('employee');
             return $redirect;
        }
    }
