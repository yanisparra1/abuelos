<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Abuelo;
use Illuminate\Auth\Access\HandlesAuthorization;

class AbueloPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Abuelo');
    }

    public function view(AuthUser $authUser, Abuelo $abuelo): bool
    {
        return $authUser->can('View:Abuelo');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Abuelo');
    }

    public function update(AuthUser $authUser, Abuelo $abuelo): bool
    {
        return $authUser->can('Update:Abuelo');
    }

    public function delete(AuthUser $authUser, Abuelo $abuelo): bool
    {
        return $authUser->can('Delete:Abuelo');
    }

    public function restore(AuthUser $authUser, Abuelo $abuelo): bool
    {
        return $authUser->can('Restore:Abuelo');
    }

    public function forceDelete(AuthUser $authUser, Abuelo $abuelo): bool
    {
        return $authUser->can('ForceDelete:Abuelo');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Abuelo');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Abuelo');
    }

    public function replicate(AuthUser $authUser, Abuelo $abuelo): bool
    {
        return $authUser->can('Replicate:Abuelo');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Abuelo');
    }

}