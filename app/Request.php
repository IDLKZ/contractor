<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $live_place
 * @property string $name
 * @property string $IIN
 * @property string $education
 * @property string $car_license
 * @property string $experience
 * @property string $army_service
 * @property string $army_year
 * @property string $army_section
 * @property string $position
 * @property string $rank
 * @property string $vtsh
 * @property string $branch_name
 * @property string $year_service
 * @property string $wanted_position
 * @property string $contract_term
 * @property string $region
 * @property string $phone
 * @property string $email
 * @property string $photo
 * @property string $card_id
 * @property string $autobiography
 * @property string $diploma
 * @property string $declaration
 * @property string $workbook
 * @property string $millitary_id
 * @property mixed $anketa
 * @property string $date
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Attempt[] $attempts
 */
class Request extends Model
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
    protected $fillable = ['user_id', 'live_place', 'name', 'IIN', 'education', 'car_license', 'experience', 'army_service', 'army_year', 'army_section', 'position', 'rank', 'vtsh', 'branch_name', 'year_service', 'wanted_position', 'contract_term', 'region', 'phone', 'email', 'photo', 'card_id', 'autobiography', 'diploma', 'declaration', 'workbook', 'millitary_id', 'anketa', 'date', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attempts()
    {
        return $this->hasMany('App\Attempt');
    }
}
