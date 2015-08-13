<?php namespace MiCatalogo\Http\Controllers\admin;

use Illuminate\Support\Facades\Session;
use MiCatalogo\Http\Requests;
use MiCatalogo\Http\Controllers\Controller;
use MiCatalogo\Model\Genre as Genre;

use MiCatalogo\Http\Requests\CreateGenreRequest;
use MiCatalogo\Http\Requests\EditGenreRequest;

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

        return view('admin.genre.create', compact("title", "genre"));
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param CreateGenreRequest $request
     * @return Response
	 */
	public function store(CreateGenreRequest $request)
	{
        Genre::create($request->all());

        return \Redirect::to('admin/genres')->with('message', 'El genero ha sido agregado.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		dd($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        $genre = Genre::find($id);
        $title = "Editar el genero '" . $genre->name . "'";

        return view('admin.genre.edit', compact("title", "genre"));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditGenreRequest $request, $id)
	{
		$genre = Genre::findOrFail($id);

        $genre->fill($request->all());
        $genre->save();

        Session::flash('message','El registro No. ' .$genre->id . 'se actualizo.');
        return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $genre = Genre::findOrFail($id);

        $genre->delete();

        Session::flash('message', $genre->name . ' fue eliminado de nuestros registros.');

        return redirect()->route('admin.genres.index');
	}

}