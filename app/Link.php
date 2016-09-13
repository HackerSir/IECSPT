<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * 檔案
 *
 * @property-read int id
 * @property string title
 * @property string desc
 * @property string url
 * @property string type
 *
 * @property \Carbon\Carbon|null created_at
 * @property \Carbon\Carbon|null updated_at
 * @mixin \Eloquent
 */
class Link extends Model
{

    /* @var array $fillable 可大量指派的屬性 */
    protected $fillable = [
        'title',
        'desc',
        'url',
        'type',
    ];

    /* @var int $perPage 分頁時的每頁數量 */
    protected $perPage = 20;

}
