<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Contact Model
 * Stores enquiries submitted via the contact form.
 *
 * @property int    $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $subject
 * @property string $message
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Contact extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'contacts';

    /**
     * Mass-assignable attributes.
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'message',
    ];
}
