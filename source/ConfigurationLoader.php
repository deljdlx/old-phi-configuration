<?php
namespace Phi\Configuration;


class ConfigurationLoader
{


    private $pathes = array();

    /**
     * @var Environment[]
     */
    private $environments = array();


    public function __construct($pathes)
    {
        if (!is_array($pathes)) {
            $this->pathes[] = $pathes;
        } else {
            $this->pathes = $pathes;
        }
    }


}