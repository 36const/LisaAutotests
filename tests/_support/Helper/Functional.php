<?php
namespace lisa\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Functional extends \Codeception\Module
{
    public function _beforeSuite($settings = []) {
        $this->getModule('TestHelper')->insertFixtureToDatabase('allUsers');
    }
}
