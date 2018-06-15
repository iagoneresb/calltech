<?php

namespace App\Entities;

/**
 * Class Address.
 *
 * @package namespace App\Entities;
 */
class Address extends AppModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'postal_code',
        'street',
        'number',
        'neighborhood',
        'city',
        'state',
        'country',
        'complement'
    ];

    /**
     * The attributes of date type.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
