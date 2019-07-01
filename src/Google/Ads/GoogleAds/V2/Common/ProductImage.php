<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Product image specific data.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.ProductImage</code>
 */
final class ProductImage extends \Google\Protobuf\Internal\Message
{
    /**
     * The MediaFile resource name of the product image. Valid image types are
     * GIF, JPEG and PNG. The minimum size is 300x300 pixels and the aspect ratio
     * must be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue product_image = 1;</code>
     */
    private $product_image = null;
    /**
     * Description of the product.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     */
    private $description = null;
    /**
     * Display-call-to-action of the product image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.DisplayCallToAction display_call_to_action = 3;</code>
     */
    private $display_call_to_action = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $product_image
     *           The MediaFile resource name of the product image. Valid image types are
     *           GIF, JPEG and PNG. The minimum size is 300x300 pixels and the aspect ratio
     *           must be 1:1 (+-1%).
     *     @type \Google\Protobuf\StringValue $description
     *           Description of the product.
     *     @type \Google\Ads\GoogleAds\V2\Common\DisplayCallToAction $display_call_to_action
     *           Display-call-to-action of the product image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The MediaFile resource name of the product image. Valid image types are
     * GIF, JPEG and PNG. The minimum size is 300x300 pixels and the aspect ratio
     * must be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue product_image = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getProductImage()
    {
        return $this->product_image;
    }

    /**
     * Returns the unboxed value from <code>getProductImage()</code>

     * The MediaFile resource name of the product image. Valid image types are
     * GIF, JPEG and PNG. The minimum size is 300x300 pixels and the aspect ratio
     * must be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue product_image = 1;</code>
     * @return string|null
     */
    public function getProductImageUnwrapped()
    {
        $wrapper = $this->getProductImage();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The MediaFile resource name of the product image. Valid image types are
     * GIF, JPEG and PNG. The minimum size is 300x300 pixels and the aspect ratio
     * must be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue product_image = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setProductImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->product_image = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The MediaFile resource name of the product image. Valid image types are
     * GIF, JPEG and PNG. The minimum size is 300x300 pixels and the aspect ratio
     * must be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue product_image = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setProductImageUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setProductImage($wrappedVar);
    }

    /**
     * Description of the product.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * Description of the product.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return string|null
     */
    public function getDescriptionUnwrapped()
    {
        $wrapper = $this->getDescription();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Description of the product.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Description of the product.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setDescription($wrappedVar);
    }

    /**
     * Display-call-to-action of the product image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.DisplayCallToAction display_call_to_action = 3;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\DisplayCallToAction
     */
    public function getDisplayCallToAction()
    {
        return $this->display_call_to_action;
    }

    /**
     * Display-call-to-action of the product image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.DisplayCallToAction display_call_to_action = 3;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\DisplayCallToAction $var
     * @return $this
     */
    public function setDisplayCallToAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\DisplayCallToAction::class);
        $this->display_call_to_action = $var;

        return $this;
    }

}

