<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Histmedico;
use Illuminate\Auth\Access\HandlesAuthorization;

class HistmedicoPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Histmedico');
    }

    public function view(AuthUser $authUser, Histmedico $histmedico): bool
    {
        return $authUser->can('View:Histmedico');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Histmedico');
    }

    public function update(AuthUser $authUser, Histmedico $histmedico): bool
    {
        return $authUser->can('Update:Histmedico');
    }

    public function delete(AuthUser $authUser, Histmedico $histmedico): bool
    {
        return $authUser->can('Delete:Histmedico');
    }

    public function restore(AuthUser $authUser, Histmedico $histmedico): bool
    {
        return $authUser->can('Restore:Histmedico');
    }

    public function forceDelete(AuthUser $authUser, Histmedico $histmedico): bool
    {
        return $authUser->can('ForceDelete:Histmedico');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Histmedico');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Histmedico');
    }

    public function replicate(AuthUser $authUser, Histmedico $histmedico): bool
    {
        return $authUser->can('Replicate:Histmedico');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Histmedico');
    }

}