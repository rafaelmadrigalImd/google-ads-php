<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A keyword historical metrics.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.KeywordPlanKeywordHistoricalMetrics</code>
 */
final class KeywordPlanKeywordHistoricalMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'car'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     */
    private $search_query = null;
    /**
     * The historical metrics for the query associated with one or more
     * ad_group_keywords in the plan.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.KeywordPlanHistoricalMetrics keyword_metrics = 2;</code>
     */
    private $keyword_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $search_query
     *           The text of the query associated with one or more ad_group_keywords in the
     *           plan.
     *           Note that we de-dupe your keywords list, eliminating close variants before
     *           returning the plan's keywords as text. For example, if your plan originally
     *           contained the keywords 'car' and 'cars', the returned search query will
     *           only contain 'car'.
     *     @type \Google\Ads\GoogleAds\V2\Common\KeywordPlanHistoricalMetrics $keyword_metrics
     *           The historical metrics for the query associated with one or more
     *           ad_group_keywords in the plan.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'car'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSearchQuery()
    {
        return $this->search_query;
    }

    /**
     * Returns the unboxed value from <code>getSearchQuery()</code>

     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'car'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     * @return string|null
     */
    public function getSearchQueryUnwrapped()
    {
        $wrapper = $this->getSearchQuery();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'car'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSearchQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->search_query = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The text of the query associated with one or more ad_group_keywords in the
     * plan.
     * Note that we de-dupe your keywords list, eliminating close variants before
     * returning the plan's keywords as text. For example, if your plan originally
     * contained the keywords 'car' and 'cars', the returned search query will
     * only contain 'car'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_query = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setSearchQueryUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setSearchQuery($wrappedVar);
    }

    /**
     * The historical metrics for the query associated with one or more
     * ad_group_keywords in the plan.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.KeywordPlanHistoricalMetrics keyword_metrics = 2;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\KeywordPlanHistoricalMetrics
     */
    public function getKeywordMetrics()
    {
        return $this->keyword_metrics;
    }

    /**
     * The historical metrics for the query associated with one or more
     * ad_group_keywords in the plan.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.KeywordPlanHistoricalMetrics keyword_metrics = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\KeywordPlanHistoricalMetrics $var
     * @return $this
     */
    public function setKeywordMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\KeywordPlanHistoricalMetrics::class);
        $this->keyword_metrics = $var;

        return $this;
    }

}

