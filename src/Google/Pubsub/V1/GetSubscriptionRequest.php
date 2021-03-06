<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the GetSubscription method.
 *
 * Protobuf type <code>Google\Pubsub\V1\GetSubscriptionRequest</code>
 */
class GetSubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the subscription to get.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     */
    private $subscription = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The name of the subscription to get.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * The name of the subscription to get.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @param string $var
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;
    }

}

