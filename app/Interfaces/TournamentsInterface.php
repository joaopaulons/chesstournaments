<?php

namespace App\Interfaces;

use App\Http\Requests\TournamentsRequest;

interface TournamentsInterface
{
    /**
     * Get all the registered tournaments
     *
     * @access  public
     */
    public function index();

    /**
     * Add a new tournament
     *
     * @access  public
     * @param TournamentsRequest $request
     */
    public function store(TournamentsRequest $request);

    /**
     * Get one tournament
     * @access  public
     * @param String $id
     */
    public function show($id);


    /**
     * @param $id
     * @param TournamentsRequest $request
     * @return mixed
     */
    public function update($id, TournamentsRequest $request);

    /**
     * Stop showing a tournament
     * @param String $id
     * @return mixed
     */
    public function destroy($id);

}
