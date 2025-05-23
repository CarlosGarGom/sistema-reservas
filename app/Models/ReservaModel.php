<?php
namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{

    protected $table = 'reservas'; 
    protected $allowedFields = ['nombre', 'email', 'actividad', 'fecha_reserva', 'personas']; // campos permitidos para insertar/actualizar

    public function insertar_reserva($nombre, $email, $actividad, $fecha_reserva, $personas)
    {
        $data = [
            'nombre'        => $nombre,
            'email'         => $email,
            'actividad'     => $actividad,
            'fecha_reserva' => $fecha_reserva,
            'personas'      => $personas,
        ];

        return $this->insert($data);
    }

    public function obtener_reservas()
    {

        return $this->orderBy('fecha_reserva', 'ASC')->findAll();

    }

}
