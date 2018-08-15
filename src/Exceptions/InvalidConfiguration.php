<?php

namespace PinkTie\TrelloNotifications\Exceptions;

class InvalidConfiguration extends \Exception
{
    public static function configurationNotSet()
    {
        return new static('In order to send notification via Trello you need to add credentials in the `trello` key of `config.services`.');
    }
}
