# EntityExtractionResponseAnnotation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the linked Wikipedia resource | [optional] 
**title** | **string** | Title of the linked Wikipedia resource | [optional] 
**uri** | **string** | URL of the entity on Wikipedia | [optional] 
**label** | **string** | Most common name used to represent the resource | [optional] 
**confidence** | **float** | Value of confidence for this annotation | [optional] 
**spot** | **string** | Annotated string, as it is in the input text | [optional] 
**start** | **int** | Character position in the input text where the annotation begins | [optional] 
**end** | **int** | Character position in the input text where the annotation ends | [optional] 
**types** | **string[]** | List of types of the linked DBpedia resource. Only if \&quot;include\&quot; parameter contains \&quot;types\&quot; | [optional] 
**categories** | **string[]** | List of the category of the linked DBpedia resource\&quot;, Only if &#39;include&#39; parameter contains &#39;categories&#39; | [optional] 
**abstract** | **string** | Abstract of the linked Wikipedia resource. Only if &#39;include&#39; parameter contains ­&#39;abstract&#39; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


