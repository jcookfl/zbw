<?php

namespace Zbw\Http\Controllers;

use Illuminate\Session\Store;
use Zbw\Http\Controllers\BaseController;
use Zbw\Notifier\EmailTemplateRepository;

class EmailController extends BaseController
{
    private $emails;

    public function __construct(EmailTemplateRepository $emails, Store $session)
    {
        $this->emails = $emails;
        parent::__construct($session);
    }

    public function getIndex()
    {
        $this->setData('templates', $this->emails->listAll());
        return $this->view('staff.emails.index');
    }

    public function getEdit()
    {
        $template = $this->request->get('template');
        $contents = \File::get(app_path('/views/zbw/emails/' . $template));

        $this->setData('contents', $contents);
        $this->setData('filename', $template);
        return $this->view('staff.emails.edit');
    }

    public function postEdit()
    {
        $file = $this->request->get('filename');
        $contents = $this->request->get('contents');
        \File::put(app_path('/views/zbw/emails/' . $file), $contents);
        return \Redirect::route('staff.emails')->with('flash_success', 'Template updated');
    }
}
