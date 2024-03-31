# Password Validator

Write a program that validates if a password is valid applying TDD.

## Rules:

Your function should comply with the following additional rules:
- Have more than 8 and less than 16 characters
- Contains a uppercase and a lowercase letter
- Contains a number and an underscore

### Requirements

- We want a method that answers if the password is valid or not
- We don’t want to know the reason when the password is not valid

```php
interface PasswordValidator
{
    public function validate(string $password): bool;
}
```

## PHP

1. Install [composer](https://getcomposer.org/) `curl -sS https://getcomposer.org/installer | php`
2. `composer install`
3. `vendor/bin/phpunit` o `composer test`

## Javascript

1. Install [Node](http://nodejs.org/)
2. `npm install`
3. `npm test`
