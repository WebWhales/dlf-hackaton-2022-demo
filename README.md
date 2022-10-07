# [Project Name]

## Initial set-up

1. Set up Docker
```shell
dk-up # Or "docker compose up -d" 
dk-web # Or "docker compose exec web bash"
```

2. Install packages
```shell
COMPOSER_MEMORY_LIMIT=-1 composer install
yarn install
```

3. Set up environment
```shell
cp .env.example .env
php artisan key:generate

chown -R root:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 776 /var/www/html/storage /var/www/html/bootstrap/cache
```

**Note:** Make sure to review the values inside `.env`.

4. Run Laravel Migration and Seeders
```shell
php artisan migrate
php artisan db:seed
```

5. Generate IDE Helper Files
```shell
php artisan ide-helper:generate
php artisan ide-helper:models -M
```

6. Build frontend assets
```shell
yarn run hot # Or "yarn run watch-poll"
```


## When continuing development
1. Install new dependencies
```shell
composer install
yarn install
```

2. Run migrations, seeders (optional) and IDE helper commands
```shell
php artisan migrate
php artisan db:seed # Optional
php artisan ide-helper:generate
php artisan ide-helper:models -M
```

3. Build frontend assets
```shell
yarn run hot # Or "yarn run watch-poll"
```


## Run test suites

**Note:** When running, for the first time, make sure to copy `.env.` to `.env.testing` and review the values inside `.env.testing`.


```shell
php artisan test
```
