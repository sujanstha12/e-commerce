<?php

namespace App\Enum;

enum SizeEnum: String {
    case Small = 'small';
    case Medium = 'Medium';
    case Large = 'Large';
    case ExtraLarge = 'Extra Large';

    public function label(): string{
        return self::getLabel(value: $this);
    }

    public static function getLabel(SizeEnum $value): string{
        return match($value) {
    self::Small => 'small',
    self::Medium => 'Medium',
    self::Large => 'Large',
    self::ExtraLarge => 'Extra Large',
        };

    }
}
