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
    'project_url',
    'category',
    'client',
    'completion_date',
    'is_active'
];

protected static function boot()
{
    parent::boot();
    
    static::creating(function ($portfolio) {
        if ($portfolio->project_url && !$portfolio->image) {
            $portfolio->image = self::generateThumbnail($portfolio->project_url);
        }
    });

    static::updating(function ($portfolio) {
        if ($portfolio->isDirty('project_url')) {
            // URL has changed, generate new thumbnail
            $portfolio->image = self::generateThumbnail($portfolio->project_url);
        }
    });
}

// Add a method for manual refresh
public function refreshThumbnail()
{
    $this->image = self::generateThumbnail($this->project_url);
    $this->save();
    return $this;
}


    protected static function getNodePath()
    {
        // Try environment variables first
        $nodePath = env('NODE_BINARY_PATH');
        if ($nodePath && file_exists($nodePath)) {
            return $nodePath;
        }
        
        // Fall back to which command
        return trim(shell_exec('which node'));
    }

    protected static function getNpmPath()
    {
        // Try environment variables first
        $npmPath = env('NPM_BINARY_PATH');
        if ($npmPath && file_exists($npmPath)) {
            return $npmPath;
        }
        
        // Fall back to which command
        return trim(shell_exec('which npm'));
    }

    public static function generateThumbnail($url)
    {
        $filename = 'portfolio/' . md5($url) . '.jpg';
        $path = storage_path('app/public/' . $filename);

        // Ensure directory exists
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }

        Browsershot::url($url)
        ->setNodeBinary(self::getNodePath())
        ->setNpmBinary(self::getNpmPath())
        ->windowSize(1920, 1080)
        ->waitUntilNetworkIdle()
        ->ignoreHttpsErrors() // Add this line to ignore SSL certificate issues
        ->setOption('args', ['--no-sandbox', '--disable-setuid-sandbox', '--ignore-certificate-errors'])
        ->save($path);

        return $filename;
    }
}
