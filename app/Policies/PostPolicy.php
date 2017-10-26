<?php

namespace App\Policies;

use App\admin_area\Admin;
use App\admin_area\Pot;
use App\Helper\Constant;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the Admin can view the post.
     *
     * @param  \App\Admin  $user
     * @param  \App\Post  $post
     * @return mixed
     */

    

    public function view(Admin $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->permissions($user,Constant::CREATE);

    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Admin $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */

    public function delete(Admin $user)
    {

        return $this->permissions($user,Constant::DELETE);

    }
    public function permissions(Admin $user, $post)
    {
                 
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission ) {
                if ($permission->id == $post) {
                    return true;
                }
            }
        }

        return false;
    }
}
