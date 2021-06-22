<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Devoir
 * @package App\Models
 * @version June 17, 2021, 2:29 pm UTC
 *
 * @property string $titre
 * @property string $objet
 */
class Devoir extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'devoirs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'titre',
        'objet'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titre' => 'string',
        'objet' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titre' => 'required',
        'objet' => 'required'
    ];

    
}
