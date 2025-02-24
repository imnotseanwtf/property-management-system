<?php

namespace App\Http\Controllers;

use App\DataTables\TenantDataTable;
use App\Enums\UserType;
use App\Http\Requests\Tenant\StoreTenantRequest;
use App\Http\Requests\Tenant\UpdateTenantRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TenantDataTable $tenantDataTable)
    {
        return $tenantDataTable->render('tenant.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTenantRequest $storeTenantRequest): RedirectResponse
    {
        User::create($storeTenantRequest->except('picture') + [
            'picture' => $storeTenantRequest->file('picture')->store('user/images', 'public')
        ])->assignRole(UserType::Tenant);

        alert()->success('Tenant Stored Successfully!');

        return redirect()->route('tenant.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $tenant)
    {
        return view('tenant.view', compact('tenant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTenantRequest $updateTenantRequest, User $tenant): RedirectResponse
    {
        if ($updateTenantRequest->password) {
            $tenant->update(['password' => $updateTenantRequest->password]);
        }

        if ($updateTenantRequest->hasFile('picture')) {
            Storage::disk('public')->delete($tenant->picure);

            $tenant->update(['picture' => $updateTenantRequest->file('picture')->store('user/images', 'public')]);
        }

        $tenant->update($updateTenantRequest->except('password'));

        alert()->success('Tenant Updated Successfully!');

        return redirect()->route('tenant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $tenant): RedirectResponse
    {
        $tenant->delete();
        Storage::disk('public')->delete($tenant->picure);

        alert()->success('Tenant Deleted Successfully!');

        return redirect()->route('tenant.index');
    }
}
