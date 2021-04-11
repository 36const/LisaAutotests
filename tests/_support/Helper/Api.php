<?php
namespace lisa\Helper;

class Api extends \Codeception\Module
{
    public function _beforeSuite($settings = []) {
        $this->getModule('TestHelper')->insertFixtureToDatabase('allUsers');
    }
}
