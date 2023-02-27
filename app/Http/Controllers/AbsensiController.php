<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AbsensiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('layout.absensi')->with([
            'user' => $user,
        ]);
    }

    public function generate()
    {
        $admin = Auth::user();
        $code = Str::random(6);

        // Query untuk mengecek apakah sudah ada data absensi dengan status true pada database
        $absensiExists = Absensi::where('status', true)->exists();

        if ($absensiExists) {
            // Jika ada data absensi dengan status true pada database, tampilkan pesan error
            return redirect()->back()->withErrors(['msg' => 'Tidak dapat membuat absensi baru, terdapat absensi yang masih aktif']);
        } else {
            $absensi = [
                'id' => $code,
                'idAdmin' => strval($admin->id),
                'code' => $code,
                'status' => true,
                'count' => 0,
                'file' => '',
                'note' => ''
            ];

            Absensi::create($absensi);

            // Tampilkan pesan sukses dan redirect ke halaman yang diinginkan
            return redirect()->back()->with('success', 'Absensi baru telah berhasil dibuat');
        }
    }


    public function showQR()
    {
        // Cek apakah user yang sedang auth adalah admin atau level 1
        if (Auth::user()->level == 1) {
            // Ambil idAdmin dari user yang sedang di-authenticate
            $idAdmin = Auth::user()->id;

            // Query untuk mengambil data absensi yang memiliki status true, diurutkan dari yang terbaru
            $absensi = Absensi:: //where('idAdmin', $idAdmin)
            where('status', true)
                ->latest()
                ->first();
            if ($absensi == null) {
                return redirect()->back()->withErrors(['msg' => 'Tidak ada petugas yang piket, harap login kembali untuk menjadi petugas']);
            }
            // Tampilkan view dan kode QR
            return view('layout.absensi.show_qr', compact('absensi'));
        } else {
            // Jika tidak, redirect ke halaman lain atau tampilkan pesan error
            return redirect()->back()->withErrors(['msg' => 'Anda tidak diizinkan mengakses halaman ini']);
        }
    }


//    public function scanQR(Request $request)
    public function scanQR(Request $request)
    {
        $user = Auth::user();
//        $qr = $request->qr_code;
        $qr = "9h2bZa";
        $absensi = Absensi::where('code', $qr)->where('status', true)->first();

        if ($absensi) {
            $pengunjung = [
                'idUser' => $user->id,
                'codeAbsensi' => $qr,
                'status' => $user->level,
                'info' => '',
            ];

            Pengunjung::create($pengunjung);
            return redirect('/');
        } else {
            return response()->json([
                'status' => 400,
            ]);
        }
    }



    public function addPengunjung(Request $request)
    {
        $user = Auth::user();
        $qr = $request->result;
        $pengunjung = Pengunjung::where('idUser', $user->id)
            ->where('codeAbsensi', $qr)
            ->first();

        if ($pengunjung) {
            // Data sudah ada, tidak perlu diinput lagi
            return redirect('/');
        } else {
            $absensi = Absensi::where('code', $qr)->where('status', true)->first();

            if ($absensi) {
                $pengunjung = [
                    'idUser' => $user->id,
                    'codeAbsensi' => $qr,
                    'status' => $user->level,
                    'info' => '',
                ];

                Pengunjung::create($pengunjung);
                return redirect('/');
            } else {
                return response()->json([
                    'status' => 400,
                ]);
            }
        }

    }

}
