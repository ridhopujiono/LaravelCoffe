<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class chef
 * @package App\Models
 * @version July 31, 2022, 6:18 pm UTC
 *
 * @property string $nama_chef
 * @property string $deskripsi
 * @property string $foto
 */
class chef extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'chefs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_chef',
        'deskripsi',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_chef' => 'string',
        'deskripsi' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_chef' => 'required',
        'deskripsi' => 'required'
    ];

    
}
