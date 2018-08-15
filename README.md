# laravel-notifications-trello
Create Trello cards with Laravel
### ![PinkTie Logo](https://pinktietech.com/wp-content/uploads/2017/03/PinkTie-60x60.png) PinkTie Technology Group
# Laravel 5.5/5.6 Preset for Tabler Dashboard UI Kit

[![Latest Stable Version](https://poser.pugx.org/pinktie/laravel-dashboard-tabler/v/stable)](https://packagist.org/packages/pinktie/laravel-dashboard-tabler) [![License](https://poser.pugx.org/pinktie/laravel-dashboard-tabler/license)](https://packagist.org/packages/pinktie/laravel-dashboard-tabler) [![Total Downloads](https://poser.pugx.org/pinktie/laravel-dashboard-tabler/downloads)](https://packagist.org/packages/pinktie/laravel-dashboard-tabler) [![Latest Unstable Version](https://poser.pugx.org/pinktie/laravel-dashboard-tabler/v/unstable)](https://packagist.org/packages/pinktie/laravel-dashboard-tabler)

Create [Trello](https://www.trello.com/) cards with Laravel Notifications on Laravel 5.X.X

## Contents

- [Installation](#installation)
- [Changelog](#changelog)
- [Support](#support)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

## Installation  -- NEED TO UPDATE

1) With a clean install of Laravel 5.5 or 5.6 you can install the package via composer:
>  `composer require pinktie/laravel-dashboard-tabler`

Laravel will automatically discover this package, there is no need to register the service provider.

2) Choose a Preset option:
>  (**NOTE**: If you run the preset command more than one time, you will have to clean up the duplicate Auth entries in `routes/web.php`)

For a basic Tabler preset run:
>  `php artisan preset tabler`

For a basic Tabler preset, Auth route entry and Tabler Auth views run:
>  `php artisan preset tabler-auth`


3) Install package depenancies via yarn:
>  `yarn`
>  `yarn dev` or `yarn watch`

4) Configure your database settings

5) Migrate user tables:
>  `php artisan migrate`


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Support

If you discover any issues or would like to request addtional features, please use the GitHub issue tracker.

## Security

If you discover any security related issues, please email support@pinktietech.com instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Kevin Fairbanks](https://github.com/KevinFairbanks)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
