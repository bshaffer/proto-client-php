<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v1/trace.proto

namespace Google\Devtools\Cloudtrace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List of new or updated traces.
 *
 * Protobuf type <code>Google\Devtools\Cloudtrace\V1\Traces</code>
 */
class Traces extends \Google\Protobuf\Internal\Message
{
    /**
     * List of traces.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v1.Trace traces = 1;</code>
     */
    private $traces;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudtrace\V1\Trace::initOnce();
        parent::__construct();
    }

    /**
     * List of traces.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v1.Trace traces = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTraces()
    {
        return $this->traces;
    }

    /**
     * List of traces.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v1.Trace traces = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setTraces(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudtrace\V1\Trace::class);
        $this->traces = $arr;
    }

}

