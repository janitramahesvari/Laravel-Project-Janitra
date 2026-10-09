<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $students = [
        ['nis' => '06204', 'name' => 'Abellian Yoda', 'class' => 'XI PPLG 1'],
         ['nis' => '06205', 'name' => 'Adista Raka Pramudya', 'class' => 'XI PPLG 1'],
        ['nis' => '06206', 'name' => 'Ahmad Kenzie Javas Niscala', 'class' => 'XI PPLG 1'],
        ['nis' => '06207', 'name' => 'Al Fatih Diar Hanif', 'class' => 'XI PPLG 1'],
        ['nis' => '06208', 'name' => 'Anisa Mutiara Tunggadewi', 'class' => 'XI PPLG 1'],
        ['nis' => '06209', 'name' => 'Arga Pramudya Yusuf', 'class' => 'XI PPLG 1'],
        ['nis' => '06210', 'name' => 'Athallah Bayanaka Montazar', 'class' => 'XI PPLG 1'],
        ['nis' => '06211', 'name' => 'Bhumi Aqiel Magrabhi', 'class' => 'XI PPLG 1'],
        ['nis' => '06212', 'name' => 'Canezares Keandre Arkana Totiro', 'class' => 'XI PPLG 1'],
        ['nis' => '06213', 'name' => 'Daneal Rahmat Magrabi', 'class' => 'XI PPLG 1'],
        ['nis' => '06214', 'name' => 'Elfinka Naura Anta Zabrina', 'class' => 'XI PPLG 1'],
        ['nis' => '06215', 'name' => 'Giga Wahyu Aditya', 'class' => 'XI PPLG 1'],
        ['nis' => '06216', 'name' => 'Hilman Elfarabi', 'class' => 'XI PPLG 1'],
        ['nis' => '06217', 'name' => 'Janitra Mahesvari Tungga Dewi', 'class' => 'XI PPLG 1'],
        ['nis' => '06218', 'name' => 'Jauza Syalia Ghaisani', 'class' => 'XI PPLG 1'],
        ['nis' => '06219', 'name' => 'Jovita Theodora Atmajava', 'class' => 'XI PPLG 1'],
        ['nis' => '06220', 'name' => 'Kaisar Deno Ankabut', 'class' => 'XI PPLG 1'],
        ['nis' => '06221', 'name' => 'M. Labib Abrar', 'class' => 'XI PPLG 1'],
        ['nis' => '06222', 'name' => 'Mohammad Safaraz Lasono', 'class' => 'XI PPLG 1'],
        ['nis' => '06223', 'name' => 'Muhamad Anif Azka Raharja', 'class' => 'XI PPLG 1'],
        ['nis' => '06224', 'name' => 'Muhammad Alfarrold', 'class' => 'XI PPLG 1'],
        ['nis' => '06225', 'name' => 'Muhammad Azka Wijaya', 'class' => 'XI PPLG 1'],
        ['nis' => '06226', 'name' => 'Muhammad Dafi Ristiansyah', 'class' => 'XI PPLG 1'],
        ['nis' => '06227', 'name' => 'Muhammad Dzaki Abdurrohman', 'class' => 'XI PPLG 1'],
        ['nis' => '06228', 'name' => 'Muhammad Heydar Mascherano', 'class' => 'XI PPLG 1'],
        ['nis' => '06229', 'name' => 'Muhammad Imtihan Ramadhan', 'class' => 'XI PPLG 1'],
        ['nis' => '06230', 'name' => 'Muhammad Raynar Dzaky Ramadhan', 'class' => 'XI PPLG 1'],
        ['nis' => '06231', 'name' => 'Oscar Angelo Petrick', 'class' => 'XI PPLG 1'],
        ['nis' => '06232', 'name' => 'Pandhu Putra S.', 'class' => 'XI PPLG 1'],
        ['nis' => '06233', 'name' => 'Radhika Veda Wardhana', 'class' => 'XI PPLG 1'],
        ['nis' => '06234', 'name' => 'Rizqi Handoyo Nitimulyo', 'class' => 'XI PPLG 1'],
        ['nis' => '06235', 'name' => 'Salman Aditya Wibowo', 'class' => 'XI PPLG 1'],
        ['nis' => '06236', 'name' => 'Samuel Prasta Aditya', 'class' => 'XI PPLG 1'],
        ['nis' => '06237', 'name' => 'Stefanus Delfin Krisianto', 'class' => 'XI PPLG 1'],
        ['nis' => '06238', 'name' => 'Syabill Bramaditya Hyudiekusuma', 'class' => 'XI PPLG 1'],
        ['nis' => '06239', 'name' => 'Yan Rayn Abdullah', 'class' => 'XI PPLG 1'],
    ];

    return view('admin.student', compact('students')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
