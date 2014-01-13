<?php

class ControllerMembre extends BaseController {

	/**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.membre';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Session::flash('alertes', array(new Alerte(),new Alerte('danger')));
		$this->layout->content = View::make('membres.index')
			->with('membres',Membre::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		/*DB::table('membre')->insert(array(
    		array('nom' => 'taylor', 'prenom' => 'jack','email' => 'taylor@example.com', 'identifiant' => 'taylor'),
    		array('nom' => 'dayle', 'prenom' => 'taylor','email' => 'dayle@example.com', 'identifiant' => 'dayle'),
		));*/
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
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

	/*public function inscription(){
		$this->layout->content = View::make('layouts.formulaire')
			->with('layout','membre')
			->with('form','inscription');
	}

	public function connexion(){
		$this->layout->content = View::make('layouts.formulaire')
			->with('layout','membre')
			->with('form','connexion');
	}*/

}