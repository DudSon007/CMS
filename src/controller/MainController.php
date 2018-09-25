<?php

class MainController
{
    private $title;

    public function __construct()
    {
        $this->title=$title;
    }

    public function index()
    {
        return $this->title;
    }

    public function about()
    {
        return $this->title . array['www.onet.pl','www.interia.pl','www.wp.pl'];
    }
}