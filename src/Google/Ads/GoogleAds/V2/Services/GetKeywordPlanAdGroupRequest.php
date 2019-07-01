<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/keyword_plan_ad_group_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeywordPlanAdGroupService.GetKeywordPlanAdGroup][google.ads.googleads.v2.services.KeywordPlanAdGroupService.GetKeywordPlanAdGroup].
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.GetKeywordPlanAdGroupRequest</code>
 */
final class GetKeywordPlanAdGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the Keyword Plan ad group to fetch.
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
     *           The resource name of the Keyword Plan ad group to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\KeywordPlanAdGroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the Keyword Plan ad group to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the Keyword Plan ad group to fetch.
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

