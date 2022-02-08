<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $request_id
 * @property integer $current_step
 * @property boolean $live_place_status
 * @property string $live_place_comment
 * @property boolean $name_status
 * @property string $name_comment
 * @property boolean $IIN_status
 * @property string $IIN_comment
 * @property boolean $education_status
 * @property string $education_comment
 * @property boolean $car_license_status
 * @property string $car_license_comment
 * @property boolean $experience_status
 * @property string $experience_comment
 * @property boolean $army_service_status
 * @property string $army_service_comment
 * @property boolean $army_year_status
 * @property string $army_year_comment
 * @property boolean $army_section_status
 * @property string $army_section_comment
 * @property boolean $position_status
 * @property string $position_comment
 * @property boolean $rank_status
 * @property string $rank_comment
 * @property boolean $vtsh_status
 * @property string $vtsh_comment
 * @property boolean $branch_name_status
 * @property string $branch_name_comment
 * @property boolean $year_service_status
 * @property string $year_service_comment
 * @property boolean $wanted_position_status
 * @property string $wanted_position_comment
 * @property boolean $contract_term_status
 * @property string $contract_term_comment
 * @property boolean $region_status
 * @property string $region_comment
 * @property boolean $phone_status
 * @property string $phone_comment
 * @property boolean $email_status
 * @property string $email_comment
 * @property boolean $photo_status
 * @property string $photo_comment
 * @property boolean $card_id_status
 * @property string $card_id_comment
 * @property boolean $autobiography_status
 * @property string $autobiography_comment
 * @property boolean $diploma_status
 * @property string $diploma_comment
 * @property boolean $declaration_status
 * @property string $declaration_comment
 * @property boolean $workbook_status
 * @property string $workbook_comment
 * @property boolean $millitary_id_status
 * @property string $millitary_id_comment
 * @property boolean $anketa_status
 * @property string $anketa_comment
 * @property string $comment
 * @property string $date
 * @property string $checked_date
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property Request $request
 * @property Step $step
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
    protected $fillable = ['request_id', 'current_step', 'live_place_status', 'live_place_comment', 'name_status', 'name_comment', 'IIN_status', 'IIN_comment', 'education_status', 'education_comment', 'car_license_status', 'car_license_comment', 'experience_status', 'experience_comment', 'army_service_status', 'army_service_comment', 'army_year_status', 'army_year_comment', 'army_section_status', 'army_section_comment', 'position_status', 'position_comment', 'rank_status', 'rank_comment', 'vtsh_status', 'vtsh_comment', 'branch_name_status', 'branch_name_comment', 'year_service_status', 'year_service_comment', 'wanted_position_status', 'wanted_position_comment', 'contract_term_status', 'contract_term_comment', 'region_status', 'region_comment', 'phone_status', 'phone_comment', 'email_status', 'email_comment', 'photo_status', 'photo_comment', 'card_id_status', 'card_id_comment', 'autobiography_status', 'autobiography_comment', 'diploma_status', 'diploma_comment', 'declaration_status', 'declaration_comment', 'workbook_status', 'workbook_comment', 'millitary_id_status', 'millitary_id_comment', 'anketa_status', 'anketa_comment', 'comment', 'date', 'checked_date', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function request()
    {
        return $this->belongsTo('App\Request');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function step()
    {
        return $this->belongsTo('App\Step', 'current_step');
    }
}
