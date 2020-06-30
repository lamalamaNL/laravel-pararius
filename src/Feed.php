<?php

namespace LamaLama\Pararius;

use Spatie\ArrayToXml\ArrayToXml;

class Feed
{
    /**
     * $properties.
     * @var array
     */
    private $properties;

    /**
     * setProperties
     * @param array $properties
     */
    public function setProperties(array $properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * Xml.
     *
     * @return void
     */
    public function xmlResponse()
    {
        $xml = ArrayToXml::convert($this->properties, [
            'rootElementName' => 'housing',
            '_attributes' => [
                'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            ],
        ], true, 'UTF-8');

        return response($xml, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
