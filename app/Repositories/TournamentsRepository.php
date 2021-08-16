<?php

namespace App\Repositories;

use App\Http\Requests\TournamentsRequest;
use App\Interfaces\TournamentsInterface;
use App\Tournaments;
use App\Traits\Responses;
use Illuminate\Database\QueryException;

class TournamentsRepository implements TournamentsInterface
{
    use Responses;

    /**
     * Return all the tournaments from database
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            return $this->success('success', Tournaments::all());
        } catch (QueryException $e) {
            return $this->error('error', $e->getMessage());
        }
    }

    /**
     * Add a new tournament into database
     * @param TournamentsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TournamentsRequest $request)
    {
        try {
            return $this->success('success', Tournaments::create($request->all()));
        } catch (QueryException $e) {
            return $this->error('error', $e->getMessage());
        }
    }

    /**
     * Show a tournament
     * @param String $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try{
            return $this->success('success', Tournaments::where('id', $id)->first());
        }catch(QueryException $e){
            return $this->error('error', $e->getMessage());
        }

    }

    /**
     * Update a tournament
     * @param int $id
     * @param TournamentsRequest $request
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function update($id, TournamentsRequest $request)
    {
        try{
            return $this->success('success', Tournaments::where('id', $id)->update($request->all()));
        }catch(QueryException $e){
            return $this->error('error', $e->getMessage());
        }
    }

    /**
     *
     * @param String $id
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function destroy($id)
    {
        try{
            return $this->success('success', Tournaments::where('id', $id)->update('status', 'disabled'));
        }catch(QueryException $e){
            return $this->error('error', $e->getMessage());
        }
    }
}
