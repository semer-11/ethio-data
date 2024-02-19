# Ethiopian Data API

The Ethiopian Data API provides access to a wide range of data related to Ethiopia. It offers information on Ethiopian names, woredas , cities, and more. This API is designed to be user-friendly and flexible, allowing users to retrieve specific data points or explore the entire dataset.

## Features

- Retrieve Ethiopian names with details such as gender,religion.
- Access information on Ethiopian woredas including names, regions.
- Get data on Ethiopian cities with details like population, region.
- Filter data based on specific criteria using key-value pairs.
- Customize the response by selecting specific fields to retrieve.


## API Documentation

For detailed information on available endpoints, request methods, and response formats, please refer to the [API Documentation](https://api.mesob.menu/docs/api).

## Examples

Here are an examples of how you can use the Ethiopian Data API:

```javascript
// Filter Ethiopian cities by region
fetch('/api/city', {
  method: 'POST',
  body: JSON.stringify({ region: 'Addis Ababa' }),
  headers: { 'Content-Type': 'application/json' }
})
.then(response => response.json())
.then(data => console.log(data));

```

# Contributions
Contributions to the Ethiopian Data API are welcome! If you have any suggestions, bug reports, or feature requests, please open an issue or submit a pull request. [Read More here](https://github.com/semer-11/ethio-data/blob/main/CONTRIBUTING.md)

# License
This project is licensed under the MIT License.

