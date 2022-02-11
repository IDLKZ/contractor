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

    ];
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
}
