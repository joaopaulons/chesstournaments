<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentsRequest;
use App\Interfaces\TournamentsInterface;

class TournamentsController extends Controller
{
    private $iTournaments;

    public function __construct(TournamentsInterface $iTournaments)
    {
        $this->iTournaments = $iTournaments;
    }

    /**
     * Return all the tournaments
     * @return mixed
     */
    public function index()
    {
        return $this->iTournaments->index();
    }

    /**
     * Add a new tournament
     * @param TournamentsRequest $request
     * @return mixed
     */
    public function store(TournamentsRequest $request)
    {
        return $this->iTournaments->store($request);
    }

    /**
     * Display a tournament.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->iTournaments->show($id);
    }

    /**
     * Update a tournament.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, TournamentsRequest $request)
    {
      return $this->iTournaments->update($id, $request);
    }

    /**
     * Stop showing one tournamnet
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->iTournaments->destroy($id);
    }
}
