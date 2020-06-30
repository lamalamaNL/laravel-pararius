<?php

namespace LamaLama\Pararius;

use Spatie\ArrayToXml\ArrayToXml;

class Feed
{
    /**
     * $properties
     * @var array
     */
    private $properties;

    /**
     * setProperties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * Xml.
     *
     * @return void
     */
    public function xml()
    {
        $result = ArrayToXml::convert($this->properties, [
            'rootElementName' => 'housing',
            '_attributes' => [
                'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            ],
        ], true, 'UTF-8');

        return response($result, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }

    private function example()
    {


    }
}
