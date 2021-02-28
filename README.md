# SimpleSAMLphp password_verify Authentication _(simplesamlphp-password-verify-authentication)_

> SimpleSAMLphp sqlauth module adopted to support hashed passwords

## Why?

I created this repository because I needed to connect SimpleSAMLphp to a Laravel users table.  
The default sqlauth module did not include a password_verify check.

## Prerequisite

SimpleSAMLphp already set up as an identity provider. Including config modifications and certificates.

## Usage

1. Copy the `modules/sqlauth` to your `modules` directory.  
1. Add the auth source entry to `config/authsources.php`.
1. Enable the `sqlauth` module in your `config/config.php` file.

## Credits

This is merely an adoption of the original sqlauth module.  
The only thing that was changed is the user lookup and password validation.
