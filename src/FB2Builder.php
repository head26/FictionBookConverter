<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 13:54
 */

namespace FB2Builder;

if (!defined('FB2Builder_ROOT')) {
    define('FB2Builder_ROOT', dirname(__FILE__) . '/');
    require(FB2Builder_ROOT . 'Autoloader.php');
}

class FB2Builder
{
    /**
     * @var null
     */
    protected $description = NULL;
    protected $body = NULL;
    protected $stylesheet = NULL;
    protected $binary = NULL;


    /**
     * @return \FB2BuilderDescription|null
     */
    public function getDescription()
    {
        if(!$this->description instanceof \FB2BuilderDescription)
            return $this->description = new \FB2BuilderDescription();
        return $this->description;
    }

    /**
     * @return null
     */
    public function getBody()
    {
        if(!$this->description instanceof \FB2BuilderDescription)
            return $this->description = new \FB2BuilderDescription();
        return $this->description;
    }


}
$a = new FB2Builder();
echo $a->getDescription()->getTitleInfo()->getA();
