<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDevoirRequest;
use App\Http\Requests\UpdateDevoirRequest;
use App\Repositories\DevoirRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DevoirController extends AppBaseController
{
    /** @var  DevoirRepository */
    private $devoirRepository;

    public function __construct(DevoirRepository $devoirRepo)
    {
        $this->devoirRepository = $devoirRepo;
    }

    /**
     * Display a listing of the Devoir.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $devoirs = $this->devoirRepository->all();

        return view('devoirs.index')
            ->with('devoirs', $devoirs);
    }

    /**
     * Show the form for creating a new Devoir.
     *
     * @return Response
     */
    public function create()
    {
        return view('devoirs.create');
    }

    /**
     * Store a newly created Devoir in storage.
     *
     * @param CreateDevoirRequest $request
     *
     * @return Response
     */
    public function store(CreateDevoirRequest $request)
    {
        $input = $request->all();

        $devoir = $this->devoirRepository->create($input);

        Flash::success('Devoir saved successfully.');

        return redirect(route('devoirs.index'));
    }

    /**
     * Display the specified Devoir.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $devoir = $this->devoirRepository->find($id);

        if (empty($devoir)) {
            Flash::error('Devoir not found');

            return redirect(route('devoirs.index'));
        }

        return view('devoirs.show')->with('devoir', $devoir);
    }

    /**
     * Show the form for editing the specified Devoir.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $devoir = $this->devoirRepository->find($id);

        if (empty($devoir)) {
            Flash::error('Devoir not found');

            return redirect(route('devoirs.index'));
        }

        return view('devoirs.edit')->with('devoir', $devoir);
    }

    /**
     * Update the specified Devoir in storage.
     *
     * @param int $id
     * @param UpdateDevoirRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDevoirRequest $request)
    {
        $devoir = $this->devoirRepository->find($id);

        if (empty($devoir)) {
            Flash::error('Devoir not found');

            return redirect(route('devoirs.index'));
        }

        $devoir = $this->devoirRepository->update($request->all(), $id);

        Flash::success('Devoir updated successfully.');

        return redirect(route('devoirs.index'));
    }

    /**
     * Remove the specified Devoir from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $devoir = $this->devoirRepository->find($id);

        if (empty($devoir)) {
            Flash::error('Devoir not found');

            return redirect(route('devoirs.index'));
        }

        $this->devoirRepository->delete($id);

        Flash::success('Devoir deleted successfully.');

        return redirect(route('devoirs.index'));
    }
}
