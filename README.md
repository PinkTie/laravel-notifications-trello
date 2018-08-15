## IN DEVELOPMENT - DO NOT USE IN PRODUCTION


### ![PinkTie Logo](https://pinktietech.com/wp-content/uploads/2017/03/PinkTie-60x60.png) PinkTie Technology Group
# Laravel 5.x.x Notifications Channel for Trello

[![Latest Stable Version](https://poser.pugx.org/pinktie/laravel-notifications-trello/v/stable)](https://packagist.org/packages/pinktie/laravel-notifications-trello) [![License](https://poser.pugx.org/pinktie/laravel-notifications-trello/license)](https://packagist.org/packages/pinktie/laravel-notifications-trello) [![Total Downloads](https://poser.pugx.org/pinktie/laravel-notifications-trello/downloads)](https://packagist.org/packages/pinktie/laravel-notifications-trello) [![Latest Unstable Version](https://poser.pugx.org/pinktie/laravel-notifications-trello/v/unstable)](https://packagist.org/packages/pinktie/laravel-notifications-trello)

Create [Trello](https://www.trello.com/) cards with Laravel Notifications on Laravel 5.x.x

## Contents

- [Installation](#installation)
  - [Setting up the Trello service](#setting-up-the-trello-service)
- [Usage](#usage)
	- [Available Message methods](#available-message-methods)
- [Changelog](#changelog)
- [Support](#support)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)


## Installation 

Install the package via composer:
``` bash
composer require pinktie/laravel-notifications-trello
```

### Setting up the Trello service

Add your Trello REST API Key to your `config/services.php`:

```php
// config/services.php
...
'trello' => [
    'key' => env('TRELLO_API_KEY'),
],
...
```


## Usage

Now you can use the channel in your `via()` method inside the notification:

``` php
use PinkTie\TrelloNotifications\TrelloChannel;
use PinkTie\TrelloNotifications\TrelloMessage;
use Illuminate\Notifications\Notification;

class ProjectCreated extends Notification
{
    public function via($notifiable)
    {
        return [TrelloChannel::class];
    }

    public function toTrello($notifiable)
    {
        return TrelloMessage::create()
            ->name("Trello Card Name")
            ->description("This is the Trello card description")
            ->top()
            ->due('tomorrow');
    }
}
```

In order to let your Notification know which Trello user and Trello list you are targeting, add the `routeNotificationForTrello` method to your Notifiable model.

This method needs to return an array containing the access token of the authorized Trello user (if it's a private board) and the list ID of the Trello list to add the card to.

```php
public function routeNotificationForTrello()
{
    return [
        'token' => 'NotifiableToken',
        'idList' => 'TrelloListId',
    ];
}
```

### Available methods

- `name('')`: Accepts a string value for the Trello card name.
- `description('')`: Accepts a string value for the Trello card description.
- `top()`: Moves the Trello card to the top.
- `bottom()`: Moves the Trello card to the bottom.
- `position('')`: Accepts an integer for a specific Trello card position.
- `due('')`: Accepts a string or DateTime object for the Trello card due date.


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
