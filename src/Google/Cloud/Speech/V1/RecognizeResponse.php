<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The only message returned to the client by the `Recognize` method. It
 * contains the result as zero or more sequential `SpeechRecognitionResult`
 * messages.
 *
 * Protobuf type <code>Google\Cloud\Speech\V1\RecognizeResponse</code>
 */
class RecognizeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * *Output-only* Sequential list of transcription results corresponding to
     * sequential portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechRecognitionResult results = 2;</code>
     */
    private $results;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * *Output-only* Sequential list of transcription results corresponding to
     * sequential portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechRecognitionResult results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * *Output-only* Sequential list of transcription results corresponding to
     * sequential portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechRecognitionResult results = 2;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setResults(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1\SpeechRecognitionResult::class);
        $this->results = $arr;
    }

}

