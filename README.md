# Laravel Livewire practice

## Project Description

The project is a collection of different feature implementations using Laravel 8 and the Livewire package. Tailwind css was also chosen as the front end framework.

## Project Setup

### Cloning the GitHub Repository.

Clone the repository to your local machine by running the terminal command below.

```bash
git clone https://github.com/Ojsholly/livewire-practice
```

### Setup Database

Create your MySQL database and note down the required connection parameters. (DB Host, Username, Password, Name)

### Install Composer Dependencies

Navigate to the project root directory via terminal and run the following command.

```bash
composer install
```

### Install NPM Dependencies

While still in the project root directory via terminal, run the following command.

```bash
npm install
```

or if you use yarn instead

```bash
yarn
```

### Create a copy of your .env file

Run the following command

```bash
cp .env.example .env
```

This should create an exact copy of the .env.example file. Name the newly created file .env and update it with your local environment variables (database connection info and others).

### Generate an app encryption key

```bash
php artisan key:generate
```

### Migrate the database

```bash
php artisan migrate
```

### License

[MIT](https://choosealicense.com/licenses/mit/)
