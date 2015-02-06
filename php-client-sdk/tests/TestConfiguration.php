<?php
/*******************************************************************************
 * Copyright (c) cortical.io GmbH. All rights reserved.
 *
 * This software is confidential and proprietary information.
 * You shall use it only in accordance with the terms of the
 * license agreement you entered into with cortical.io GmbH.
 ******************************************************************************/
require_once("../ApiClient.php");

class TestConfiguration
{
    # API_KEY = "your_api_key"
    public static $API_KEY = "58baa020-97b4-11e3-82ec-614a46604ad2";
    public static $BASE_PATH = "http://api.cortical.io/rest";
    public static $RETINA_NAME = "en_associative";

    public function getApiClient()
    {
        return new APIClient(self::$API_KEY, self::$BASE_PATH);
    }
} 