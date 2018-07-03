<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductssssRequest;
use App\Http\Requests\UpdateproductssssRequest;
use App\Repositories\productssssRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class productssssController extends AppBaseController
{
    /** @var  productssssRepository */
    private $productssssRepository;

    public function __construct(productssssRepository $productssssRepo)
    {
        $this->productssssRepository = $productssssRepo;
    }

    /**
     * Display a listing of the productssss.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productssssRepository->pushCriteria(new RequestCriteria($request));
        $productsssses = $this->productssssRepository->all();

        return view('productsssses.index')
            ->with('productsssses', $productsssses);
    }

    /**
     * Show the form for creating a new productssss.
     *
     * @return Response
     */
    public function create()
    {
        return view('productsssses.create');
    }

    /**
     * Store a newly created productssss in storage.
     *
     * @param CreateproductssssRequest $request
     *
     * @return Response
     */
    public function store(CreateproductssssRequest $request)
    {
        $input = $request->all();

        $productssss = $this->productssssRepository->create($input);

        Flash::success('Productssss saved successfully.');

        return redirect(route('productsssses.index'));
    }

    /**
     * Display the specified productssss.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productssss = $this->productssssRepository->findWithoutFail($id);

        if (empty($productssss)) {
            Flash::error('Productssss not found');

            return redirect(route('productsssses.index'));
        }

        return view('productsssses.show')->with('productssss', $productssss);
    }

    /**
     * Show the form for editing the specified productssss.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productssss = $this->productssssRepository->findWithoutFail($id);

        if (empty($productssss)) {
            Flash::error('Productssss not found');

            return redirect(route('productsssses.index'));
        }

        return view('productsssses.edit')->with('productssss', $productssss);
    }

    /**
     * Update the specified productssss in storage.
     *
     * @param  int              $id
     * @param UpdateproductssssRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductssssRequest $request)
    {
        $productssss = $this->productssssRepository->findWithoutFail($id);

        if (empty($productssss)) {
            Flash::error('Productssss not found');

            return redirect(route('productsssses.index'));
        }

        $productssss = $this->productssssRepository->update($request->all(), $id);

        Flash::success('Productssss updated successfully.');

        return redirect(route('productsssses.index'));
    }

    /**
     * Remove the specified productssss from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productssss = $this->productssssRepository->findWithoutFail($id);

        if (empty($productssss)) {
            Flash::error('Productssss not found');

            return redirect(route('productsssses.index'));
        }

        $this->productssssRepository->delete($id);

        Flash::success('Productssss deleted successfully.');

        return redirect(route('productsssses.index'));
    }
}
