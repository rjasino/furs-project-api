<?php

namespace App\Enums;

enum AnimalStatus: string
{
    case Lost = 'lost';
    case Found = 'found';
    case Reunited = 'reunited';

    // You can add methods to your enum for more functionality
    public function label(): string
    {
        return match ($this) {
            self::Lost => 'Lost Animal',
            self::Found => 'Animal Found',
            self::Reunited => 'Animal Reunited',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::Lost => 'red',
            self::Found => 'green',
            self::Reunited => 'blue',
        };
    }
}
