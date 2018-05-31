<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Notification extends Model
{
    protected $fillable = ['message', 'mustBeLoggedIn'];

    public static function prepare($message, $mustBeLoggedIn = true)
    {
        return new static(compact('message', 'mustBeLoggedIn'));
    }

    public function to($url)
    {
        $this->link = $url;

        return $this;
    }

    public function scopeLatest(Builder $query, $daysBack = 1)
    {
        return $query->where('created_at', '>', Carbon::now()->subDays($daysBack));
    }
}
