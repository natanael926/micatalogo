<?php namespace MiCatalogo\Http\Requests;

use Illuminate\Routing\Route;
use MiCatalogo\Http\Requests\Request;

class EditGenreRequest extends Request {

    /**
     * @var Route
     */
    private $_route;

    public function __construct(Route $route)
    {
        $this->_route = $route;
    }

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
        return [
            'name' => 'required|max:50|unique:genres,name,' . $this->_route->getParameter('genres')
        ];
	}

}
