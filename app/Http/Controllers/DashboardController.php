<?php

namespace App\Http\Controllers;

use App\Models\ContactInput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil semua data kontak
        $contactinputs = ContactInput::all();

        // Total kunjungan
        $today = DB::table('visitors')->whereDate('visit_date', now())->count();
        $month = DB::table('visitors')->whereMonth('visit_date', now()->month)->count();
        $total = DB::table('visitors')->count();

        // Statistik 7 hari terakhir (otomatis isi 0 jika tidak ada data)
        $rawData = DB::table('visitors')
            ->select(DB::raw('DATE(visit_date) as date'), DB::raw('COUNT(*) as total'))
            ->where('visit_date', '>=', Carbon::now()->subDays(6))
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->pluck('total', 'date')
            ->toArray();

        $last7Days = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->toDateString();
            $last7Days[$date] = $rawData[$date] ?? 0;
        }

        // Statistik 12 bulan terakhir (otomatis isi 0 jika kosong)
        $rawMonths = DB::table('visitors')
            ->select(DB::raw('MONTH(visit_date) as month'), DB::raw('COUNT(*) as total'))
            ->where('visit_date', '>=', Carbon::now()->subMonths(11))
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->pluck('total', 'month')
            ->toArray();

        $last12Months = [];
        for ($i = 11; $i >= 0; $i--) {
            $monthNum = Carbon::now()->subMonths($i)->month;
            $monthName = Carbon::now()->subMonths($i)->format('M');
            $last12Months[$monthName] = $rawMonths[$monthNum] ?? 0;
        }

        // Kirim semua data ke view
        return view('admin.dashboard', compact(
            'contactinputs',
            'today',
            'month',
            'total',
            'last7Days',
            'last12Months'
        ));
    }

    public function destroy($id)
    {
        $contact = ContactInput::findOrFail($id);
        $contact->delete();

        return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus');
    }
}
