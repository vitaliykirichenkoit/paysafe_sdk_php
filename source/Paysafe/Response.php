<?php

namespace Paysafe;

/**
 * @property array $headers
 * @property string|null $content
 * @property int $statusCode
 */
class Response
{
    /**
     * Stores the data to be returned by the paysafe api client.
     *
     * @var array
     */
    protected $response = array(
        'headers' => array(),
        'content' => null,
        'statusCode' => null,
    );

    /**
     * Initialize the response.
     *
     * @param array $options
     * @throws PaysafeException
     */
    public function __construct($options)
    {
        if(is_array($options)) {
            if (array_diff_key($options, $this->response)) {
                throw new PaysafeException('Invalid response parameters. Expected only ' . join(', ', array_keys($this->response)));
            }

            foreach ($options as $key => $val) {
                $this->$key = $val;
            }
        } else {
            $this->response['content'] = $options;
        }
    }

    /**
     * Magic getter for headers/content.
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->response)) {
            return $this->response[$name];
        }
    }

    /**
     * Magic setter for headers/content.
     *
     * @param string $name
     * @param mixed $value
     * @throws PaysafeException
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->response)) {
            switch ($name) {
                case 'content':
                    if (!is_string($value) && !is_null($value)) {
                        throw new PaysafeException('Invalid parameter content. String or Null expected.');
                    }
                    break;
                case 'headers':
                    if (!is_array($value)) {
                        throw new PaysafeException('Invalid parameter headers. Array expected.');
                    }
                    break;
            }
            $this->response[$name] = $value;
        }
    }

    /**
     * Magic isseter for headers/content.
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->response[$name]);
    }
}
