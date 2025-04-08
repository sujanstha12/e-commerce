<?php

namespace App\Models;

use App\Enum\ColorEnum;
use App\Enum\SizeEnum;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=[

        'thumbnail',
        'name',
        'detail',
        'prize',
        'size',
        'color',
        'discount',
        'total_quantity',
        'purchased_quantity',
        'category_id',
        'customer_id',
    ];
    protected $casts =[
        'size' => SizeEnum::class,
        'color' => ColorEnum::class,

    ];

    public function thumbnail():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('systemSetting','public') : null,
        );

    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
    public function files():MorphMany
    {
        return $this->morphMany(File::class,'model');
    }

}
