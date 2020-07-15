<?php

namespace Paysafe\CustomerVault;

/**
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
        'profile' => '\Paysafe\CustomerVault\Profile',
        'achBankAccount' => '\Paysafe\CustomerVault\ACHBankaccounts',
        'billingAddress' => '\Paysafe\CustomerVault\BillingAddress',
    );

}
