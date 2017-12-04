<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoMaquinaRequest;
use App\Http\Requests\UpdateTipoMaquinaRequest;
use App\Repositories\TipoMaquinaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoMaquinaController extends AppBaseController
{
    /** @var  TipoMaquinaRepository */
    private $tipoMaquinaRepository;

    public function __construct(TipoMaquinaRepository $tipoMaquinaRepo)
    {
        $this->tipoMaquinaRepository = $tipoMaquinaRepo;
    }

    /**
     * Display a listing of the TipoMaquina.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoMaquinaRepository->pushCriteria(new RequestCriteria($request));
        $tipoMaquinas = $this->tipoMaquinaRepository->all();

        return view('tipo_maquinas.index')
            ->with('tipoMaquinas', $tipoMaquinas);
    }

    /**
     * Show the form for creating a new TipoMaquina.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_maquinas.create');
    }

    /**
     * Store a newly created TipoMaquina in storage.
     *
     * @param CreateTipoMaquinaRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoMaquinaRequest $request)
    {
        $input = $request->all();

        $tipoMaquina = $this->tipoMaquinaRepository->create($input);

        Flash::success('Tipo Maquina saved successfully.');

        return redirect(route('tipoMaquinas.index'));
    }

    /**
     * Display the specified TipoMaquina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoMaquina = $this->tipoMaquinaRepository->findWithoutFail($id);

        if (empty($tipoMaquina)) {
            Flash::error('Tipo Maquina not found');

            return redirect(route('tipoMaquinas.index'));
        }

        return view('tipo_maquinas.show')->with('tipoMaquina', $tipoMaquina);
    }

    /**
     * Show the form for editing the specified TipoMaquina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoMaquina = $this->tipoMaquinaRepository->findWithoutFail($id);

        if (empty($tipoMaquina)) {
            Flash::error('Tipo Maquina not found');

            return redirect(route('tipoMaquinas.index'));
        }

        return view('tipo_maquinas.edit')->with('tipoMaquina', $tipoMaquina);
    }

    /**
     * Update the specified TipoMaquina in storage.
     *
     * @param  int              $id
     * @param UpdateTipoMaquinaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoMaquinaRequest $request)
    {
        $tipoMaquina = $this->tipoMaquinaRepository->findWithoutFail($id);

        if (empty($tipoMaquina)) {
            Flash::error('Tipo Maquina not found');

            return redirect(route('tipoMaquinas.index'));
        }

        $tipoMaquina = $this->tipoMaquinaRepository->update($request->all(), $id);

        Flash::success('Tipo Maquina updated successfully.');

        return redirect(route('tipoMaquinas.index'));
    }

    /**
     * Remove the specified TipoMaquina from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoMaquina = $this->tipoMaquinaRepository->findWithoutFail($id);

        if (empty($tipoMaquina)) {
            Flash::error('Tipo Maquina not found');

            return redirect(route('tipoMaquinas.index'));
        }

        $this->tipoMaquinaRepository->delete($id);

        Flash::success('Tipo Maquina deleted successfully.');

        return redirect(route('tipoMaquinas.index'));
    }
}
