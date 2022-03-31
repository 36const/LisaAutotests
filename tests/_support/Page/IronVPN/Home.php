<?php

namespace lisa\Page\IronVPN;

class Home
{
    public const GET_NOW_POPUP = '//div[@role="dialog"]';
    public const GET_NOW_BUTTON_ON_PAGE = '//button//span[text()="Get IronVPN Now"]';
    public const GET_NOW_BUTTON_IN_POPUP = self::GET_NOW_POPUP . self::GET_NOW_BUTTON_ON_PAGE;
    public const GET_NOW_BUTTON_BTN = '//section[@id="get_now_btn"]' . self::GET_NOW_BUTTON_ON_PAGE;
    public const GET_NOW_BUTTON_MIN = '//section[@id="get_now_mini"]' . self::GET_NOW_BUTTON_ON_PAGE;

    public const AGREE_CHECKBOX_IN_POPUP = self::GET_NOW_POPUP . '//div[@id="checkAgree"]';
    public const EMAIL_FIELD_IN_POPUP = self::GET_NOW_POPUP . '//div[@id="checkUserEmail"]';
    public const EMAIL_INPUT_FIELD_IN_POPUP = self::EMAIL_FIELD_IN_POPUP . '/p/following-sibling::input';

    /**Выпадающий список готовых эмейлов*/
    public static function emailFromList(string $email): string
    {
        return self::EMAIL_FIELD_IN_POPUP . "//div[@class='input-box__input-list show']/div[text()='$email']";
    }
}