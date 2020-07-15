<?php

namespace Paysafe\CustomerVault;

/**
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
        'profile' => '\Paysafe\CustomerVault\Profile',
        'eftBankAccount' => '\Paysafe\CustomerVault\EFTBankaccounts',
        'billingAddress' => '\Paysafe\CustomerVault\BillingAddress',
    );

}
