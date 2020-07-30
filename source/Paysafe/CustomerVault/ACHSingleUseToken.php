<?php

namespace Paysafe\CustomerVault;

/**
 * @property string $id
 * @property string $paymentToken
 * @property int $timeToLiveSeconds
 * @property Profile $profile
 * @property EFTBankaccounts $achBankAccount
 * @property BillingAddress $billingAddress
 */
class ACHSingleUseToken extends \Paysafe\JSONObject
{
    /**
     * @var array
     */
    protected static $fieldTypes = array(
        'id' => 'string',
        'paymentToken' => 'string',
        'timeToLiveSeconds' => 'int',
        'profile' => '\Paysafe\CustomerVault\Profile',
        'achBankAccount' => '\Paysafe\CustomerVault\ACHBankaccounts',
        'billingAddress' => '\Paysafe\CustomerVault\BillingAddress',
    );

}
