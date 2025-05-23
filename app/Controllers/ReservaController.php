<?php

namespace App\Controllers;

use App\Models\ReservaModel;

class ReservaController extends BaseController
{
    function __construct(){
        $this->reservaModel = new ReservaModel();
    }

    public function index()
    {
        $data['reservas'] = $this->reservaModel->obtener_reservas();
        
        return view('reserva',$data);
    }

    public function guardar()
    {
        $request = service('request');

        $validation = \Config\Services::validation();

        // Validacion desde Backend
        $validation->setRules([
            'nombre' => 'required',
            'email' => 'required|valid_email',
            'actividad' => 'required',
            'fecha_reserva' => 'required|valid_date[Y-m-d]',
            'personas' => 'required|integer|greater_than[0]',
        ]);

        if (!$validation->withRequest($request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Insertar
        $this->reservaModel->insertar_reserva(
            $request->getPost('nombre'),
            $request->getPost('email'),
            $request->getPost('actividad'),
            $request->getPost('fecha_reserva'),
            $request->getPost('personas')
        );

        return redirect()->to('/');
    }
}
