<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $application_id
 * @property integer $step_id
 * @property string $comment
 * @property int $status
 * @property string $published_date
 * @property string $validated_date
 * @property string $created_at
 * @property string $updated_at
 * @property Application $application
 * @property Step $step
 * @property Contract[] $contracts
 * @property Offer[] $offers
 */
class Attempt extends Model
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
    protected $fillable = ['application_id', 'step_id', 'comment', 'status', 'published_date', 'validated_date', 'created_at', 'updated_at'];

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
    public function step()
    {
        return $this->belongsTo('App\Steps');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contracts()
    {
        return $this->hasMany('App\Contract');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offers()
    {
        return $this->hasMany('App\Offer');
    }
}
