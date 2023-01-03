<?php
/**
 * CatalogDataProductInterface
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
 * CatalogDataProductInterface Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     TheCodeBunny\Swagger\Magento2\Client
 * @author      Hemang Vyas (TheCodeBunny)
 * @link        https://github.com/thecodebunny/TcbMagento2Api.git
 */
class CatalogDataProductInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-product-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'sku' => 'string',
        'name' => 'string',
        'attributeSetId' => 'int',
        'price' => 'float',
        'status' => 'int',
        'visibility' => 'int',
        'typeId' => 'string',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'weight' => 'float',
        'extensionAttributes' => '\TheCodeBunny\Magento2Api\Model\CatalogDataProductExtensionInterface',
        'productLinks' => '\TheCodeBunny\Magento2Api\Model\CatalogDataProductLinkInterface[]',
        'options' => '\TheCodeBunny\Magento2Api\Model\CatalogDataProductCustomOptionInterface[]',
        'mediaGalleryEntries' => '\TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]',
        'tierPrices' => '\TheCodeBunny\Magento2Api\Model\CatalogDataProductTierPriceInterface[]',
        'customAttributes' => '\TheCodeBunny\Magento2Api\Model\FrameworkAttributeInterface[]'
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
        'id' => 'id',
        'sku' => 'sku',
        'name' => 'name',
        'attributeSetId' => 'attribute_set_id',
        'price' => 'price',
        'status' => 'status',
        'visibility' => 'visibility',
        'typeId' => 'type_id',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'weight' => 'weight',
        'extensionAttributes' => 'extension_attributes',
        'productLinks' => 'product_links',
        'options' => 'options',
        'mediaGalleryEntries' => 'media_gallery_entries',
        'tierPrices' => 'tier_prices',
        'customAttributes' => 'custom_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku' => 'setSku',
        'name' => 'setName',
        'attributeSetId' => 'setAttributeSetId',
        'price' => 'setPrice',
        'status' => 'setStatus',
        'visibility' => 'setVisibility',
        'typeId' => 'setTypeId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'weight' => 'setWeight',
        'extensionAttributes' => 'setExtensionAttributes',
        'productLinks' => 'setProductLinks',
        'options' => 'setOptions',
        'mediaGalleryEntries' => 'setMediaGalleryEntries',
        'tierPrices' => 'setTierPrices',
        'customAttributes' => 'setCustomAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku' => 'getSku',
        'name' => 'getName',
        'attributeSetId' => 'getAttributeSetId',
        'price' => 'getPrice',
        'status' => 'getStatus',
        'visibility' => 'getVisibility',
        'typeId' => 'getTypeId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'weight' => 'getWeight',
        'extensionAttributes' => 'getExtensionAttributes',
        'productLinks' => 'getProductLinks',
        'options' => 'getOptions',
        'mediaGalleryEntries' => 'getMediaGalleryEntries',
        'tierPrices' => 'getTierPrices',
        'customAttributes' => 'getCustomAttributes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['attributeSetId'] = isset($data['attributeSetId']) ? $data['attributeSetId'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['productLinks'] = isset($data['productLinks']) ? $data['productLinks'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['mediaGalleryEntries'] = isset($data['mediaGalleryEntries']) ? $data['mediaGalleryEntries'] : null;
        $this->container['tierPrices'] = isset($data['tierPrices']) ? $data['tierPrices'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['sku'] === null) {
            $invalid_properties[] = "'sku' can't be null";
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

        if ($this->container['sku'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku Sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets attributeSetId
     * @return int
     */
    public function getAttributeSetId()
    {
        return $this->container['attributeSetId'];
    }

    /**
     * Sets attributeSetId
     * @param int $attributeSetId Attribute set id
     * @return $this
     */
    public function setAttributeSetId($attributeSetId)
    {
        $this->container['attributeSetId'] = $attributeSetId;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price Price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param int $status Status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets visibility
     * @return int
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     * @param int $visibility Visibility
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets typeId
     * @return string
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     * @param string $typeId Type id
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

        return $this;
    }

    /**
     * Gets createdAt
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     * @param string $createdAt Created date
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     * @param string $updatedAt Updated date
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets weight
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param float $weight Weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \TheCodeBunny\Magento2Api\Model\CatalogDataProductExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \TheCodeBunny\Magento2Api\Model\CatalogDataProductExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets productLinks
     * @return \TheCodeBunny\Magento2Api\Model\CatalogDataProductLinkInterface[]
     */
    public function getProductLinks()
    {
        return $this->container['productLinks'];
    }

    /**
     * Sets productLinks
     * @param \TheCodeBunny\Magento2Api\Model\CatalogDataProductLinkInterface[] $productLinks Product links info
     * @return $this
     */
    public function setProductLinks($productLinks)
    {
        $this->container['productLinks'] = $productLinks;

        return $this;
    }

    /**
     * Gets options
     * @return \TheCodeBunny\Magento2Api\Model\CatalogDataProductCustomOptionInterface[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \TheCodeBunny\Magento2Api\Model\CatalogDataProductCustomOptionInterface[] $options List of product options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets mediaGalleryEntries
     * @return \TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]
     */
    public function getMediaGalleryEntries()
    {
        return $this->container['mediaGalleryEntries'];
    }

    /**
     * Sets mediaGalleryEntries
     * @param \TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[] $mediaGalleryEntries Media gallery entries
     * @return $this
     */
    public function setMediaGalleryEntries($mediaGalleryEntries)
    {
        $this->container['mediaGalleryEntries'] = $mediaGalleryEntries;

        return $this;
    }

    /**
     * Gets tierPrices
     * @return \TheCodeBunny\Magento2Api\Model\CatalogDataProductTierPriceInterface[]
     */
    public function getTierPrices()
    {
        return $this->container['tierPrices'];
    }

    /**
     * Sets tierPrices
     * @param \TheCodeBunny\Magento2Api\Model\CatalogDataProductTierPriceInterface[] $tierPrices List of product tier prices
     * @return $this
     */
    public function setTierPrices($tierPrices)
    {
        $this->container['tierPrices'] = $tierPrices;

        return $this;
    }

    /**
     * Gets customAttributes
     * @return \TheCodeBunny\Magento2Api\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
     * Sets customAttributes
     * @param \TheCodeBunny\Magento2Api\Model\FrameworkAttributeInterface[] $customAttributes Custom attributes values.
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;

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


