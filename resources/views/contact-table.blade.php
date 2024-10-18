<!-- component -->
@extends('components.template')

@section('title', 'Contact-table')

@section('content')
    @include('components.landing-nav')

    <div class="md:px-32 py-8 w-full min-h-screen bg-gradient-to-br from-indigo-900 to-green-900">
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">No.</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($contacts as $contact)
                        <tr class="{{ $loop->even ? 'bg-gray-100' : '' }}">
                            <td class="text-left py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="text-left py-3 px-4">{{ $contact['name'] }}</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="mailto:{{ $contact['email'] }}">
                                    {{ $contact['email'] }}
                                </a>
                            </td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="tel:{{ $contact['phone'] }}">
                                    {{ $contact['phone'] }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
