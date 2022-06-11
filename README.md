## Installation

Clone the repo locally:

```sh
git clone https://github.com/lionwalker/sales-team-management.git sales-team-management
cd sales-team-management
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm install
```

Build assets:

```sh
npm run dev
```

Setup configuration with database information:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create MySql database if not already created:

```sh
php artisan make:default-db
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```
