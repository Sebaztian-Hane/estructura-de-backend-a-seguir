<?php

namespace Modules\HistoriesConfigurations\Configurations\Modelo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo Eloquent para los tipos de pago.
 *
 * Representa la entidad 'payment_types' en la base de datos.
 * Incluye relación con citas (appointments).
 * Permite soft deletes y uso de factorías.
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class PaymentType extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentTypeFactory> */
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'code',
        'name',
    ];

    /**
     * Relación: Un tipo de pago puede estar asociado a muchas citas.
     * @return HasMany
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    
}
