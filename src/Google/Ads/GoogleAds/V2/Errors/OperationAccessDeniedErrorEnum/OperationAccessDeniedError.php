<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/errors/operation_access_denied_error.proto

namespace Google\Ads\GoogleAds\V2\Errors\OperationAccessDeniedErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible operation access denied errors.
 *
 * Protobuf type <code>google.ads.googleads.v2.errors.OperationAccessDeniedErrorEnum.OperationAccessDeniedError</code>
 */
class OperationAccessDeniedError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Unauthorized invocation of a service's method (get, mutate, etc.)
     *
     * Generated from protobuf enum <code>ACTION_NOT_PERMITTED = 2;</code>
     */
    const ACTION_NOT_PERMITTED = 2;
    /**
     * Unauthorized CREATE operation in invoking a service's mutate method.
     *
     * Generated from protobuf enum <code>CREATE_OPERATION_NOT_PERMITTED = 3;</code>
     */
    const CREATE_OPERATION_NOT_PERMITTED = 3;
    /**
     * Unauthorized REMOVE operation in invoking a service's mutate method.
     *
     * Generated from protobuf enum <code>REMOVE_OPERATION_NOT_PERMITTED = 4;</code>
     */
    const REMOVE_OPERATION_NOT_PERMITTED = 4;
    /**
     * Unauthorized UPDATE operation in invoking a service's mutate method.
     *
     * Generated from protobuf enum <code>UPDATE_OPERATION_NOT_PERMITTED = 5;</code>
     */
    const UPDATE_OPERATION_NOT_PERMITTED = 5;
    /**
     * A mutate action is not allowed on this campaign, from this client.
     *
     * Generated from protobuf enum <code>MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT = 6;</code>
     */
    const MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT = 6;
    /**
     * This operation is not permitted on this campaign type
     *
     * Generated from protobuf enum <code>OPERATION_NOT_PERMITTED_FOR_CAMPAIGN_TYPE = 7;</code>
     */
    const OPERATION_NOT_PERMITTED_FOR_CAMPAIGN_TYPE = 7;
    /**
     * A CREATE operation may not set status to REMOVED.
     *
     * Generated from protobuf enum <code>CREATE_AS_REMOVED_NOT_PERMITTED = 8;</code>
     */
    const CREATE_AS_REMOVED_NOT_PERMITTED = 8;
    /**
     * This operation is not allowed because the campaign or adgroup is removed.
     *
     * Generated from protobuf enum <code>OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE = 9;</code>
     */
    const OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE = 9;
    /**
     * This operation is not permitted on this ad group type.
     *
     * Generated from protobuf enum <code>OPERATION_NOT_PERMITTED_FOR_AD_GROUP_TYPE = 10;</code>
     */
    const OPERATION_NOT_PERMITTED_FOR_AD_GROUP_TYPE = 10;
    /**
     * The mutate is not allowed for this customer.
     *
     * Generated from protobuf enum <code>MUTATE_NOT_PERMITTED_FOR_CUSTOMER = 11;</code>
     */
    const MUTATE_NOT_PERMITTED_FOR_CUSTOMER = 11;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ACTION_NOT_PERMITTED => 'ACTION_NOT_PERMITTED',
        self::CREATE_OPERATION_NOT_PERMITTED => 'CREATE_OPERATION_NOT_PERMITTED',
        self::REMOVE_OPERATION_NOT_PERMITTED => 'REMOVE_OPERATION_NOT_PERMITTED',
        self::UPDATE_OPERATION_NOT_PERMITTED => 'UPDATE_OPERATION_NOT_PERMITTED',
        self::MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT => 'MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT',
        self::OPERATION_NOT_PERMITTED_FOR_CAMPAIGN_TYPE => 'OPERATION_NOT_PERMITTED_FOR_CAMPAIGN_TYPE',
        self::CREATE_AS_REMOVED_NOT_PERMITTED => 'CREATE_AS_REMOVED_NOT_PERMITTED',
        self::OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE => 'OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE',
        self::OPERATION_NOT_PERMITTED_FOR_AD_GROUP_TYPE => 'OPERATION_NOT_PERMITTED_FOR_AD_GROUP_TYPE',
        self::MUTATE_NOT_PERMITTED_FOR_CUSTOMER => 'MUTATE_NOT_PERMITTED_FOR_CUSTOMER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OperationAccessDeniedError::class, \Google\Ads\GoogleAds\V2\Errors\OperationAccessDeniedErrorEnum_OperationAccessDeniedError::class);

