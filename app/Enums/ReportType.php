<?php

namespace App\Enums;

enum ReportType: string // You can use 'int' or 'string' as the backing type
{
    case Lost = 'lost';
    case Found = 'found';

    // You can add methods to your enum for more functionality
    public function label(): string
    {
        return match ($this) {
            self::Lost => 'Lost Animal',
            self::Found => 'Animal Found',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::Lost => 'red',
            self::Found => 'green',
        };
    }
}
