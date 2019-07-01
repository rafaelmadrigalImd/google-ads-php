<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/user_location_view.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A user location view.
 * User Location View includes all metrics aggregated at the country level,
 * one row per country. It reports metrics at the actual physical location of
 * the user by targeted or not targeted location. If other segment fields are
 * used, you may get more than one row per country.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.UserLocationView</code>
 */
final class UserLocationView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the user location view.
     * UserLocation view resource names have the form:
     * `customers/{customer_id}/userLocationViews/{country_criterion_id}~{targeting_location}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 2;</code>
     */
    private $country_criterion_id = null;
    /**
     * Indicates whether location was targeted or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targeting_location = 3;</code>
     */
    private $targeting_location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the user location view.
     *           UserLocation view resource names have the form:
     *           `customers/{customer_id}/userLocationViews/{country_criterion_id}~{targeting_location}`
     *     @type \Google\Protobuf\Int64Value $country_criterion_id
     *           Criterion Id for the country.
     *     @type \Google\Protobuf\BoolValue $targeting_location
     *           Indicates whether location was targeted or not.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\UserLocationView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the user location view.
     * UserLocation view resource names have the form:
     * `customers/{customer_id}/userLocationViews/{country_criterion_id}~{targeting_location}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the user location view.
     * UserLocation view resource names have the form:
     * `customers/{customer_id}/userLocationViews/{country_criterion_id}~{targeting_location}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCountryCriterionId()
    {
        return $this->country_criterion_id;
    }

    /**
     * Returns the unboxed value from <code>getCountryCriterionId()</code>

     * Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 2;</code>
     * @return int|string|null
     */
    public function getCountryCriterionIdUnwrapped()
    {
        $wrapper = $this->getCountryCriterionId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCountryCriterionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->country_criterion_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCountryCriterionIdUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setCountryCriterionId($wrappedVar);
    }

    /**
     * Indicates whether location was targeted or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targeting_location = 3;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getTargetingLocation()
    {
        return $this->targeting_location;
    }

    /**
     * Returns the unboxed value from <code>getTargetingLocation()</code>

     * Indicates whether location was targeted or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targeting_location = 3;</code>
     * @return bool|null
     */
    public function getTargetingLocationUnwrapped()
    {
        $wrapper = $this->getTargetingLocation();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Indicates whether location was targeted or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targeting_location = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setTargetingLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->targeting_location = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Indicates whether location was targeted or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targeting_location = 3;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setTargetingLocationUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setTargetingLocation($wrappedVar);
    }

}

