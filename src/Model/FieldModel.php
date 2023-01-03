<?php

/**
 * FieldModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class FieldModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    /**
     * Properties that can be created
     *
     * @var array
     */
    protected static $canBeCreated = [
        'create',
        'default',
        'description',
        'dynamicField',
        'invalidChars',
        'max',
        'maxLength',
        'min',
        'minLength',
        'nullable',
        'options',
        'required',
        'type',
        'unique',
        'update',
        'validChars',
    ];

    public static function canBeCreated()
    {
        return self::$canBeCreated;
    }

    /**
     * Properties that can be updated
     *
     * @var array
     */
    protected static $canBeUpdated = [
        'create',
        'default',
        'description',
        'dynamicField',
        'invalidChars',
        'max',
        'maxLength',
        'min',
        'minLength',
        'nullable',
        'options',
        'required',
        'type',
        'unique',
        'update',
        'validChars',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'create' => 'boolean',
        'default' => '\Rancher\Model\ValuesModel',
        'description' => 'string',
        'dynamicField' => 'boolean',
        'invalidChars' => 'string',
        'max' => 'int',
        'maxLength' => 'int',
        'min' => 'int',
        'minLength' => 'int',
        'nullable' => 'boolean',
        'options' => 'string[]',
        'required' => 'boolean',
        'type' => 'string',
        'unique' => 'boolean',
        'update' => 'boolean',
        'validChars' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'create' => 'setCreate',
        'default' => 'setDefault',
        'description' => 'setDescription',
        'dynamicField' => 'setDynamicField',
        'invalidChars' => 'setInvalidChars',
        'max' => 'setMax',
        'maxLength' => 'setMaxLength',
        'min' => 'setMin',
        'minLength' => 'setMinLength',
        'nullable' => 'setNullable',
        'options' => 'setOptions',
        'required' => 'setRequired',
        'type' => 'setType',
        'unique' => 'setUnique',
        'update' => 'setUpdate',
        'validChars' => 'setValidChars',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'create' => 'getCreate',
        'default' => 'getDefault',
        'description' => 'getDescription',
        'dynamicField' => 'getDynamicField',
        'invalidChars' => 'getInvalidChars',
        'max' => 'getMax',
        'maxLength' => 'getMaxLength',
        'min' => 'getMin',
        'minLength' => 'getMinLength',
        'nullable' => 'getNullable',
        'options' => 'getOptions',
        'required' => 'getRequired',
        'type' => 'getType',
        'unique' => 'getUnique',
        'update' => 'getUpdate',
        'validChars' => 'getValidChars',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['create'] = isset($data['create']) ? $data['create'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dynamicField'] = isset($data['dynamicField']) ? $data['dynamicField'] : null;
        $this->container['invalidChars'] = isset($data['invalidChars']) ? $data['invalidChars'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
        $this->container['nullable'] = isset($data['nullable']) ? $data['nullable'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unique'] = isset($data['unique']) ? $data['unique'] : null;
        $this->container['update'] = isset($data['update']) ? $data['update'] : null;
        $this->container['validChars'] = isset($data['validChars']) ? $data['validChars'] : null;
    }

    /**
     * Gets create
     * @return boolean
     */
    public function getCreate()
    {
        return $this->container['create'];
    }

    /**
     * Sets create
     * @param boolean $create
     * @return $this
     */
    public function setCreate($create)
    {
        $this->container['create'] = $create;

        return $this;
    }


    /**
     * Gets default
     * @return \Rancher\Model\ValuesModel
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     * @param \Rancher\Model\ValuesModel $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }


    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets dynamicField
     * @return boolean
     */
    public function getDynamicField()
    {
        return $this->container['dynamicField'];
    }

    /**
     * Sets dynamicField
     * @param boolean $dynamicField
     * @return $this
     */
    public function setDynamicField($dynamicField)
    {
        $this->container['dynamicField'] = $dynamicField;

        return $this;
    }


    /**
     * Gets invalidChars
     * @return string
     */
    public function getInvalidChars()
    {
        return $this->container['invalidChars'];
    }

    /**
     * Sets invalidChars
     * @param string $invalidChars
     * @return $this
     */
    public function setInvalidChars($invalidChars)
    {
        $this->container['invalidChars'] = $invalidChars;

        return $this;
    }


    /**
     * Gets max
     * @return int
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     * @param int $max
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }


    /**
     * Gets maxLength
     * @return int
     */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
     * Sets maxLength
     * @param int $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;

        return $this;
    }


    /**
     * Gets min
     * @return int
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     * @param int $min
     * @return $this
     */
    public function setMin($min)
    {
        $this->container['min'] = $min;

        return $this;
    }


    /**
     * Gets minLength
     * @return int
     */
    public function getMinLength()
    {
        return $this->container['minLength'];
    }

    /**
     * Sets minLength
     * @param int $minLength
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->container['minLength'] = $minLength;

        return $this;
    }


    /**
     * Gets nullable
     * @return boolean
     */
    public function getNullable()
    {
        return $this->container['nullable'];
    }

    /**
     * Sets nullable
     * @param boolean $nullable
     * @return $this
     */
    public function setNullable($nullable)
    {
        $this->container['nullable'] = $nullable;

        return $this;
    }


    /**
     * Gets options
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param string[] $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }


    /**
     * Gets required
     * @return boolean
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param boolean $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }


    /**
     * Gets unique
     * @return boolean
     */
    public function getUnique()
    {
        return $this->container['unique'];
    }

    /**
     * Sets unique
     * @param boolean $unique
     * @return $this
     */
    public function setUnique($unique)
    {
        $this->container['unique'] = $unique;

        return $this;
    }


    /**
     * Gets update
     * @return boolean
     */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
     * Sets update
     * @param boolean $update
     * @return $this
     */
    public function setUpdate($update)
    {
        $this->container['update'] = $update;

        return $this;
    }


    /**
     * Gets validChars
     * @return string
     */
    public function getValidChars()
    {
        return $this->container['validChars'];
    }

    /**
     * Sets validChars
     * @param string $validChars
     * @return $this
     */
    public function setValidChars($validChars)
    {
        $this->container['validChars'] = $validChars;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

