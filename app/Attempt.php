<?php

namespace App;

use App\Traitor\UploadModel;
use Carbon\Carbon;
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
    use UploadModel;

    protected $casts = [
        'published_date' => 'datetime:d/m/Y',
        'accepted_date' => 'datetime:d/m/Y',
        'checked_date' => 'datetime:d/m/Y',
        'offered_date' => 'datetime:d/m/Y',
        'signed_date' => 'datetime:d/m/Y',
    ];
    /**
     * @var array
     */
    protected $fillable = [
        'application_id',
        'step_id',
        'comment',
        'status',

        'accepted_status',
        'checked_status',
        'offered_status',
        'signed_status',

        "accepted_comment",
        "checked_comment",
        "offered_comment",
        "signed_comment",

        'published_date',
        'validated_date',
        'accepted_date',
        'checked_date',
        'offered_date',
        'signed_date',
        'created_at',
        'updated_at'];

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

    public static function newAttempt($application){
        if(Attempt::where("application_id",$application->id)->where("step_id",1)->count() <= 2){
            $input["application_id"] = $application->id;
            $input["step_id"] = 1;
            $input["status"] = 0;
            $input["published_date"] = Carbon::now()->toDateTimeString();
            Attempt::add($input);
        }
    }

    public  function getStatus(){
        if($this->status == 0){
            return "Ожидание";
        }
        else if($this->status == 1){
            return "Одобрено";
        }
        else if($this->status == -1){
            return "Отказано";
        }
    }

    public function getStatusCode($status){
        if($status == 0){
            return "Ожидание";
        }
        else if($status == 1){
            return "Одобрено";
        }
        else if($status == -1){
            return "Отказано";
        }
    }

    public static function receivedUpdate($app, $comment = null) {
        if ($comment){
            $app->step_id = 1;
            $app->accepted_date = Carbon::now();
            $app->accepted_comment = $comment;
            $app->accepted_status = -1;
            $app->status = -1;
            $app->save();
        } else {
            $app->step_id = 2;
            $app->accepted_date = Carbon::now();
            $app->accepted_status = 1;
            $app->save();
        }
    }

    public static function acceptedUpdate($app) {
        $app->step_id = 3;
        $app->checked_date = Carbon::now();
        $app->checked_status = 1;
        $app->save();
    }
}
