<?php

class TrainingController extends BaseController {

	public function getIndex()
	{
		$data = [
			'title' => 'Training Center',
            'user' => new \Zbw\Repositories\UserRepository(Auth::user()->cid),
		];
		return View::make('training.index', $data);
	}

    public function showAdmin($id)
    {
        $ts = ControllerTraining::
            with(['student', 'location', 'staff', 'complexityType', 'weatherType', 'workloadType'])
            ->find($id);
        $data = [
            'title' => 'View Training Session',
            'tsession' => $ts,
            'student' => $ts->student,
            'staff' => $ts->staff,
            'location' => $ts->location
        ];
        return View::make('staff.training.session', $data);
    }

    public function getRequest()
    {
        $ur = new \Zbw\Repositories\UserRepository(\Auth::user()->cid);
        $data = [
            'title' => 'Request Training Session',
            'available' => $ur->availableExams()
        ];
        return View::make('training.request', $data);
    }

    public function showRequest($tid)
    {
        $request = \TrainingRequest::with(['student', 'certType', 'staff'])->find($tid);
        $ur = new \Zbw\Repositories\UserRepository($request->student->cid);
        $data = [
            'title' => 'View Training Request',
            'student' => $ur->getUser(),
            'request' => $request
        ];
        return View::make('training.show-request', $data);
    }

}
