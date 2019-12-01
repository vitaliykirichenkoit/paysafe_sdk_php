<?php

namespace Paysafe\AccountManagement;

/**
 * Class TermsAndConditions
 * @package Paysafe\AccountManagement
 *
 * @property \Paysafe\Link[] $links
 * @property string $id
 * @property string $version
 * @property string $content
 */
class TermsAndConditions extends \Paysafe\JSONObject {

    protected static $fieldTypes = array(
        'links' => 'array:\Paysafe\Link',
        'id' => 'string',
        'version' => 'string',
        'content' => 'string',
    );
}
