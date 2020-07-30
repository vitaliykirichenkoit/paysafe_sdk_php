<?php

namespace Paysafe\CustomerVault;

/**
 * @property string $id
 * @property string $paymentToken
 * @property int $timeToLiveSeconds
 * @property Profile $profile
 * @property EFTBankaccounts $eftBankAccount
 * @property BillingAddress $billingAddress
 */
class EFTSingleUseToken extends \Paysafe\JSONObject
{
    /**
     * @var array
     */
    protected static $fieldTypes = array(
        'id' => 'string',
        'paymentToken' => 'string',
        'timeToLiveSeconds' => 'int',
        'profile' => '\Paysafe\CustomerVault\Profile',
        'eftBankAccount' => '\Paysafe\CustomerVault\EFTBankaccounts',
        'billingAddress' => '\Paysafe\CustomerVault\BillingAddress',
    );

}
