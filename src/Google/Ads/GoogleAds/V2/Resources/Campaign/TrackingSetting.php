<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/campaign.proto

namespace Google\Ads\GoogleAds\V2\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Campaign level settings for tracking information.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.Campaign.TrackingSetting</code>
 */
final class TrackingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * The url used for dynamic tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url = 1;</code>
     */
    private $tracking_url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $tracking_url
     *           The url used for dynamic tracking.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * The url used for dynamic tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTrackingUrl()
    {
        return $this->tracking_url;
    }

    /**
     * Returns the unboxed value from <code>getTrackingUrl()</code>

     * The url used for dynamic tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url = 1;</code>
     * @return string|null
     */
    public function getTrackingUrlUnwrapped()
    {
        $wrapper = $this->getTrackingUrl();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The url used for dynamic tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTrackingUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->tracking_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The url used for dynamic tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTrackingUrlUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setTrackingUrl($wrappedVar);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TrackingSetting::class, \Google\Ads\GoogleAds\V2\Resources\Campaign_TrackingSetting::class);

