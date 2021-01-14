# academy-hub

[![LICENSE](https://img.shields.io/badge/License-MIT-red.svg)](https://github.com/GiorgiBeriashvili/academy-hub#License "Project's LICENSE section")

## Description

Academy Hub is a website built themed around the various academies around the world as a university project about implementing a CRUD based web application using [Laravel](https://laravel.com).

---

## Visual Preview

Here is the visual preview of the web application:

![Visual Preview](https://github.com/GiorgiBeriashvili/academy-hub/blob/main/assets/sidebar.png "Visual Preview of Academy Hub")

To see more screenshots, refer to the [assets](https://github.com/GiorgiBeriashvili/academy-hub/blob/main/assets "Assets directory on GitHub") directory.

---

## Installing

You can install academy-hub locally using the command-line via [Laravel Sail](https://laravel.com/docs/8.x/sail):

```sh
sail up
```

In order to run the webserver in the background, enter the following to the command-line:

```sh
sail up -d
```

---

## Usage

It is highly advised to enter `sail artisan migrate:fresh` followed by `sail artisan db:seed` in order to spawn multiple instances of academies for testing purposes. Note that the seeding process might fail, in which case you can re-enter the commands again.

---

Authors: [Giorgi Beriashvili](https://github.com/GiorgiBeriashvili "GitHub Profile of Giorgi Beriashvili") and [Luka Parchukidze](https://github.com/LukaParchukidze "GitHub Profile of Luka Parchukidze").

---

## License

academy-hub is licensed under the permissive MIT License ([LICENSE](https://github.com/GiorgiBeriashvili/academy-hub/blob/main/LICENSE "Copy of the MIT license")).
