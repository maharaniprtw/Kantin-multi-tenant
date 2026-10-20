<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminTenantStatusController extends Controller
{
    /**
     * Memperbarui status tenant.
     */
    public function __invoke(Request $request, Tenant $tenant): RedirectResponse
    {
        // 1. Otorisasi (Policy)
        $this->authorize('update', $tenant);

        // 2. Validasi input status
        $validated = $request->validate([
            'status' => ['required', 'string', 'in:active,inactive'],
        ]);

        // 3. Update status tenant
        $tenant->update([
            'status' => $validated['status'],
        ]);

        return back()->with('status', 'Status tenant berhasil diperbarui.');
    }
}