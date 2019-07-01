<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/customer.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Call reporting setting for a customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.CallReportingSetting</code>
 */
final class CallReportingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Enable reporting of phone call events by redirecting them via Google
     * System.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_reporting_enabled = 1;</code>
     */
    private $call_reporting_enabled = null;
    /**
     * Whether to enable call conversion reporting.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_conversion_reporting_enabled = 2;</code>
     */
    private $call_conversion_reporting_enabled = null;
    /**
     * Customer-level call conversion action to attribute a call conversion to.
     * If not set a default conversion action is used. Only in effect when
     * call_conversion_reporting_enabled is set to true.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_conversion_action = 9;</code>
     */
    private $call_conversion_action = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BoolValue $call_reporting_enabled
     *           Enable reporting of phone call events by redirecting them via Google
     *           System.
     *     @type \Google\Protobuf\BoolValue $call_conversion_reporting_enabled
     *           Whether to enable call conversion reporting.
     *     @type \Google\Protobuf\StringValue $call_conversion_action
     *           Customer-level call conversion action to attribute a call conversion to.
     *           If not set a default conversion action is used. Only in effect when
     *           call_conversion_reporting_enabled is set to true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * Enable reporting of phone call events by redirecting them via Google
     * System.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_reporting_enabled = 1;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getCallReportingEnabled()
    {
        return $this->call_reporting_enabled;
    }

    /**
     * Returns the unboxed value from <code>getCallReportingEnabled()</code>

     * Enable reporting of phone call events by redirecting them via Google
     * System.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_reporting_enabled = 1;</code>
     * @return bool|null
     */
    public function getCallReportingEnabledUnwrapped()
    {
        $wrapper = $this->getCallReportingEnabled();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Enable reporting of phone call events by redirecting them via Google
     * System.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_reporting_enabled = 1;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setCallReportingEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->call_reporting_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Enable reporting of phone call events by redirecting them via Google
     * System.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_reporting_enabled = 1;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setCallReportingEnabledUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setCallReportingEnabled($wrappedVar);
    }

    /**
     * Whether to enable call conversion reporting.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_conversion_reporting_enabled = 2;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getCallConversionReportingEnabled()
    {
        return $this->call_conversion_reporting_enabled;
    }

    /**
     * Returns the unboxed value from <code>getCallConversionReportingEnabled()</code>

     * Whether to enable call conversion reporting.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_conversion_reporting_enabled = 2;</code>
     * @return bool|null
     */
    public function getCallConversionReportingEnabledUnwrapped()
    {
        $wrapper = $this->getCallConversionReportingEnabled();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Whether to enable call conversion reporting.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_conversion_reporting_enabled = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setCallConversionReportingEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->call_conversion_reporting_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether to enable call conversion reporting.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue call_conversion_reporting_enabled = 2;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setCallConversionReportingEnabledUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setCallConversionReportingEnabled($wrappedVar);
    }

    /**
     * Customer-level call conversion action to attribute a call conversion to.
     * If not set a default conversion action is used. Only in effect when
     * call_conversion_reporting_enabled is set to true.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_conversion_action = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCallConversionAction()
    {
        return $this->call_conversion_action;
    }

    /**
     * Returns the unboxed value from <code>getCallConversionAction()</code>

     * Customer-level call conversion action to attribute a call conversion to.
     * If not set a default conversion action is used. Only in effect when
     * call_conversion_reporting_enabled is set to true.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_conversion_action = 9;</code>
     * @return string|null
     */
    public function getCallConversionActionUnwrapped()
    {
        $wrapper = $this->getCallConversionAction();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Customer-level call conversion action to attribute a call conversion to.
     * If not set a default conversion action is used. Only in effect when
     * call_conversion_reporting_enabled is set to true.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_conversion_action = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCallConversionAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->call_conversion_action = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Customer-level call conversion action to attribute a call conversion to.
     * If not set a default conversion action is used. Only in effect when
     * call_conversion_reporting_enabled is set to true.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_conversion_action = 9;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCallConversionActionUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCallConversionAction($wrappedVar);
    }

}

