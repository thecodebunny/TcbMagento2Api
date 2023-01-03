<?php
/**
 * BundleDataBundleOptionInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  TheCodeBunny\Swagger\Magento2\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/thecodebunny/TcbMagento2Api.git
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/thecodebunny/TcbMagento2Api.git)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/thecodebunny/TcbMagento2Api.git.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/thecodebunny/TcbMagento2Api.git
 * Do not edit the class manually.
 */

namespace TheCodeBunny\Magento2Api\Model;

use \ArrayAccess;

/**
 * BundleDataBundleOptionInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface BundleOptionInterface
 * @package     TheCodeBunny\Swagger\Magento2\Client
 * @author      Hemang Vyas (TheCodeBunny)
 * @link        https://github.com/thecodebunny/TcbMagento2Api.git
 */
class BundleDataBundleOptionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'bundle-data-bundle-option-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'optionId' => 'int',
        'optionQty' => 'int',
        'optionSelections' => 'int[]',
        'extensionAttributes' => '\TheCodeBunny\Magento2Api\Model\BundleDataBundleOptionExtensionInterface'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'optionId' => 'option_id',
        'optionQty' => 'option_qty',
        'optionSelections' => 'option_selections',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'optionId' => 'setOptionId',
        'optionQty' => 'setOptionQty',
        'optionSelections' => 'setOptionSelections',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'optionId' => 'getOptionId',
        'optionQty' => 'getOptionQty',
        'optionSelections' => 'getOptionSelections',
        'extensionAttributes' => 'getExtensionAttributes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['optionId'] = isset($data['optionId']) ? $data['optionId'] : null;
        $this->container['optionQty'] = isset($data['optionQty']) ? $data['optionQty'] : null;
        $this->container['optionSelections'] = isset($data['optionSelections']) ? $data['optionSelections'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['optionId'] === null) {
            $invalid_properties[] = "'optionId' can't be null";
        }
        if ($this->container['optionQty'] === null) {
            $invalid_properties[] = "'optionQty' can't be null";
        }
        if ($this->container['optionSelections'] === null) {
            $invalid_properties[] = "'optionSelections' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['optionId'] === null) {
            return false;
        }
        if ($this->container['optionQty'] === null) {
            return false;
        }
        if ($this->container['optionSelections'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets optionId
     * @return int
     */
    public function getOptionId()
    {
        return $this->container['optionId'];
    }

    /**
     * Sets optionId
     * @param int $optionId Bundle option id.
     * @return $this
     */
    public function setOptionId($optionId)
    {
        $this->container['optionId'] = $optionId;

        return $this;
    }

    /**
     * Gets optionQty
     * @return int
     */
    public function getOptionQty()
    {
        return $this->container['optionQty'];
    }

    /**
     * Sets optionQty
     * @param int $optionQty Bundle option quantity.
     * @return $this
     */
    public function setOptionQty($optionQty)
    {
        $this->container['optionQty'] = $optionQty;

        return $this;
    }

    /**
     * Gets optionSelections
     * @return int[]
     */
    public function getOptionSelections()
    {
        return $this->container['optionSelections'];
    }

    /**
     * Sets optionSelections
     * @param int[] $optionSelections Bundle option selection ids.
     * @return $this
     */
    public function setOptionSelections($optionSelections)
    {
        $this->container['optionSelections'] = $optionSelections;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \TheCodeBunny\Magento2Api\Model\BundleDataBundleOptionExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \TheCodeBunny\Magento2Api\Model\BundleDataBundleOptionExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

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

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\TheCodeBunny\Magento2Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\TheCodeBunny\Magento2Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}


