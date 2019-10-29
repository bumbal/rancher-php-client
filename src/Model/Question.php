<?php

namespace Rancher\Model;

use \ArrayAccess;

class Question implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'default' => 'string',
        'description' => 'string',
        'group' => 'string',
        'invalidChars' => 'string',
        'label' => 'string',
        'max' => 'int',
        'maxLength' => 'int',
        'min' => 'int',
        'minLength' => 'int',
        'options' => 'string[]',
        'required' => 'boolean',
        'showIf' => 'string',
        'showSubquestionIf' => 'string',
        'subquestions' => '\Rancher\Model\SubQuestion[]',
        'type' => 'string',
        'validChars' => 'string',
        'variable' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'default' => 'setDefault',
        'description' => 'setDescription',
        'group' => 'setGroup',
        'invalidChars' => 'setInvalidChars',
        'label' => 'setLabel',
        'max' => 'setMax',
        'maxLength' => 'setMaxLength',
        'min' => 'setMin',
        'minLength' => 'setMinLength',
        'options' => 'setOptions',
        'required' => 'setRequired',
        'showIf' => 'setShowIf',
        'showSubquestionIf' => 'setShowSubquestionIf',
        'subquestions' => 'setSubquestions',
        'type' => 'setType',
        'validChars' => 'setValidChars',
        'variable' => 'setVariable',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'default' => 'getDefault',
        'description' => 'getDescription',
        'group' => 'getGroup',
        'invalidChars' => 'getInvalidChars',
        'label' => 'getLabel',
        'max' => 'getMax',
        'maxLength' => 'getMaxLength',
        'min' => 'getMin',
        'minLength' => 'getMinLength',
        'options' => 'getOptions',
        'required' => 'getRequired',
        'showIf' => 'getShowIf',
        'showSubquestionIf' => 'getShowSubquestionIf',
        'subquestions' => 'getSubquestions',
        'type' => 'getType',
        'validChars' => 'getValidChars',
        'variable' => 'getVariable',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['invalidChars'] = isset($data['invalidChars']) ? $data['invalidChars'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['showIf'] = isset($data['showIf']) ? $data['showIf'] : null;
        $this->container['showSubquestionIf'] = isset($data['showSubquestionIf']) ? $data['showSubquestionIf'] : null;
        $this->container['subquestions'] = isset($data['subquestions']) ? $data['subquestions'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['validChars'] = isset($data['validChars']) ? $data['validChars'] : null;
        $this->container['variable'] = isset($data['variable']) ? $data['variable'] : null;
    }

    /**
     * Gets default
     * @return string
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     * @param string $default
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
     * Gets group
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     * @param string $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

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
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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
     * Gets showIf
     * @return string
     */
    public function getShowIf()
    {
        return $this->container['showIf'];
    }

    /**
     * Sets showIf
     * @param string $showIf
     * @return $this
     */
    public function setShowIf($showIf)
    {
        $this->container['showIf'] = $showIf;

        return $this;
    }


    /**
     * Gets showSubquestionIf
     * @return string
     */
    public function getShowSubquestionIf()
    {
        return $this->container['showSubquestionIf'];
    }

    /**
     * Sets showSubquestionIf
     * @param string $showSubquestionIf
     * @return $this
     */
    public function setShowSubquestionIf($showSubquestionIf)
    {
        $this->container['showSubquestionIf'] = $showSubquestionIf;

        return $this;
    }


    /**
     * Gets subquestions
     * @return \Rancher\Model\SubQuestion[]
     */
    public function getSubquestions()
    {
        return $this->container['subquestions'];
    }

    /**
     * Sets subquestions
     * @param \Rancher\Model\SubQuestion[] $subquestions
     * @return $this
     */
    public function setSubquestions($subquestions)
    {
        $this->container['subquestions'] = $subquestions;

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
     * Gets variable
     * @return string
     */
    public function getVariable()
    {
        return $this->container['variable'];
    }

    /**
     * Sets variable
     * @param string $variable
     * @return $this
     */
    public function setVariable($variable)
    {
        $this->container['variable'] = $variable;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

