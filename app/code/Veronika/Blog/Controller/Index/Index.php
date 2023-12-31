<?php declare(strict_types=1);

namespace Veronika\Blog\Controller\Index;

use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;

class Index implements HttpGetActionInterface
{
    public function __construct(
        private ForwardFactory $forwardFactory
    ) {}

    public function execute():Forward
    {
      /** @var Forward $forward */
//        die('Blog index');
        $forward = $this->forwardFactory->create();
        return $forward->setController('post')->forward('list');
    }
}
