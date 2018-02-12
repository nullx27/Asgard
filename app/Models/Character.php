<?php

namespace Asgard\Models;

use Asgard\Events\CharacterUpdateEvent;
use Asgard\Models\Character\CorporationHistory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    protected $fillable = ['id'];
    protected $casts = [
        'active' => 'boolean'
    ];

    protected $dispatchesEvents = [
        'updated' => CharacterUpdateEvent::class,
        'saved' => CharacterUpdateEvent::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function corporation()
    {
        return $this->belongsTo(Corporation::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', '=', true);
    }

    public function corporationHistory()
    {
        return $this->hasMany(CorporationHistory::class);
    }

}
