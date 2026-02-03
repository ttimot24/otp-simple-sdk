<?php
/**
 *  Copyright (C) 2025 SimplePay Zrt.
 *
 *  PHP version 7
 *
 *  This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  SDK
 * @package   SimplePayV2_SDK
 * @author    SimplePay IT Support <itsupport@simplepay.com>
 * @copyright 2025 SimplePay Zrt.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html  GNU GENERAL PUBLIC LICENSE (GPL V3.0)
 * @link      http://simplepartner.hu/online_fizetesi_szolgaltatas.html
 */
 
 
 /**
  * Auto transaction with card data
  *
  * Transaction with card data allowed in case of merchant side PCI-DSS compliance only
  *
  * @category SDK
  * @package  SimplePayV2_SDK
  * @author   SimplePay IT Support <itsupport@simplepay.com>
  * @license  http://www.gnu.org/licenses/gpl-3.0.html  GNU GENERAL PUBLIC LICENSE (GPL V3.0)
  * @link     http://simplepartner.hu/online_fizetesi_szolgaltatas.html
  */

namespace SimplePay\V2;

use SimplePay\V2\Base;

class SimplePayAuto extends Base
{
    use Sca;

    protected $currentInterface = 'auto';
    public $transaction = array();

    protected $api = array(
        'sandbox' => 'https://sandbox.simplepay.hu',
        'live' => 'https://securepay.simplepay.hu'
        );

    protected $apiInterface = array(
        'auto' => '/pay/pay/auto/pspHU',
        );
    
    public $transactionBase = array(
    'salt' => '',
    'merchant' => '',
    'orderRef' => '',
    'currency' => '',
    'customerEmail' => '',
    'sdkVersion' => '',
    'cardData' => array(
    'number' => '',
    'expiry' => '',
    'cvc' => '',
    'holder' => '',
    ),
    );

    /**    
     * Send transaction with card data to SimplePay API 
     * The response is the result of the authorization
     *
     * @return void
     */
    public function runAuto()
    {      
        $this->execApiCall();       
    }
    
}
