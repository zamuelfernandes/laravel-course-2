<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="underline font-semibold" href="{{ route('categories.create') }}">+ Add new category</a>

                    <div class="py-2"></div>

                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th class="font-semibold text-lg text-gray-800 px-6">Name</th>
                                <th class="font-semibold text-lg text-gray-800 px-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr class="my-2">
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category) }}" ,
                                            class="font-semibold text-green-600 underline px-6">Edit</a>

                                        <div class="py-1"></div>

                                        <form method="POST" action="{{ route('categories.destroy', $category) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class="font-semibold text-red-600 underline px-6">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>60