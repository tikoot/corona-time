# Corona Time App

## Tabe Of Contents

-   [Introduction](#introduction)
-   [Prerequisites](#prerequisites)
-   [Tech Stack](#tech-stack)
-   [Getting Started](#getting-started)
-   [Development](#development)
-   [Resources](#resources)

## Introduction

Coronatime - is a platform where we can register, go through authorization (as well as restore the password if we have forgotten it) and see what the situation is today in the countries of the world.

-   How many new cases have been confirmed?
-   How many people have recovered?
-   And unfortunately - how many died

## Prerequisites

-   PHP
-   MYSQL
-   Composer
-   Node
-   Tailwind

## Tech Stack

-   laravel - back-end framework
-   Spatie Translatable - Package for translation

## Getting Started

1\. First of all you need to clone repository from github:

```sh
git clone https://github.com/RedberryInternship/tiko-otarashvili-corona-time.git
```

2\. Next step requires you to run _composer install_ in order to install all the dependencies.

```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:

```sh
npm install
```

and also:

```sh
npm run dev
```

4\. Now we need to set our env file. Go to the root of your project and execute this command.

```sh
cp .env.example .env
```

And now you should provide **.env** file all the necessary environment variables:

#

**MYSQL:**

> DB_CONNECTION=mysql

> DB_HOST=127.0.0.1

> DB_PORT=3306

> DB_DATABASE=\*\*\*

> DB_USERNAME=\*\*\*

> DB_PASSWORD=\*\*\*

after setting up **.env** file, execute:

```sh
php artisan config:cache
```

in order to cache environment variables.

4\. Now execute in the root of you project following:

```sh
php artisan key:generate
```

Which generates auth key.

#

**Tailwind:**

5\.Add configured colors and font-family under the extend section in the theme section of your tailwind.config.js file:

```sh
 theme: {
    colors: {
      green :  '#0FBA68',
      white : '#ffffff',
      lightgray : '#E6E6E7',
      gray: '#808189',
      black : '#010414',
      blue: '#2029F3',
      red: '#dc2626',
      grey : '#F6F6F7',
      darkblue: '#2029F3',
      darkgreen : '#0FBA68',
      darkyellow:'#EAD621'
    },
    extend: {
      fontFamily: {
        'inter': [ 'Inter']
    }
    },
  },
```

Add the @import and @layer directives to your ./resources/css/app.css file.

```sh
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;900&display=swap');

@tailwind base;
@tailwind components;
@tailwind utilities;

```

#

**Laravel Translatable:**

6\.You need to add the Spatie\Translatable\HasTranslations-trait:

```sh
composer require spatie/laravel-translatable
```

#

---

### Development

You can run Laravel's built-in development server by executing:

```sh
php artisan serve
```

when working on JS you may run:

```sh
npm run dev
```

You should run artisan command to update or store data from api to db:

```sh
php artisan fetch-covid-statistic
```

### Resources

database diagram

https://drawsql.app/teams/tiko/diagrams/corona-app/embed
