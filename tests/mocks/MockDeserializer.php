<?php

namespace mocks;

require_once(dirname(dirname(dirname(__FILE__))) . '/src/smartystreets/api/Serializer.php');
use smartystreets\api\Serializer;

class MockDeserializer implements Serializer {
    private $deserialized,
            $payload;

    public function __construct($deserialized) {
        $this->deserialized = $deserialized;
    }

    public function serialize($obj, $classType) {
        return "[]";
    }

    public function deserialize($payload, $classType) {
        $this->payload = $payload;
        return $this->deserialized;
    }

    public function getPayload() {
        return $this->payload;
    }

}