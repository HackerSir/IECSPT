<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * 學期資料
 *
 * @property-read int id
 * @property int year
 * @property int semester
 * @property string classroom
 * @property \Carbon\Carbon|null begin_at
 * @property \Carbon\Carbon|null end_at
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Lesson[] lessons
 *
 * @property \Carbon\Carbon|null created_at
 * @property \Carbon\Carbon|null updated_at
 * @mixin \Eloquent
 */
class Semester extends Model
{

    /* @var array $fillable 可大量指派的屬性 */
    protected $fillable = [
        'year',
        'semester',
        'classroom',
        'begin_at',
        'end_at',
    ];

    /* @var array $dates 自動轉換為Carbon的屬性 */
    protected $dates = ['begin_at', 'end_at'];

    /* @var int $perPage 分頁時的每頁數量 */
    protected $perPage = 20;

    /**
     * 該學期課程
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

}
