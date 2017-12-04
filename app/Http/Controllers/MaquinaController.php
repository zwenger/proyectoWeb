<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaquinaRequest;
use App\Http\Requests\UpdateMaquinaRequest;
use App\Repositories\MaquinaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\TipoMaquina;

class MaquinaController extends AppBaseController
{
    /** @var  MaquinaRepository */
    private $maquinaRepository;

    public function __construct(MaquinaRepository $maquinaRepo)
    {
        $this->maquinaRepository = $maquinaRepo;
    }

    /**
     * Display a listing of the Maquina.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->maquinaRepository->pushCriteria(new RequestCriteria($request));
        $maquinas = $this->maquinaRepository->all();

        return view('maquinas.index')
            ->with('maquinas', $maquinas);
    }

    /**
     * Show the form for creating a new Maquina.
     *
     * @return Response
     */
    public function create()
    {
        $tipos=TipoMaquina::pluck('tipo','id');
        return view('maquinas.create',compact('tipos'));
    }

    /**
     * Store a newly created Maquina in storage.
     *
     * @param CreateMaquinaRequest $request
     *
     * @return Response
     */
    public function store(CreateMaquinaRequest $request)
    {
        $input = $request->all();

        $maquina = $this->maquinaRepository->create($input);

        Flash::success('Maquina saved successfully.');

        return redirect(route('maquinas.index'));
    }

    /**
     * Display the specified Maquina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $maquina = $this->maquinaRepository->findWithoutFail($id);

        if (empty($maquina)) {
            Flash::error('Maquina not found');

            return redirect(route('maquinas.index'));
        }

        return view('maquinas.show')->with('maquina', $maquina);
    }

    /**
     * Show the form for editing the specified Maquina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $maquina = $this->maquinaRepository->findWithoutFail($id);

        if (empty($maquina)) {
            Flash::error('Maquina not found');

            return redirect(route('maquinas.index'));
        }

        return view('maquinas.edit')->with('maquina', $maquina);
    }

    /**
     * Update the specified Maquina in storage.
     *
     * @param  int              $id
     * @param UpdateMaquinaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaquinaRequest $request)
    {
        $maquina = $this->maquinaRepository->findWithoutFail($id);

        if (empty($maquina)) {
            Flash::error('Maquina not found');

            return redirect(route('maquinas.index'));
        }

        $maquina = $this->maquinaRepository->update($request->all(), $id);

        Flash::success('Maquina updated successfully.');

        return redirect(route('maquinas.index'));
    }

    /**
     * Remove the specified Maquina from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $maquina = $this->maquinaRepository->findWithoutFail($id);

        if (empty($maquina)) {
            Flash::error('Maquina not found');

            return redirect(route('maquinas.index'));
        }

        $this->maquinaRepository->delete($id);

        Flash::success('Maquina deleted successfully.');

        return redirect(route('maquinas.index'));
    }
}
