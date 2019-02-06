<?php


namespace garethp\ews\Generator;

use Zend\Code\Generator\DocBlock\Tag\AbstractTypeableTag;
use Zend\Code\Generator\DocBlock\Tag\TagInterface;

class EmptyDocblockTag extends AbstractTypeableTag implements TagInterface
{
    public function generate()
    {
        return "";
    }

    public function getName()
    {
        return "";
    }
}
