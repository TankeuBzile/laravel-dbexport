
# Laravel DB Export

## Introduction
A package that manages the export of data from a Database in any format

## Getting started

### Basic sample

1 - Install it

```bash
  composer require bzilee/laravel-dbexport 
  ```

2 - Use


```php
  ...
  use Bzilee\LaraDBExport\LaraDBExport;
  ...
  
  LaraDBExport::vcf(file_name, data_to_export);
  ```

## Security Vulnerabilities

Please review [our security policy](https://github.com/laravel/tinker/security/policy) on how to report security vulnerabilities.

## License

Laravel Tinker is open-sourced software licensed under the [MIT license](LICENSE.md).
