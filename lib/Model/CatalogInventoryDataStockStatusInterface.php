<?php
/**
 * CatalogInventoryDataStockStatusInterface
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
 * CatalogInventoryDataStockStatusInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface StockStatusInterface
 * @package     TheCodeBunny\Swagger\Magento2\Client
 * @author      Hemang Vyas (TheCodeBunny)
 * @link        https://github.com/thecodebunny/TcbMagento2Api.git
 */
class CatalogInventoryDataStockStatusInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-inventory-data-stock-status-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productId' => 'int',
        'stockId' => 'int',
        'qty' => 'int',
        'stockStatus' => 'int',
        'stockItem' => '\TheCodeBunny\Magento2Api\Model\CatalogInventoryDataStockItemInterface',
        'extensionAttributes' => '\TheCodeBunny\Magento2Api\Model\CatalogInventoryDataStockStatusExtensionInterface'
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
        'productId' => 'product_id',
        'stockId' => 'stock_id',
        'qty' => 'qty',
        'stockStatus' => 'stock_status',
        'stockItem' => 'stock_item',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'productId' => 'setProductId',
        'stockId' => 'setStockId',
        'qty' => 'setQty',
        'stockStatus' => 'setStockStatus',
        'stockItem' => 'setStockItem',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'productId' => 'getProductId',
        'stockId' => 'getStockId',
        'qty' => 'getQty',
        'stockStatus' => 'getStockStatus',
        'stockItem' => 'getStockItem',
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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['stockId'] = isset($data['stockId']) ? $data['stockId'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['stockStatus'] = isset($data['stockStatus']) ? $data['stockStatus'] : null;
        $this->container['stockItem'] = isset($data['stockItem']) ? $data['stockItem'] : null;
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

        if ($this->container['productId'] === null) {
            $invalid_properties[] = "'productId' can't be null";
        }
        if ($this->container['stockId'] === null) {
            $invalid_properties[] = "'stockId' can't be null";
        }
        if ($this->container['qty'] === null) {
            $invalid_properties[] = "'qty' can't be null";
        }
        if ($this->container['stockStatus'] === null) {
            $invalid_properties[] = "'stockStatus' can't be null";
        }
        if ($this->container['stockItem'] === null) {
            $invalid_properties[] = "'stockItem' can't be null";
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

        if ($this->container['productId'] === null) {
            return false;
        }
        if ($this->container['stockId'] === null) {
            return false;
        }
        if ($this->container['qty'] === null) {
            return false;
        }
        if ($this->container['stockStatus'] === null) {
            return false;
        }
        if ($this->container['stockItem'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets productId
     * @return int
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets stockId
     * @return int
     */
    public function getStockId()
    {
        return $this->container['stockId'];
    }

    /**
     * Sets stockId
     * @param int $stockId
     * @return $this
     */
    public function setStockId($stockId)
    {
        $this->container['stockId'] = $stockId;

        return $this;
    }

    /**
     * Gets qty
     * @return int
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     * @param int $qty
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets stockStatus
     * @return int
     */
    public function getStockStatus()
    {
        return $this->container['stockStatus'];
    }

    /**
     * Sets stockStatus
     * @param int $stockStatus
     * @return $this
     */
    public function setStockStatus($stockStatus)
    {
        $this->container['stockStatus'] = $stockStatus;

        return $this;
    }

    /**
     * Gets stockItem
     * @return \TheCodeBunny\Magento2Api\Model\CatalogInventoryDataStockItemInterface
     */
    public function getStockItem()
    {
        return $this->container['stockItem'];
    }

    /**
     * Sets stockItem
     * @param \TheCodeBunny\Magento2Api\Model\CatalogInventoryDataStockItemInterface $stockItem
     * @return $this
     */
    public function setStockItem($stockItem)
    {
        $this->container['stockItem'] = $stockItem;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \TheCodeBunny\Magento2Api\Model\CatalogInventoryDataStockStatusExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \TheCodeBunny\Magento2Api\Model\CatalogInventoryDataStockStatusExtensionInterface $extensionAttributes
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


