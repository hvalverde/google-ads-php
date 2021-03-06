<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/feed_item.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Policy, validation, and quality approval info for a feed item for the
 * specified placeholder type.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.FeedItemPlaceholderPolicyInfo</code>
 */
class FeedItemPlaceholderPolicyInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value placeholder_type = 1;</code>
     */
    protected $placeholder_type = null;
    /**
     * The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2;</code>
     */
    protected $feed_mapping_resource_name = null;
    /**
     * Where the placeholder type is in the review process.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PolicyReviewStatusEnum.PolicyReviewStatus review_status = 3;</code>
     */
    protected $review_status = 0;
    /**
     * The overall approval status of the placeholder type, calculated based on
     * the status of its individual policy topic entries.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus approval_status = 4;</code>
     */
    protected $approval_status = 0;
    /**
     * The list of policy findings for the placeholder type.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicEntry policy_topic_entries = 5;</code>
     */
    private $policy_topic_entries;
    /**
     * The validation status of the palceholder type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemValidationStatusEnum.FeedItemValidationStatus validation_status = 6;</code>
     */
    protected $validation_status = 0;
    /**
     * List of placeholder type validation errors.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.resources.FeedItemValidationError validation_errors = 7;</code>
     */
    private $validation_errors;
    /**
     * Placeholder type quality evaluation approval status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemQualityApprovalStatusEnum.FeedItemQualityApprovalStatus quality_approval_status = 8;</code>
     */
    protected $quality_approval_status = 0;
    /**
     * List of placeholder type quality evaluation disapproval reasons.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.enums.FeedItemQualityDisapprovalReasonEnum.FeedItemQualityDisapprovalReason quality_disapproval_reasons = 9;</code>
     */
    private $quality_disapproval_reasons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int32Value $placeholder_type
     *           The placeholder type.
     *     @type \Google\Protobuf\StringValue $feed_mapping_resource_name
     *           The FeedMapping that contains the placeholder type.
     *     @type int $review_status
     *           Where the placeholder type is in the review process.
     *     @type int $approval_status
     *           The overall approval status of the placeholder type, calculated based on
     *           the status of its individual policy topic entries.
     *     @type \Google\Ads\GoogleAds\V1\Common\PolicyTopicEntry[]|\Google\Protobuf\Internal\RepeatedField $policy_topic_entries
     *           The list of policy findings for the placeholder type.
     *     @type int $validation_status
     *           The validation status of the palceholder type.
     *     @type \Google\Ads\GoogleAds\V1\Resources\FeedItemValidationError[]|\Google\Protobuf\Internal\RepeatedField $validation_errors
     *           List of placeholder type validation errors.
     *     @type int $quality_approval_status
     *           Placeholder type quality evaluation approval status.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $quality_disapproval_reasons
     *           List of placeholder type quality evaluation disapproval reasons.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\FeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * The placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value placeholder_type = 1;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getPlaceholderType()
    {
        return $this->placeholder_type;
    }

    /**
     * Returns the unboxed value from <code>getPlaceholderType()</code>

     * The placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value placeholder_type = 1;</code>
     * @return int|null
     */
    public function getPlaceholderTypeUnwrapped()
    {
        return $this->readWrapperValue("placeholder_type");
    }

    /**
     * The placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value placeholder_type = 1;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setPlaceholderType($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->placeholder_type = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value placeholder_type = 1;</code>
     * @param int|null $var
     * @return $this
     */
    public function setPlaceholderTypeUnwrapped($var)
    {
        $this->writeWrapperValue("placeholder_type", $var);
        return $this;}

    /**
     * The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeedMappingResourceName()
    {
        return $this->feed_mapping_resource_name;
    }

    /**
     * Returns the unboxed value from <code>getFeedMappingResourceName()</code>

     * The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2;</code>
     * @return string|null
     */
    public function getFeedMappingResourceNameUnwrapped()
    {
        return $this->readWrapperValue("feed_mapping_resource_name");
    }

    /**
     * The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeedMappingResourceName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed_mapping_resource_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The FeedMapping that contains the placeholder type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_mapping_resource_name = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedMappingResourceNameUnwrapped($var)
    {
        $this->writeWrapperValue("feed_mapping_resource_name", $var);
        return $this;}

    /**
     * Where the placeholder type is in the review process.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PolicyReviewStatusEnum.PolicyReviewStatus review_status = 3;</code>
     * @return int
     */
    public function getReviewStatus()
    {
        return $this->review_status;
    }

    /**
     * Where the placeholder type is in the review process.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PolicyReviewStatusEnum.PolicyReviewStatus review_status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setReviewStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\PolicyReviewStatusEnum_PolicyReviewStatus::class);
        $this->review_status = $var;

        return $this;
    }

    /**
     * The overall approval status of the placeholder type, calculated based on
     * the status of its individual policy topic entries.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus approval_status = 4;</code>
     * @return int
     */
    public function getApprovalStatus()
    {
        return $this->approval_status;
    }

    /**
     * The overall approval status of the placeholder type, calculated based on
     * the status of its individual policy topic entries.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus approval_status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setApprovalStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\PolicyApprovalStatusEnum_PolicyApprovalStatus::class);
        $this->approval_status = $var;

        return $this;
    }

    /**
     * The list of policy findings for the placeholder type.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicEntry policy_topic_entries = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyTopicEntries()
    {
        return $this->policy_topic_entries;
    }

    /**
     * The list of policy findings for the placeholder type.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicEntry policy_topic_entries = 5;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PolicyTopicEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyTopicEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Common\PolicyTopicEntry::class);
        $this->policy_topic_entries = $arr;

        return $this;
    }

    /**
     * The validation status of the palceholder type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemValidationStatusEnum.FeedItemValidationStatus validation_status = 6;</code>
     * @return int
     */
    public function getValidationStatus()
    {
        return $this->validation_status;
    }

    /**
     * The validation status of the palceholder type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemValidationStatusEnum.FeedItemValidationStatus validation_status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setValidationStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\FeedItemValidationStatusEnum_FeedItemValidationStatus::class);
        $this->validation_status = $var;

        return $this;
    }

    /**
     * List of placeholder type validation errors.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.resources.FeedItemValidationError validation_errors = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }

    /**
     * List of placeholder type validation errors.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.resources.FeedItemValidationError validation_errors = 7;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\FeedItemValidationError[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Resources\FeedItemValidationError::class);
        $this->validation_errors = $arr;

        return $this;
    }

    /**
     * Placeholder type quality evaluation approval status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemQualityApprovalStatusEnum.FeedItemQualityApprovalStatus quality_approval_status = 8;</code>
     * @return int
     */
    public function getQualityApprovalStatus()
    {
        return $this->quality_approval_status;
    }

    /**
     * Placeholder type quality evaluation approval status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemQualityApprovalStatusEnum.FeedItemQualityApprovalStatus quality_approval_status = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setQualityApprovalStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\FeedItemQualityApprovalStatusEnum_FeedItemQualityApprovalStatus::class);
        $this->quality_approval_status = $var;

        return $this;
    }

    /**
     * List of placeholder type quality evaluation disapproval reasons.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.enums.FeedItemQualityDisapprovalReasonEnum.FeedItemQualityDisapprovalReason quality_disapproval_reasons = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQualityDisapprovalReasons()
    {
        return $this->quality_disapproval_reasons;
    }

    /**
     * List of placeholder type quality evaluation disapproval reasons.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.enums.FeedItemQualityDisapprovalReasonEnum.FeedItemQualityDisapprovalReason quality_disapproval_reasons = 9;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQualityDisapprovalReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V1\Enums\FeedItemQualityDisapprovalReasonEnum\FeedItemQualityDisapprovalReason::class);
        $this->quality_disapproval_reasons = $arr;

        return $this;
    }

}

