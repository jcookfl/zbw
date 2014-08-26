<?php

use Illuminate\Session\Store;
use Zbw\Poker\Contracts\PokerServiceInterface;
use Zbw\Poker\Exceptions\PilotNotFoundException;

class PokerController extends \BaseController {

    private $service;

    public function __construct(PokerServiceInterface $service, Store $session)
    {
        $this->service = $service;
        parent::__construct($session);
    }

    public function getIndex()
    {
        $data = [
            'pilots' => $this->service->getPilots(),
            'standings' => $this->service->getStandings()
        ];
        return View::make('staff.poker.index', $data);
    }

    public function postIndex()
    {
        try {
            $draw = $this->service->draw(\Input::all());
        } catch (PilotNotFoundException $e) {
            return Redirect::back()->with('flash_error', 'Pilot not found!');
        }

        if($draw) {
            return Redirect::back()->with(
              'flash_success',
              $draw['card'] . " drawn for pilot " . $draw['pid']
            );
        }
        else {
            return Redirect::back()->with('flash_error', \Input::get('pid') . ' must discard before they can draw a new card');
        }
    }

    public function getPilot($pid)
    {
        $data = [
            'pilot' => \PokerPilot::where('pid', $pid)->with(['cards'])->first()
        ];
        return View::make('staff.poker.pilot', $data);
    }

    public function postDiscard($pid)
    {
        $this->service->discard(\Input::get('card'));
        return Redirect::back()->with('flash_success', 'Card discarded successfully');
    }

    public function postWipe()
    {
        if($this->service->wipePilots() && $this->service->wipeCards())
        {
            return Redirect::back()->with('flash_success', 'Poker data successfully wiped out!');
        } else {
            return Redirect::back()->with('flash_error', 'Error removing poker data!');
        }
    }
}
