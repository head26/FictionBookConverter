<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:13
 */

namespace FB2Builder\nodes;


/**
 * Class History
 *
 * История изменении данного FB2 документа.
 * Рекомендуется к заполнению ответственным за документ.
 * @package FB2Builder\nodes
 */
class History extends AbstractBuildXML
{
    //TODO: к работе. Аналогично annotation
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'history';
    }

}