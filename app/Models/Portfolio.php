<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Browsershot\Browsershot;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'client',
        'project_url',
        'completion_date'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($portfolio) {
            if ($portfolio->project_url && !$portfolio->image) {
                $portfolio->image = self::generateThumbnail($portfolio->project_url);
            }
        });
    }

    public static function generateThumbnail($url)
    {
        $filename = 'portfolio/' . md5($url) . '.jpg';
        $path = storage_path('app/public/' . $filename);

        Browsershot::url($url)
            ->windowSize(1920, 1080)
            ->waitUntilNetworkIdle()
            ->save($path);

        return $filename;
    }
}
