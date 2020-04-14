<?php
namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class RequestView extends FunctionalTester
{
    public function amOnView(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/view?id=$id");
    }

    public function checkFields($fields)
    {
        $I = $this;
        unset($fields['_csrf-backend']);
        unset($fields['newStatus']);
        unset($fields['Request[uploadedFiles][]']);
        unset($fields['Request[attachment_folder]']);
        $I->seeInFormFields('form[id=update_form]', $fields);
    }

}