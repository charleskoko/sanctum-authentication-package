# Sanctum authentication package

[![Issues](https://img.shields.io/github/issues/charleskoko/sanctum-authentication-package?style=flat-square)](https://github.com/charleskoko/sanctum-authentication-package/issues)
![Forks](https://img.shields.io/github/forks/charleskoko/sanctum-authentication-package?style=flat-square)
![Stars](https://img.shields.io/github/stars/charleskoko/sanctum-authentication-package?style=flat-square)

## Installation

Sanctum authentication requires Laravel Sanctum. Before installing this package, you must have installed Laravel sanctum and made all configurations.

Package installation.

```sh
composer require charleskoko/sanctum-authentication
```

Then you have to publish the configuration files of Sanctum authentication package using the command vendor:publish Artisan. The Sanctum configuration file will be placed in the config directory of your application:

```sh
php artisan vendor:publish --provider="Charleskoko\SanctumAuthentication\SanctumAuthenticationServiceProvider"
```

## Configuration

In the config file sanctumAuthentication.php of Sanctum authentication package, you can modify the following environment variables:

| Variable | ROLE |
| ------ | ------ |
| Registration rules | Necessary elements and validations rules for the creation of a user |
| Login rules | Required elements and validation rules allowing the user to connect |
| Login attribute | Attribute to check for the user's connection |
| Api uri | Api url |

