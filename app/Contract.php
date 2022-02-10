<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $attempt_id
 * @property integer $offer_id
 * @property string $title
 * @property string $contract_term
 * @property int $status
 * @property string $file
 * @property string $created_at
 * @property string $updated_at
 * @property Attempt $attempt
 * @property Offer $offer
 */
class Contract extends Model
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
    protected $fillable = ['attempt_id', 'offer_id', 'title', 'contract_term', 'status', 'file', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attempt()
    {
        return $this->belongsTo('App\Attempt');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }
}
