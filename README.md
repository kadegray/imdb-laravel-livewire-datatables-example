# IMDB Laravel Livewire Datatables Example

This project is a simple example of using [Livewire Datatables](https://github.com/mediconesystems/livewire-datatables) with data imported using [kadegray/imdb-laravel](https://github.com/kadegray/imdb-laravel).

## Setup

1. Install and build the things

    ```shell
    composer install
    npm i
    npm run dev
    ```

1. env's
   Copy the example env file.

    ```shell
    cp .env.example .env
    ```

    Configure the Database environment variables.

1. Migrate

    ```shell
    php artisan migrate
    ```

1. Import IMDB data

    ```bash
    php artisan imdb:import
    ```

    Note: On a Apple M1 this import takes about 50 minutes.

    Once the import has completed you can dump the imdb\_\* tables using the following command.

    ```bash
    php artisan imdb:dump
    ```
