<x-layouts.app title="Cantacts" >
{{--    @extends('layouts.app')--}}

    @section('content')
        <div class="max-w-6xl mx-auto px-4 py-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Contact Submissions</h2>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto bg-white shadow rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Phone</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Location</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Signup</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">File</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Message</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Submitted At</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @forelse ($contacts as $contact)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $contact->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $contact->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $contact->phone }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $contact->location }}</td>
                            <td class="px-6 py-4 text-sm">
                                @if($contact->is_signup)
                                    <span class="inline-block bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded-full">Yes</span>
                                @else
                                    <span class="inline-block bg-red-100 text-red-700 text-xs font-medium px-2 py-1 rounded-full">No</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <a href="{{ asset('storage/' . $contact->file) }}" class="text-cyan-600 hover:underline" target="_blank">View</a>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ \Illuminate\Support\Str::limit($contact->message, 30) }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $contact->created_at->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-6 text-gray-500">No contacts found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $contacts->links() }}
            </div>
        </div>
    @endsection

</x-layouts.app>
