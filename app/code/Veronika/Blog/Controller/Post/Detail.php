<?php declare(strict_types=1);

namespace Veronika\Blog\Controller\Post;

use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Detail implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
    ){}
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}




