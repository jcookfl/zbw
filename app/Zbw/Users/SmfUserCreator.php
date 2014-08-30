<?php  namespace Zbw\Users;

use Zbw\Core\SmfRestClient;

class SmfUserCreator {

    private $api;

    public function __construct()
    {
        $this->api = new SmfRestClient('WAhZHbLIKNqBZ2nVvHrs');
    }

    public function create(\User $user)
    {
        $member_id = $this->api->register_member([
              'member_name' => $user->username,
              'email' => $user->email,
              'password' => str_random(16)
          ]);
        return $member_id;
    }
}
