<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 22.02.2016
 * Time: 15:41
 */

namespace FB2Builder\nodes;


/**
 * Class Image
 * Картинка, иллюстрация в тексте.
 * Определены два типа картинок: обычные (imageType) и внутри текста (inlineImageType).
 * @package FB2Builder\nodes
 */
class Image extends AbstractBuildXML
{
    public function setImage($path)
    {
        $info = pathinfo($path);
        $fileName = preg_replace("/[^\\w]*/ui",'',$info['filename']).'.'.$info['extension'];
        $content = file_get_contents($path);
        if($content === FALSE)
            return FALSE;
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $mime = $finfo->buffer($content);
        if(!in_array($mime, array("image/jpeg", "image/png")))
            return FALSE;
        FictionBook::getBinary($fileName)
            ->setValue(base64_encode($content))
            ->getAttribute()
            ->setContentType($mime)
            ->setId($fileName);

        $this->getAttribute()->setXlinkHref('#'.$fileName);
    }
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'image';
    }
}