<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `GetGroup` request.
 *
 * Protobuf type <code>Google\Monitoring\V3\GetGroupRequest</code>
 */
class GetGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The group to retrieve. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct();
    }

    /**
     * The group to retrieve. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The group to retrieve. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}

