# [Project Name]

## Initial commands

1. Set up Docker
   ```shell
   dk-up # Or "docker compose up -d" 
   dk-web # Or "docker compose exec web bash"
   ```

2. Install packages
    1. When on Windows:<br>
       Inside the web Docker container:
       ```shell
       COMPOSER_MEMORY_LIMIT=-1 composer install
       ```
       
       In Powershell (outside the Docker container)
       ```ps1
       yarn install
       ```

       **Tip:** Use the [NVM for Windows](https://github.com/coreybutler/nvm-windows) tool to use different Node 
       versions on Windows. Don't have this installed yet? Make sure to uninstall existing Node versions first.

    2. When on a different OS:<br>
       Inside the web container:
       ```shell
       COMPOSER_MEMORY_LIMIT=-1 composer install
       yarn install
       ```

3. First run: Set up environment
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

5. Generate IDE Helper Files (in case the ide-helper package is installed)
   ```shell
   php artisan ide-helper:generate
   php artisan ide-helper:models -M
   ```

6. Build frontend assets using Vite
   ```shell
   yarn run dev
   ```
   
   **Note:** Run this command in **Powershell** when working on **Windows**, or in the **web container** in Docker 
   when working on a different OS.


## Run test suites

**Note:** When running, for the first time, make sure to copy `.env.` to `.env.testing` and review the values inside `.env.testing`.

```shell
php artisan test
```
