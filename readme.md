# Cadouri Prestashop clean install

Built by [Fruitware team](https://github.org/fruitware) 

## Install instructions

To make sure everything works you'll need:
1. Upload DB from ``_workflow/db/*.sql`` to your database
2. Unzip images into ``_workflow/img/*``
3. Create config file as listed above
4. Run SQL-query (**where you should change ``new.host.com`` to your url**)

```mysql
UPDATE ps_shop_url SET domain = replace(domain, 'cadouri-new.test', 'new.host.com');
UPDATE ps_shop_url SET domain_ssl = replace(domain_ssl, 'cadouri-new.test', 'new.host.com');
```

## Config file info

Main config file is located here ``app/config/parameters.php``

```php
<?php return array (
  'parameters' => 
  array (
    'database_host' => '127.0.0.1',
    'database_port' => '',
    'database_name' => 'db-name',
    'database_user' => 'root',
    'database_password' => 'qwerty',
    'database_prefix' => 'ps_',
    'database_engine' => 'InnoDB',
    'mailer_transport' => 'smtp',
    'mailer_host' => '127.0.0.1',
    'mailer_user' => NULL,
    'mailer_password' => NULL,
    'secret' => 'oMJ05FIahgi3X3DJFqx0L4w9PDCyMjmgQisctHBvITqrr1SfBJ8iPMYE',
    'ps_caching' => 'CacheMemcache',
    'ps_cache_enable' => false,
    'ps_creation_date' => '2019-06-12',
    'locale' => 'ru-RU',
    'cookie_key' => 'dTc7R1EUpAPbKS4jq0tTDM71vQgq5WvBURMzFL312Fytc7dq7XdNTFkC',
    'cookie_iv' => 'beyNvxE7',
    'new_cookie_key' => 'def000002fd69133ef83d8f9ae1d1bece69b7953b2b575e3a9bf02fba8a1b382e6880a3e950474410afdab831adcc85a064ae68a5f3c349753aa3484785b4e80e86516c6',
  ),
);
```

## Theme development

**Cadouri** theme is located in ``themes/cadouri``

### General info

Theme uses several technologies:
* webpack
* npm
* scss
* bootstrap 4.alfa
* smarty for the templates

### How to work with the theme

To change styles use ``_dev`` folder:

```bash
cd themes/cadouri/_dev;
npm install;
npm run watch;
```

