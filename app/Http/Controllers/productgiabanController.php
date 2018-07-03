<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductgiabanRequest;
use App\Http\Requests\UpdateproductgiabanRequest;
use App\Repositories\productgiabanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class productgiabanController extends AppBaseController
{
    /** @var  productgiabanRepository */
    private $productgiabanRepository;

    public function __construct(productgiabanRepository $productgiabanRepo)
    {
        $this->productgiabanRepository = $productgiabanRepo;
    }

    /**
     * Display a listing of the productgiaban.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productgiabanRepository->pushCriteria(new RequestCriteria($request));
        $productgiabans = $this->productgiabanRepository->all();

        return view('productgiabans.index')
            ->with('productgiabans', $productgiabans);
    }

    /**
     * Show the form for creating a new productgiaban.
     *
     * @return Response
     */
    public function create()
    {
        return view('productgiabans.create');
    }

    /**
     * Store a newly created productgiaban in storage.
     *
     * @param CreateproductgiabanRequest $request
     *
     * @return Response
     */
    public function store(CreateproductgiabanRequest $request)
    {
        $input = $request->all();

        $productgiaban = $this->productgiabanRepository->create($input);

        Flash::success('Productgiaban saved successfully.');

        return redirect(route('productgiabans.index'));
    }

    /**
     * Display the specified productgiaban.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productgiaban = $this->productgiabanRepository->findWithoutFail($id);

        if (empty($productgiaban)) {
            Flash::error('Productgiaban not found');

            return redirect(route('productgiabans.index'));
        }

        return view('productgiabans.show')->with('productgiaban', $productgiaban);
    }

    /**
     * Show the form for editing the specified productgiaban.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productgiaban = $this->productgiabanRepository->findWithoutFail($id);

        if (empty($productgiaban)) {
            Flash::error('Productgiaban not found');

            return redirect(route('productgiabans.index'));
        }

        return view('productgiabans.edit')->with('productgiaban', $productgiaban);
    }

    /**
     * Update the specified productgiaban in storage.
     *
     * @param  int              $id
     * @param UpdateproductgiabanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductgiabanRequest $request)
    {
        $productgiaban = $this->productgiabanRepository->findWithoutFail($id);

        if (empty($productgiaban)) {
            Flash::error('Productgiaban not found');

            return redirect(route('productgiabans.index'));
        }

        $productgiaban = $this->productgiabanRepository->update($request->all(), $id);

        Flash::success('Productgiaban updated successfully.');

        return redirect(route('productgiabans.index'));
    }

    /**
     * Remove the specified productgiaban from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productgiaban = $this->productgiabanRepository->findWithoutFail($id);

        if (empty($productgiaban)) {
            Flash::error('Productgiaban not found');

            return redirect(route('productgiabans.index'));
        }

        $this->productgiabanRepository->delete($id);

        Flash::success('Productgiaban deleted successfully.');

        return redirect(route('productgiabans.index'));
    }
}
