<?php

namespace App\Interfaces\Lichess;

use App\Http\Requests\Lichess\AccountInfoRequest;

interface TournamentsInterface
{
    /**
     * Get all informations about user on lichess
     * @access  public
     *
     */
    public function getProfile();

    /**
     * Get email from user registered on lichess
     * @access  public
     *
     */
    public function getEmailAddress();

    /**
     * Get preferences from user
     * @access  public
     *
     */
    public function getPreferences();

}
