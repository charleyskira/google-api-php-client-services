<?php
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "responseErrors" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $responseErrors = $adexchangebuyer2Service->responseErrors;
 *  </code>
 */
class Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsResponseErrors extends Google_Service_Resource
{
  /**
   * List all errors that occurred in bid responses, with the number of bid
   * responses affected for each reason.
   * (responseErrors.listAccountsFilterSetsResponseErrors)
   *
   * @param string $accountId Account ID of the buyer.
   * @param int $filterSetId The ID of the filter set to apply.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_ListResponseErrorsResponse
   */
  public function listAccountsFilterSetsResponseErrors($accountId, $filterSetId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'filterSetId' => $filterSetId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyerII_ListResponseErrorsResponse");
  }
}