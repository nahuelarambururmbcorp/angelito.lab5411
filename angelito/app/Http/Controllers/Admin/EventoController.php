<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\Storage;

class EventoController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $eventos = Evento::get();

        return $this->view('eventos.index', compact('eventos'));

    }

    public function create()
    {
        return $this->view('eventos.create_edit');
    }

    public function edit($id)
{
    $event = Evento::findOrFail($id);

    return $this->view('eventos.create_edit', compact('event'));
}

public function store(Request $request)
{
    $data = $request->all(); // Obtiene todos los datos del request

    if ($request->hasFile('imagen')) {
        // Guarda la imagen y obtiene la ruta
        $data['imagen'] = $request->file('imagen')->store('eventos', 'public');
    }

    Evento::create($data);

    return redirect()->route('eventos.index')->with('success', 'Evento creado exitosamente.');
}

public function update(Request $request, $id)
{
    $evento = Evento::findOrFail($id);

    $data = $request->all(); // Obtiene todos los datos del request

    if ($request->hasFile('imagen')) {
        // Elimina la imagen anterior si existe
        if ($evento->imagen) {
            Storage::disk('public')->delete($evento->imagen);
        }

        // Guarda la nueva imagen y obtiene la ruta

        $data['imagen'] = $request->file('imagen')->store('eventos', 'public');
    }

    $evento->update($data);

    return redirect()->route('eventos.index')->with('success', 'Evento actualizado exitosamente.');
}

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }



    public function destroy($id)
    {
        // Encuentra el registro por su ID
        $evento = Evento::find($id);
    
        // Verifica si el evento existe
        if ($evento) {
            // Elimina el evento
            $evento->delete();
    
            // Retorna una respuesta (por ejemplo, una redirección con un mensaje de éxito)
            return redirect()->route('eventos.index')->with('success', 'Evento eliminado exitosamente.');
        } else {
            // Retorna una respuesta de error si no se encuentra el evento
            return redirect()->route('eventos.index')->with('error', 'Evento no encontrado.');
        }
    }
}
