<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing KeywordStatisticsSearchResultType
 *
 * Keyword statistics search result.
 * XSD Type: KeywordStatisticsSearchResultType
 *
 * @method string getKeyword()
 * @method KeywordStatisticsSearchResultType setKeyword(string $keyword)
 * @method integer getItemHits()
 * @method KeywordStatisticsSearchResultType setItemHits(integer $itemHits)
 * @method integer getSize()
 * @method KeywordStatisticsSearchResultType setSize(integer $size)
 */
class KeywordStatisticsSearchResultType extends Type
{

    /**
     * @var string
     */
    protected $keyword = null;

    /**
     * @var integer
     */
    protected $itemHits = null;

    /**
     * @var integer
     */
    protected $size = null;
}
