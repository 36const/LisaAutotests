<?php

namespace lisa\Page\IronVPN;

use lisa\Page\IronVPN\Home;

class Processing
{
    public const GET_NOW_BUTTON_TRIAL = '//section[@id="trial"]//a/span[text()="Get IronVPN Now"]';
    public const GET_NOW_BUTTON_MONEY_BACK = '//section[@id="money-back"]//a/span[text()="Get IronVPN Now"]';

    public const PAYMENT_IFRAME = '//iframe[@id="solid-payment-form-iframe"]';
    public const SUBMIT_BUTTON = '//div[@id="root"]/form//button[@name="submitButton"]';
    public const CARD_BRANDS = '//div[@id="root"]/form//div[@class="card_brands"]';

    public const CARD_VIEW_NUMBER = '//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_number"]//input';
    public const CARD_VIEW_EXPIRY_DATE = '//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]//input';
    public const CARD_VIEW_CVV = '//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_cvv"]//input';
    public const CARD_VIEW_INDEX = '//div[@id="root"]/form//div[contains(@class, "zip_code")]//input';

    public const CARD_VIEW_ERROR_NUMBER = '//div[@id="root"]/form//div[@class="body_errors"]/div[@id="cardNumber_error-text"]';
    public const CARD_VIEW_ERROR_EXPIRY_DATE = '//div[@id="root"]/form//div[@class="body_errors"]/div[@id="cardExpiryDate_error-text"]';
    public const CARD_VIEW_ERROR_CVV = '//div[@id="root"]/form//div[@class="body_errors"]/div[@id="cardCvv_error-text"]';
}