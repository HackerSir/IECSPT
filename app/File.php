<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * 檔案
 *
 * @property-read int id
 * @property int lesson_id
 * @property string name
 * @property string hash
 * @property string ext
 *
 * @property-read \App\Lesson lesson
 *
 * @property \Carbon\Carbon|null created_at
 * @property \Carbon\Carbon|null updated_at
 * @mixin \Eloquent
 */
class File extends Model
{

    /* @var array $fillable 可大量指派的屬性 */
    protected $fillable = [
        'lesson_id',
        'name',
        'hash',
        'ext',
    ];

    /* @var int $perPage 分頁時的每頁數量 */
    protected $perPage = 20;

    /**
     * 該檔案隸屬課程
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

}
