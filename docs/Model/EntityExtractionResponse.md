# EntityExtractionResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | [**\DateTime**](\DateTime.md) | Date and time of the response generation process | [optional] 
**time** | **int** | Time elapsed for generating the response (milliseconds) | [optional] 
**lang** | **string** | The language used to tag the input text | [optional] 
**lang_confidence** | **float** | Accuracy of the language detection, from 0.0 to 1.0. Present only if auto-detection is on | [optional] 
**text** | **string** | The annotated text. Present only if the &#39;url&#39; or &#39;html&#39; parameters have been used | [optional] 
**url** | **string** | The actual URL from which the text has been extracted. Present only if the &#39;url&#39; parameter has been used | [optional] 
**annotations** | [**\DandelionPHP\Model\EntityExtractionResponseAnnotation[]**](EntityExtractionResponseAnnotation.md) |  | [optional] 
**top_entities** | [**\DandelionPHP\Model\EntityExtractionResponseTopEntity[]**](EntityExtractionResponseTopEntity.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


