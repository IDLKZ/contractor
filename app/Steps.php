<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Steps extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['next_step', 'previous_step', 'title', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function next_step()
    {
        return $this->belongsTo('App\Steps', 'next_step');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function previous_step()
    {
        return $this->belongsTo('App\Steps', 'previous_step');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attempts()
    {
        return $this->hasMany('App\Attempt');
    }
}
