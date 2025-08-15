<?php

namespace Modules\HistoriesConfigurations\Configurations\Modelo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo Eloquent para los tipos de documento.
 *
 * Representa la entidad 'document_types' en la base de datos.
 * Incluye relaciones con usuarios, pacientes y terapeutas.
 * Permite soft deletes y uso de factorías.
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class DocumentType extends Model
{
    /** @use HasFactory<\Database\Factories\DocumentTypeFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Relación: Un tipo de documento puede estar asociado a muchos usuarios.
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Relación: Un tipo de documento puede estar asociado a muchos pacientes.
     * @return HasMany
     */
    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }

    /**
     * Relación: Un tipo de documento puede estar asociado a muchos terapeutas.
     * @return HasMany
     */
    public function therapists(): HasMany
    {
        return $this->hasMany(therapist::class);
    }

    /**
     * Devuelve una nueva instancia de la factoría para este modelo.
     * @return \Database\Factories\DocumentTypeFactory
     */
    public static function newFactory()
    {
        return \Database\Factories\DocumentTypeFactory::new();
    }
}
