<?php

namespace App\Enum;

enum ColorEnum: String {
    case Black = 'Black';
    case White = 'White';
    case Blue = 'Blue';
    case Gray = 'Gray';

    public function label(): string{
        return self::getLabel(value: $this);
    }

    public static function getLabel(ColorEnum $value): string{
        return match($value) {
            self:: Black => 'Black',
            self:: White => 'White',
            self:: Blue => 'Blue',
            self:: Gray => 'Gray',
        };

    }
}
