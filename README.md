# SimpleSAMLphp Laravel Authentication __(simplesamlphp-laravel-authentication)__

> sqlauth module adopted to support hashed passwords

## Prerequisite

SimpleSAMLphp already set up as an identity provider. Including config modifications and certificates.

## Usage

1. Copy the `modules/sqlauth` to your `modules` directory.  
1. Add the auth source entry to `config/authsources.php`.
1. Enable the `sqlauth` module in your `config/config.php` file.

## Credits

This is merely an adoption of the original sqlauth module.  
The only thing that was changed is the user lookup and password validation.
