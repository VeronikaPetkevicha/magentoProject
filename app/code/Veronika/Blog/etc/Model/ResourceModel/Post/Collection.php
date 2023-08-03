<?php declare(strict_types=1);

namespace Veronika\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Veronika\Blog\Model\ResourceModel\Post as PostResourceModel;
class Collection extends AbstractCollection{
    protected function _construct()
    {
        $this->_init(Post::class, PostResourceModel::class);
    }
}
