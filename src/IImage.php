<?php
namespace EricSource\IImage;

class IImage
{

    protected $config = [];

    public function __construct()
    {
        $this->initConfig();
    }

    public function initConfig()
    {
        $configs = config('iimage', []);
    }

    public function surpriseMe($name){
        echo $name, ", u're awesome.";
    }
}