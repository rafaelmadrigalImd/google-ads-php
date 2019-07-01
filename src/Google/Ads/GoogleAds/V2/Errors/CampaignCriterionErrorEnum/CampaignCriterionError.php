<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/errors/campaign_criterion_error.proto

namespace Google\Ads\GoogleAds\V2\Errors\CampaignCriterionErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible campaign criterion errors.
 *
 * Protobuf type <code>google.ads.googleads.v2.errors.CampaignCriterionErrorEnum.CampaignCriterionError</code>
 */
class CampaignCriterionError
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
     * Concrete type of criterion (keyword v.s. placement) is required for
     * CREATE and UPDATE operations.
     *
     * Generated from protobuf enum <code>CONCRETE_TYPE_REQUIRED = 2;</code>
     */
    const CONCRETE_TYPE_REQUIRED = 2;
    /**
     * Invalid placement URL.
     *
     * Generated from protobuf enum <code>INVALID_PLACEMENT_URL = 3;</code>
     */
    const INVALID_PLACEMENT_URL = 3;
    /**
     * Criteria type can not be excluded for the campaign by the customer. like
     * AOL account type cannot target site type criteria
     *
     * Generated from protobuf enum <code>CANNOT_EXCLUDE_CRITERIA_TYPE = 4;</code>
     */
    const CANNOT_EXCLUDE_CRITERIA_TYPE = 4;
    /**
     * Cannot set the campaign criterion status for this criteria type.
     *
     * Generated from protobuf enum <code>CANNOT_SET_STATUS_FOR_CRITERIA_TYPE = 5;</code>
     */
    const CANNOT_SET_STATUS_FOR_CRITERIA_TYPE = 5;
    /**
     * Cannot set the campaign criterion status for an excluded criteria.
     *
     * Generated from protobuf enum <code>CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA = 6;</code>
     */
    const CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA = 6;
    /**
     * Cannot target and exclude the same criterion.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_AND_EXCLUDE = 7;</code>
     */
    const CANNOT_TARGET_AND_EXCLUDE = 7;
    /**
     * The mutate contained too many operations.
     *
     * Generated from protobuf enum <code>TOO_MANY_OPERATIONS = 8;</code>
     */
    const TOO_MANY_OPERATIONS = 8;
    /**
     * This operator cannot be applied to a criterion of this type.
     *
     * Generated from protobuf enum <code>OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE = 9;</code>
     */
    const OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE = 9;
    /**
     * The Shopping campaign sales country is not supported for
     * ProductSalesChannel targeting.
     *
     * Generated from protobuf enum <code>SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL = 10;</code>
     */
    const SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL = 10;
    /**
     * The existing field can't be updated with CREATE operation. It can be
     * updated with UPDATE operation only.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_EXISTING_FIELD = 11;</code>
     */
    const CANNOT_ADD_EXISTING_FIELD = 11;
    /**
     * Negative criteria are immutable, so updates are not allowed.
     *
     * Generated from protobuf enum <code>CANNOT_UPDATE_NEGATIVE_CRITERION = 12;</code>
     */
    const CANNOT_UPDATE_NEGATIVE_CRITERION = 12;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CONCRETE_TYPE_REQUIRED => 'CONCRETE_TYPE_REQUIRED',
        self::INVALID_PLACEMENT_URL => 'INVALID_PLACEMENT_URL',
        self::CANNOT_EXCLUDE_CRITERIA_TYPE => 'CANNOT_EXCLUDE_CRITERIA_TYPE',
        self::CANNOT_SET_STATUS_FOR_CRITERIA_TYPE => 'CANNOT_SET_STATUS_FOR_CRITERIA_TYPE',
        self::CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA => 'CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA',
        self::CANNOT_TARGET_AND_EXCLUDE => 'CANNOT_TARGET_AND_EXCLUDE',
        self::TOO_MANY_OPERATIONS => 'TOO_MANY_OPERATIONS',
        self::OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE => 'OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE',
        self::SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL => 'SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL',
        self::CANNOT_ADD_EXISTING_FIELD => 'CANNOT_ADD_EXISTING_FIELD',
        self::CANNOT_UPDATE_NEGATIVE_CRITERION => 'CANNOT_UPDATE_NEGATIVE_CRITERION',
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
class_alias(CampaignCriterionError::class, \Google\Ads\GoogleAds\V2\Errors\CampaignCriterionErrorEnum_CampaignCriterionError::class);

