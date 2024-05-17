# Basic web skills test backend Python Django

## Prerequisites

- Symfony cli is good to have : [https://symfony.com/download](https://symfony.com/download)
- PHP (>=8.1)
- composer >=v2

## Stack

- [Api] Symfony Api platform
- [Authentification] Symfony
- [Database] SQlite, with a test user : (username: tester passwd: I@mTheT€ster)
- [Database] A beneficiary also exists

## Setup

```bash
git clone git@github.com:re-connect/interview-symfony.git
cd interview-symfony
composer install
php bin/console lexik:jwt:generate-keypair
symfony serve
```

## Browse

[http://localhost:8000](http://localhost:8000)
