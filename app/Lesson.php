<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * 課程
 *
 * @property-read int id
 * @property int semester_id
 * @property int user_id
 * @property int chapter
 * @property string title
 * @property string desc
 * @property \Carbon\Carbon|null date
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\File[] files
 * @property-read \App\Semester semester
 *
 * @property \Carbon\Carbon|null created_at
 * @property \Carbon\Carbon|null updated_at
 * @mixin \Eloquent
 */
class Lesson extends Model
{

    /* @var array $fillable 可大量指派的屬性 */
    protected $fillable = [
        'semester_id',
        'user_id',
        'chapter',
        'title',
        'desc',
        'date',
    ];

    /* @var array $dates 自動轉換為Carbon的屬性 */
    protected $dates = ['date'];

    /* @var int $perPage 分頁時的每頁數量 */
    protected $perPage = 20;

    /**
     * 該課程檔案
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files()
    {
        return $this->hasMany(File::class);
    }

    /**
     * 該課程隸屬學期
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

}
