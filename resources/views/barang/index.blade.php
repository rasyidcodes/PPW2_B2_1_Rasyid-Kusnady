<!-- resources/views/barang/index.blade.php -->

@extends('layouts.master')

@section('title', 'Data Barang')

@section('content')
    <h1 class="px-16 mt-8 mb-8 text-bold font-weight-bold text-[30px]">Data Barang</h1>

    
<div class="relative overflow-x-auto px-16">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 p-8">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Barang
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Stok
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($barang as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">{{ $item->id }}</td>
                <td class="px-6 py-4">{{ $item->nama_barang }}</td>
                <td class="px-6 py-4">{{ $item->harga }}</td>
                <td class="px-6 py-4">{{ $item->stok }}</td>
            </tr>
            @endforeach
        </tbody>

        
    </table>
</div>



@endsection
