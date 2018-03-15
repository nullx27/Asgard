<?php

namespace Asgard\Policies;

use Asgard\Models\User;
use Asgard\Models\Setting;
use Asgard\Support\SuperAdminPolicyTrait;
use Illuminate\Auth\Access\HandlesAuthorization;

class SettingPolicy
{
    use HandlesAuthorization, SuperAdminPolicyTrait;

    public function index(User $user)
    {
        return $user->isA('admin');
    }

    /**
     * Determine whether the user can view the setting.
     *
     * @param  \Asgard\Models\User  $user
     * @param  \Asgard\Models\Setting  $setting
     * @return mixed
     */
    public function view(User $user, Setting $setting)
    {
        return $user->isA('admin');
    }

    /**
     * Determine whether the user can create settings.
     *
     * @param  \Asgard\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isA('admin');
    }

    /**
     * Determine whether the user can update the setting.
     *
     * @param  \Asgard\Models\User  $user
     * @param  \Asgard\Models\Setting  $setting
     * @return mixed
     */
    public function update(User $user, Setting $setting)
    {
        return $user->isA('admin');
    }

    /**
     * Determine whether the user can delete the setting.
     *
     * @param  \Asgard\Models\User  $user
     * @param  \Asgard\Models\Setting  $setting
     * @return mixed
     */
    public function delete(User $user, Setting $setting)
    {
        return $user->isA('admin');
    }
}