## Requirements to run the project:
- PHP
- COMPOSER
- MySql


###Set up:
> composer install

***Make a copy of .env.example and name it .env and edit with your db credentials.***

> php artisan migrate:fresh --seed

> php artisan serve

###Testing:
> php artisan test

###API Endpoints

####Create order (POST):
> 127.0.0.1:8000/api/orders/

In the Request body, eg:
```javascript
{
    "payment_method_id": 1, 
    "products": [1,2,3,4,5]
}

```

####List Orders (GET):
> 127.0.0.1:8000/api/orders/


###Note:
- Data model (data_model.png)
