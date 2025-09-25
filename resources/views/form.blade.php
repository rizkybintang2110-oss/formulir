@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Formulir Data Mahasiswa</h2>

@if ($errors->any())
    <x-alert type="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </x-alert>
@endif


<form action="{{ route('form.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    <div>
        <label class="block font-medium">Name</label>
        <input type="text" name="nama" value="{{ old('nama') }}"
               class="w-full border rounded p-2">
    </div>
    <div>
        <label class="block font-medium">Email</label>
        <input type="email" name="email" value="{{ old('email') }}"
               class="w-full border rounded p-2">
    </div>
    <div>
        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Submit
        </button>
    </div>
</form>
@endsection
