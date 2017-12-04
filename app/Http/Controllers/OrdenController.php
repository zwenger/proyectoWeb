<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdenRequest;
use App\Http\Requests\UpdateOrdenRequest;
use App\Repositories\OrdenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Maquina;
use App\Models\Tarea;
use App\Models\Empleado;
use App\Models\TipoMaquina;

class OrdenController extends AppBaseController
{
    /** @var  OrdenRepository */
    private $ordenRepository;

    public function __construct(OrdenRepository $ordenRepo)
    {
        $this->ordenRepository = $ordenRepo;
    }

    /**
     * Display a listing of the Orden.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ordenRepository->pushCriteria(new RequestCriteria($request));
        $ordens = $this->ordenRepository->all();

        return view('ordens.index')
            ->with('ordens', $ordens);
    }

    /**
     * Show the form for creating a new Orden.
     *
     * @return Response
     */
    public function create()
    {
        $empleados=Empleado::pluck('nombre','id');
        $tareas=Tarea::pluck('titulo','id');
        $maquinas=Maquina::pluck('nroSerie','id');
        

        return view('ordens.create',compact('empleados','tareas','maquinas'));
    }

    /**
     * Store a newly created Orden in storage.
     *
     * @param CreateOrdenRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdenRequest $request)
    {
        $input = $request->all();

        $orden = $this->ordenRepository->create($input);

        Flash::success('Orden saved successfully.');

        return redirect(route('ordens.index'));
    }

    /**
     * Display the specified Orden.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orden = $this->ordenRepository->findWithoutFail($id);

        if (empty($orden)) {
            Flash::error('Orden not found');

            return redirect(route('ordens.index'));
        }

        return view('ordens.show')->with('orden', $orden);
    }

    /**
     * Show the form for editing the specified Orden.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orden = $this->ordenRepository->findWithoutFail($id);

        if (empty($orden)) {
            Flash::error('Orden not found');

            return redirect(route('ordens.index'));
        }

        return view('ordens.edit')->with('orden', $orden);
    }

    /**
     * Update the specified Orden in storage.
     *
     * @param  int              $id
     * @param UpdateOrdenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdenRequest $request)
    {
        $orden = $this->ordenRepository->findWithoutFail($id);

        if (empty($orden)) {
            Flash::error('Orden not found');

            return redirect(route('ordens.index'));
        }

        $orden = $this->ordenRepository->update($request->all(), $id);

        Flash::success('Orden updated successfully.');

        return redirect(route('ordens.index'));
    }

    /**
     * Remove the specified Orden from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orden = $this->ordenRepository->findWithoutFail($id);

        if (empty($orden)) {
            Flash::error('Orden not found');

            return redirect(route('ordens.index'));
        }

        $this->ordenRepository->delete($id);

        Flash::success('Orden deleted successfully.');

        return redirect(route('ordens.index'));
    }
}
