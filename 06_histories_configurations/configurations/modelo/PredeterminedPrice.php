<?php
namespace Modules\HistoriesConfigurations\Configurations\Modelo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modelo Eloquent para los precios predeterminados.
 *
 * Representa la entidad 'predetermined_prices' en la base de datos.
 * Incluye relación con citas (appointments).
 * Permite soft deletes y uso de factorías.
 *
 * @property int $id
 * @property string $name
 * @property float|null $price
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class PredeterminedPrice extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'predetermined_prices'; // Opcional si el nombre del modelo no sigue la convención

    // Campos que se pueden asignar de forma masiva
    protected $fillable = ['name', 'price'];

    // Para que Laravel maneje automáticamente las fechas (created_at, updated_at, deleted_at)
    protected $dates = ['deleted_at'];

    /**
     * Relación: Un precio predeterminado puede estar asociado a muchas citas.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'predetermined_price_id');
    }
}
