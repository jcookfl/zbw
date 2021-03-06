<?php namespace Zbw\Http\Controllers;

use Illuminate\Session\Store;
use Page;
use Zbw\Cms\Contracts\MenusRepositoryInterface;
use Zbw\Cms\Contracts\PagesRepositoryInterface;

class PagesController extends BaseController
{

    private $pages;
    private $menus;

    public function __construct(PagesRepositoryInterface $pages, MenusRepositoryInterface $menus, Store $session)
    {
        parent::__construct($session);
        $this->pages = $pages;
        $this->menus = $menus;
    }

    public function getIndex()
    {
        $v = $this->request->get('v');
        $data = [
            'v'     => $v,
            'pages' => $this->pages->all(),
            'menus' => $this->menus->all()
        ];
        if ($this->request->has('id')) {
            $page = $this->pages->get($this->request->get('id'));
            $data['page'] = $page;
        }

        return \View::make('staff.pages.index', $data);
    }

    public function getPage($slug)
    {
        $page = $this->pages->slug($slug);
        if (! $page instanceof Page) {
            return \View::make('zbw.errors.404');
        }
        if ($page->audience_type_id == 4 && ! \Sentry::getUser()->inGroup(\Sentry::findGroupByName('Staff'))) {
            $data = [
                'page'   => \Request::url(),
                'needed' => 'Staff'
            ];

            return \View::make('zbw.errors.403', $data);
        }
        $data = [
            'page' => $page
        ];

        return \View::make('cms.pages.show', $data);
    }

    public function getCreate()
    {
        return \View::make('staff.pages.create');
    }

    public function postCreate()
    {
        if ($this->pages->create($this->request->all())) {
            return \Redirect::route('staff/pages')->with('flash_success', 'Page created successfully');
        } else {
            return \Redirect::back()->with('flash_error', 'Error creating page');
        }
    }

    public function postEdit()
    {
        if ($this->pages->update($this->request->all())) {
            return \Redirect::route('staff/pages')->with('flash_success', 'Page updated successfully');
        } else {
            return \Redirect::back()->with('flash_error', 'Error updating page');
        }
    }

    public function getMenus()
    {
        return \View::make('staff.pages.menus');
    }

    public function getTrash()
    {
        return \View::make('staff.pages.trash');
    }

    public function getShow()
    {
        return \View::make('staff.pages.show');
    }
}
