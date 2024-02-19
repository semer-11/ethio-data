<?php



function filterable($table)
{
    return config('data')[$table];
}

function keys($table)
{
    $columns = config('data')[$table];
    return implode(",", $columns);
}

function doc()
{
    return '
    # API Documentation

## Introduction

This API provides data for various categories related to Ethiopia.

## Available Data Categories

The API currently supports the following data categories:

1. Ethiopian Names
2. Ethiopian Woredas
3. Ethiopian Cities
4. Ethiopian Banks
5.Celebrity(Under Development)

More categories will be added in the future. 

## Endpoints

### Ethiopian Names

#### Retrieve Names
Retrieves a list of  Ethiopian names 1 being the default but you can make it up to 10 records by sending limit:value body on your request. By default, it returns all available columns for each name. you can limit the columns returned by sending a fields array containing the names of the desired columns. You can also apply filtering by sending key-value pairs, where the key represents the column name to filter on. If no filter is provided, the response will include a random selection of rows from the database.

- Method: POST
- Endpoint: `/name`
- Response format: JSON
- Example response:
```json
{
    "status": "success",
    "data": [
      {
        "id": 222,
        "first_name": "Bereket",
        "middle_name": "Refiq",
        "last_name": "Baqir",
        "gender": "Male",
        "religion": "Islam",
        "lang": "en"
      }
    ]
}
  ```
### Ethiopian Woredas

#### Retrieve Woredas
Retrieves a list of  Ethiopian woredas 1 being the default but you can make it up to 10 records by sending limit:value body on your request. By default, it returns all available columns for each name. you can limit the columns returned by sending a fields array containing the names of the desired columns. You can also apply filtering by sending key-value pairs, where the key represents the column name to filter on. If no filter is provided, the response will include a random selection of rows from the database.

- Method: POST
- Endpoint: `/woreda`
- Response format: JSON
- Example response:
```json
{
    "status": "success",
    "data": [
      {
        "id": 63,
        "name": "Awash Fentale Wereda ",
        "zone": "Zone 3",
        "region": "AFFAR ",
        "country": "Ethiopia",
        "lang": "en"
      }
    ]
  }
  ```
### Ethiopian Cities

#### Retrieve Cities
Retrieves a list of  Ethiopian cities 1 being the default but you can make it up to 10 records by sending limit:value body on your request. By default, it returns all available columns for each name. you can limit the columns returned by sending a fields array containing the names of the desired columns. You can also apply filtering by sending key-value pairs, where the key represents the column name to filter on. If no filter is provided, the response will include a random selection of rows from the database.

- Method: POST
- Endpoint: `/city`
- Response format: JSON
- Example response:
```json
{
    "status": "success",
    "data": [
      {
        "id": 35,
        "name": "Dila",
        "region": "South Ethiopia",
        "country": "Ethiopia",
        "lang": "en"
      }
    ]
  }
```
### Ethiopian Celebrity

#### Retrieve Celebrity
Retrieves a list of  Ethiopian Celebrity 1 being the default but you can make it up to 10 records by sending limit:value body on your request. By default, it returns all available columns for each name. you can limit the columns returned by sending a fields array containing the names of the desired columns. You can also apply filtering by sending key-value pairs, where the key represents the column name to filter on. If no filter is provided, the response will include a random selection of rows from the database.

- Method: POST
- Endpoint: `/celebrity`
- Response format: JSON
- Example response:
```json
{
    "status": "success",
    "data": [
      {
        "id": 3,
        "name": "Rophnan Nuri",
        "industry": "Music",
        "gender": "male",
        "social_links": {
          "instagram": "https://www.instagram.com/rophnan/",
          "facebook": "https://www.facebook.com/RophnanOfficial",
          "tiktok": "https://vm.tiktok.com/ZM6VxtCTb/",
          "telegram": "https://t.me/rophnan",
          "website": "https://rophnan.com"
        },
        "image": "https://www.okayafrica.com/media-library/image.jpg?id=30180747",
        "lang": "en"
      }
    ]
  }
  ```
### Ethiopian Bank

#### Retrieve Bank
Retrieves a list of  Ethiopian banks, 1 being the default but you can make it up to 10 records by sending limit:value body on your request. By default, it returns all available columns for each name. you can limit the columns returned by sending a fields array containing the names of the desired columns. You can also apply filtering by sending key-value pairs, where the key represents the column name to filter on. If no filter is provided, the response will include a random selection of rows from the database.

- Method: POST
- Endpoint: `/bank`
- Response format: JSON
- Example response:
```json
{
    "status": "success",
    "data": [
      {
        "id": 52,
        "name": "ዘመን ባንክ ",
        "region": "አዲስ አበባ",
        "saving_interest": "7%",
        "contact": "+251 115539040",
        "head_quarter": "ራስ አበበ አረጋይ ጎዳና፣ አዲስ አበባ፣ ኢትዮጵያ",
        "social_links": {
          "website": "https://www.zemenbank.com/",
          "facebook": "https://www.facebook.com/ZemenBankEthiopia/",
          "telegram": "https://t.me/zemen_bank0",
          "instagram": "https://www.instagram.com/zemenbankofficial/",
          "tiktok": "https://www.tiktok.com/@zemenbankofficial",
          "twitter": "https://twitter.com/s_zemen"
        },
        "lang": "am"
      }
    ]
  }
  ```
### Follow me on <p style="display:flex;align-items:center;"> <img style="width:20px; height:20px; border-radius:50% margin-top:15px; margin-right:5px;" src="/img/telegram.png"/> [SEMER NUR](https://t.me/semer_nur)</p>
    ';
}
