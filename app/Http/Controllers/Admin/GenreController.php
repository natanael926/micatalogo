<?php namespace MiCatalogo\Http\Controllers\admin;

use Illuminate\Support\Facades\Redirect;
use MiCatalogo\Http\Requests;
use MiCatalogo\Http\Controllers\Controller;
use MiCatalogo\Model\Genre as Genre;

use Illuminate\Http\Request;

class GenreController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return  void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $genres = Genre::all();

        $title = 'Generos';
        $lineApp = array('inicio', 'generos');

        return view('admin.genre.index', compact("genres", "title", "lineApp"));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $title = "Agregar nuevo genero";
        $genre = new Genre();

        return view('admin.genre.save', compact("title", "genre"));
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param Request $request
     * @return Response
	 */
	public function store(Request $request)
	{
        $data = $request->all();

        $ruls

        $genre = new Genre($request->all());
        $genre->save();

        return Redirect::to('admin/genres');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
