<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatechefRequest;
use App\Http\Requests\UpdatechefRequest;
use App\Repositories\chefRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class chefController extends AppBaseController
{
    /** @var chefRepository $chefRepository*/
    private $chefRepository;

    public function __construct(chefRepository $chefRepo)
    {
        $this->chefRepository = $chefRepo;
    }

    /**
     * Display a listing of the chef.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $chefs = $this->chefRepository->all();

        return view('chefs.index')
            ->with('chefs', $chefs);
    }

    /**
     * Show the form for creating a new chef.
     *
     * @return Response
     */
    public function create()
    {
        return view('chefs.create');
    }

    /**
     * Store a newly created chef in storage.
     *
     * @param CreatechefRequest $request
     *
     * @return Response
     */
    public function store(CreatechefRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([

                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/foto_chef'), $imageName);

            $path = "foto_chef/" . $imageName;
        }

        $input['foto'] = $path;
        $chef = $this->chefRepository->create($input);

        Flash::success('Chef saved successfully.');

        return redirect(route('chefs.index'));
    }

    /**
     * Display the specified chef.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $chef = $this->chefRepository->find($id);

        if (empty($chef)) {
            Flash::error('Chef not found');

            return redirect(route('chefs.index'));
        }

        return view('chefs.show')->with('chef', $chef);
    }

    /**
     * Show the form for editing the specified chef.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chef = $this->chefRepository->find($id);

        if (empty($chef)) {
            Flash::error('Chef not found');

            return redirect(route('chefs.index'));
        }

        return view('chefs.edit')->with('chef', $chef);
    }

    /**
     * Update the specified chef in storage.
     *
     * @param int $id
     * @param UpdatechefRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatechefRequest $request)
    {
        $chef = $this->chefRepository->find($id);

        if (empty($chef)) {
            Flash::error('Chef not found');

            return redirect(route('chefs.index'));
        }
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([

                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/foto_chef'), $imageName);

            $path = "foto_chef/" . $imageName;
            $input['foto'] = $path;
        }
        $chef = $this->chefRepository->update($input, $id);

        Flash::success('Chef updated successfully.');

        return redirect(route('chefs.index'));
    }

    /**
     * Remove the specified chef from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chef = $this->chefRepository->find($id);

        if (empty($chef)) {
            Flash::error('Chef not found');

            return redirect(route('chefs.index'));
        }

        $this->chefRepository->delete($id);

        Flash::success('Chef deleted successfully.');

        return redirect(route('chefs.index'));
    }
}
