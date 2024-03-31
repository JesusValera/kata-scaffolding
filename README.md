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

## Typescript

1. Install [Node](http://nodejs.org/)
2. Install NVM (Node Version Manager) [nvm for Linux/macOS](https://github.com/nvm-sh/nvm#installing-and-updating) or [nvm for Windows](https://github.com/coreybutler/nvm-windows#installation--upgrades)
3. `nvm install` or `nvm install $(Get-Content .nvmrc)` if you are working on Windows
4. `nvm use` or `nvm use $(Get-Content .nvmrc)` if you are working on Windows
5. `npm install` or `yarn install`
6. `npm test` or `yarn test`

## Javascript

1. Install [Node](http://nodejs.org/)
2. `npm install`
3. `npm test`
