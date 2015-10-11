<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePlaceRequest;
use App\Http\Requests\UpdatePlaceRequest;
use App\Libraries\Repositories\PlaceRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class PlaceController extends AppBaseController
{

	/** @var  PlaceRepository */
	private $placeRepository;

	function __construct(PlaceRepository $placeRepo)
	{
		$this->placeRepository = $placeRepo;
	}

	/**
	 * Display a listing of the Place.
	 *
	 * @return Response
	 */
	public function index()
	{
		$places = $this->placeRepository->paginate(10);

		return view('places.index')
			->with('places', $places);
	}

	/**
	 * Show the form for creating a new Place.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('places.create');
	}

	/**
	 * Store a newly created Place in storage.
	 *
	 * @param CreatePlaceRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePlaceRequest $request)
	{
		$input = $request->all();

		$place = $this->placeRepository->create($input);

		Flash::success('Place saved successfully.');

		return redirect(route('places.index'));
	}

	/**
	 * Display the specified Place.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$place = $this->placeRepository->find($id);

		if(empty($place))
		{
			Flash::error('Place not found');

			return redirect(route('places.index'));
		}

		return view('places.show')->with('place', $place);
	}

	/**
	 * Show the form for editing the specified Place.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$place = $this->placeRepository->find($id);

		if(empty($place))
		{
			Flash::error('Place not found');

			return redirect(route('places.index'));
		}

		return view('places.edit')->with('place', $place);
	}

	/**
	 * Update the specified Place in storage.
	 *
	 * @param  int              $id
	 * @param UpdatePlaceRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatePlaceRequest $request)
	{
		$place = $this->placeRepository->find($id);

		if(empty($place))
		{
			Flash::error('Place not found');

			return redirect(route('places.index'));
		}

		$place = $this->placeRepository->updateRich($request->all(), $id);

		Flash::success('Place updated successfully.');

		return redirect(route('places.index'));
	}

	/**
	 * Remove the specified Place from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$place = $this->placeRepository->find($id);

		if(empty($place))
		{
			Flash::error('Place not found');

			return redirect(route('places.index'));
		}

		$this->placeRepository->delete($id);

		Flash::success('Place deleted successfully.');

		return redirect(route('places.index'));
	}
}
