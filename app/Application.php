<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $birthplace
 * @property string $iin
 * @property string $education
 * @property string $car_licence
 * @property string $experience
 * @property string $army_service
 * @property string $army_section_id
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
 * @property string $id_document
 * @property string $autobiography
 * @property string $diploma
 * @property string $declaration
 * @property string $work_book
 * @property string $military_id
 * @property mixed $anketa
 * @property string $created_at
 * @property string $updated_at
 * @property Attempt[] $attempts
 * @property Offer[] $offers
 */
class Application extends Model
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
    protected $fillable = ['name', 'birthplace', 'iin', 'education', 'car_licence', 'experience', 'army_service', 'army_section_id', 'position', 'rank', 'vtsh', 'branch_name', 'year_service', 'wanted_position', 'contract_term', 'region', 'phone', 'email', 'photo', 'id_document', 'autobiography', 'diploma', 'declaration', 'work_book', 'military_id', 'anketa', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attempts()
    {
        return $this->hasMany('App\Attempt');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offers()
    {
        return $this->hasMany('App\Offer');
    }
}
