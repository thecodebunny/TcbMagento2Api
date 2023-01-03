# QuoteDataCartInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Cart/quote ID. | 
**createdAt** | **string** | Cart creation date and time. Otherwise, null. | [optional] 
**updatedAt** | **string** | Cart last update date and time. Otherwise, null. | [optional] 
**convertedAt** | **string** | Cart conversion date and time. Otherwise, null. | [optional] 
**isActive** | **bool** | Active status flag value. Otherwise, null. | [optional] 
**isVirtual** | **bool** | Virtual flag value. Otherwise, null. | [optional] 
**items** | [**\TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface[]**](QuoteDataCartItemInterface.md) | Array of items. Otherwise, null. | [optional] 
**itemsCount** | **int** | Number of different items or products in the cart. Otherwise, null. | [optional] 
**itemsQty** | **float** | Total quantity of all cart items. Otherwise, null. | [optional] 
**customer** | [**\TheCodeBunny\Magento2Api\Model\CustomerDataCustomerInterface**](CustomerDataCustomerInterface.md) |  | 
**billingAddress** | [**\TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface**](QuoteDataAddressInterface.md) |  | [optional] 
**reservedOrderId** | **int** | Reserved order ID. Otherwise, null. | [optional] 
**origOrderId** | **int** | Original order ID. Otherwise, null. | [optional] 
**currency** | [**\TheCodeBunny\Magento2Api\Model\QuoteDataCurrencyInterface**](QuoteDataCurrencyInterface.md) |  | [optional] 
**customerIsGuest** | **bool** | For guest customers, false for logged in customers | [optional] 
**customerNote** | **string** | Notice text | [optional] 
**customerNoteNotify** | **bool** | Customer notification flag | [optional] 
**customerTaxClassId** | **int** | Customer tax class ID. | [optional] 
**storeId** | **int** | Store identifier | 
**extensionAttributes** | [**\TheCodeBunny\Magento2Api\Model\QuoteDataCartExtensionInterface**](QuoteDataCartExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


