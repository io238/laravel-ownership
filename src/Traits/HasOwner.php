<?php

namespace Io238\LaravelOwnership\Traits;

use Illuminate\Support\Facades\Auth;
use Io238\LaravelOwnership\Scopes\OwnerScope;


trait HasOwner {

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // model uses guarded concept
        if ((count($this->guarded) > 0 && count($this->fillable) == 0) || (count($this->guarded) == 0 && count($this->guarded) == 0)) {
            $this->guarded[] = 'user_id';
        }
        else {
            unset($this->fillable['user_id']);
        }
        $this->hidden[] = 'user_id';

        // Set Auth::user() as default user ID
        if (Auth::check()){
            $this->user_id = Auth::user()->id;
        }
    }


    protected static function booted()
    {
        static::addGlobalScope(new OwnerScope);
    }


    public function owner()
    {
        return $this->belongsTo(config('laravel-ownership.model'));
    }

}
