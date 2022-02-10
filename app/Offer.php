<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $application_id
 * @property integer $attempt_id
 * @property string $position
 * @property string $army_section_id
 * @property string $arrived_at
 * @property string $comment
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property Application $application
 * @property Attempt $attempt
 * @property Contract[] $contracts
 */
class Offer extends Model
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
    protected $fillable = ['application_id', 'attempt_id', 'position', 'army_section_id', 'arrived_at', 'comment', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function application()
    {
        return $this->belongsTo('App\Application');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attempt()
    {
        return $this->belongsTo('App\Attempt');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contracts()
    {
        return $this->hasMany('App\Contract');
    }
}
