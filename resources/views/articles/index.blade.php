@extends('layouts.app')

@section('content')
<form action="{{ url('article/search') }}" method="get">
    <div class="form-group">
        <input type="text" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." value="{{ request('search') }}" />
    </div>
</form>
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Title
            </th>
            <th scope="col" class="px-6 py-3">
                Body
            </th>
            <th scope="col" class="px-6 py-3">
                Tags
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($articles as $article)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $article->title }}
            </th>
            <td class="px-6 py-4">
                {{ $article->body }}
            </td>
            <td class="px-6 py-4">
                @foreach ($article->tags as $tag)
                <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{$tag}}</span>
                @endforeach
            </td>
        </tr>
        @empty
        <p>No articles found</p>
        @endforelse
    </tbody>
</table>
@stop