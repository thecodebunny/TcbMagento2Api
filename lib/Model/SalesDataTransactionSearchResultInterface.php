<?php
/**
 * SalesDataTransactionSearchResultInterface
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
 * SalesDataTransactionSearchResultInterface Class Doc Comment
 *
 * @category    Class
 * @description Transaction search result interface. A transaction is an interaction between a merchant and a customer such as a purchase, a credit, a refund, and so on.
 * @package     TheCodeBunny\Swagger\Magento2\Client
 * @author      Hemang Vyas (TheCodeBunny)
 * @link        https://github.com/thecodebunny/TcbMagento2Api.git
 */
class SalesDataTransactionSearchResultInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-transaction-search-result-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'items' => '\TheCodeBunny\Magento2Api\Model\SalesDataTransactionInterface[]',
        'searchCriteria' => '\TheCodeBunny\Magento2Api\Model\FrameworkSearchCriteriaInterface',
        'totalCount' => 'int'
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
        'items' => 'items',
        'searchCriteria' => 'search_criteria',
        'totalCount' => 'total_count'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'items' => 'setItems',
        'searchCriteria' => 'setSearchCriteria',
        'totalCount' => 'setTotalCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'items' => 'getItems',
        'searchCriteria' => 'getSearchCriteria',
        'totalCount' => 'getTotalCount'
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
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['searchCriteria'] = isset($data['searchCriteria']) ? $data['searchCriteria'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['items'] === null) {
            $invalid_properties[] = "'items' can't be null";
        }
        if ($this->container['searchCriteria'] === null) {
            $invalid_properties[] = "'searchCriteria' can't be null";
        }
        if ($this->container['totalCount'] === null) {
            $invalid_properties[] = "'totalCount' can't be null";
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

        if ($this->container['items'] === null) {
            return false;
        }
        if ($this->container['searchCriteria'] === null) {
            return false;
        }
        if ($this->container['totalCount'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets items
     * @return \TheCodeBunny\Magento2Api\Model\SalesDataTransactionInterface[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \TheCodeBunny\Magento2Api\Model\SalesDataTransactionInterface[] $items Array of collection items.
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets searchCriteria
     * @return \TheCodeBunny\Magento2Api\Model\FrameworkSearchCriteriaInterface
     */
    public function getSearchCriteria()
    {
        return $this->container['searchCriteria'];
    }

    /**
     * Sets searchCriteria
     * @param \TheCodeBunny\Magento2Api\Model\FrameworkSearchCriteriaInterface $searchCriteria
     * @return $this
     */
    public function setSearchCriteria($searchCriteria)
    {
        $this->container['searchCriteria'] = $searchCriteria;

        return $this;
    }

    /**
     * Gets totalCount
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     * @param int $totalCount Total count.
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;

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


