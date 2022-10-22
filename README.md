# Search Nested JSON Database Column

This package enables you make search inside nested json column in a database without case sensitivity.

## Installation

You can install the package via composer:

```composer require boadusamuel/search-nested-json-column ```

## Usage

After installing the package, you can use the trait in your model like so:

``` 
use Boadusamuel\SearchNestedJsonColumn\SearchNestedJsonColumn; 

class Product extends Model { use SearchNestedJsonColumn; } 
```
Then you can use the search method like so:
```
Product::query()->when($search, function (Builder $query) use ($search) {
    $this->searchJsonColumn($query, 'attribute_data->name->value->en', $search);
})->get();
```
Where `attribute_data` is the json column and `name->value->en` is the nested column you want to search.
Also `$search` is the value you want to search for and `$this` referring to the model with the `SearchNestedJsonColumn` trait.

