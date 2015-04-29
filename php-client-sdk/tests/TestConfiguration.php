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
    public static $API_KEY = "<your api key>";
    public static $BASE_PATH = "http://<api url>/rest";
    public static $RETINA_NAME = "en_associative";

    public function getApiClient()
    {
        return new APIClient(self::$API_KEY, self::$BASE_PATH);
    }
} 