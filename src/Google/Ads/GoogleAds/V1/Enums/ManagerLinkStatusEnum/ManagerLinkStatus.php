<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/manager_link_status.proto

namespace Google\Ads\GoogleAds\V1\Enums\ManagerLinkStatusEnum;

/**
 * Possible statuses of a link.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ManagerLinkStatusEnum.ManagerLinkStatus</code>
 */
class ManagerLinkStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Indicates current in-effect relationship
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * Indicates terminated relationship
     *
     * Generated from protobuf enum <code>INACTIVE = 3;</code>
     */
    const INACTIVE = 3;
    /**
     * Indicates relationship has been requested by manager, but the client
     * hasn't accepted yet.
     *
     * Generated from protobuf enum <code>PENDING = 4;</code>
     */
    const PENDING = 4;
    /**
     * Relationship was requested by the manager, but the client has refused.
     *
     * Generated from protobuf enum <code>REFUSED = 5;</code>
     */
    const REFUSED = 5;
    /**
     * Indicates relationship has been requested by manager, but manager
     * canceled it.
     *
     * Generated from protobuf enum <code>CANCELED = 6;</code>
     */
    const CANCELED = 6;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ManagerLinkStatus::class, \Google\Ads\GoogleAds\V1\Enums\ManagerLinkStatusEnum_ManagerLinkStatus::class);
