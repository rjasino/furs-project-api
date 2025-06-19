<?php

namespace App\Enums;

enum ReportStatus: string // You can use 'int' or 'string' as the backing type
{
    case Active = 'active';
    case Resolved = 'resolved';
    case Archived = 'archived';

    // You can add methods to your enum for more functionality
    public function label(): string
    {
        return match ($this) {
            self::Active => 'Active Report',
            self::Resolved => 'Report Resolved',
            self::Archived => 'Report Archived',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::Active => 'blue',
            self::Resolved => 'green',
            self::Archived => 'gray',
        };
    }
}
