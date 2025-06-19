<?php

namespace App\Enums;

enum Gender: string
{
    case Male = 'male';
    case Female = 'female';
    case NotApplicable = 'notapplicable';

    public function label(): string
    {
        return match ($this) {
            self::Male => 'Male',
            self::Female => 'Female',
            self::NotApplicable => 'Not Applicable',
        };
    }
}
