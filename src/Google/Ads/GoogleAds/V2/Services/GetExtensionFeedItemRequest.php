<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/extension_feed_item_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [ExtensionFeedItemService.GetExtensionFeedItem][google.ads.googleads.v2.services.ExtensionFeedItemService.GetExtensionFeedItem].
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.GetExtensionFeedItemRequest</code>
 */
final class GetExtensionFeedItemRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the extension feed item to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the extension feed item to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\ExtensionFeedItemService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the extension feed item to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the extension feed item to fetch.
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

}

