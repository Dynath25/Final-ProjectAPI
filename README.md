# API Documentation

## Allowed HTTP request

-   GET : To GET data from the API
-   POST : To send POST request to the API ( Create data )
-   PUT : To send PUT request to the API ( Update data )
-   DELETE : To delete data on the API

## Description Of Usual Server Responses

-   200 `OK` - Request was successful
-   404 `Not Found` - Requested data was not found

## Movies Attributes

-   id `BIGINT` : Unique identifier ( Primary Key )
-   book_name `varchar` : Book Name
-   description `varchar` : Book Description
-   category_id `BIGINT` : Book Category ( Foreign Key )

## MovieCategory Attributes

-   id `BIGINT` : Unique identifier ( Primary Key )
-   category `varchar` : Category Name

## 🔖 GET Method Example

### Getting all data
