<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            カテゴリー作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('owner.categories.store')}}">
                        @csrf
                    <div class="p-2 w-1/2 mb-10 mx-auto">
                        <p class="text-xl mb-2 text-blue-600 md:text-red-600">Primary</p>
                        <div class="relative">
                          <label for="primaryName" class="leading-7 text-sm text-gray-600">カテゴリー名</label>
                          <input id="primaryName" name="primaryName" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative">
                          <label for="primary_sort_order" class="leading-7 text-sm text-gray-600">表示順</label>
                          <input type="number" id="primary_sort_order" name="primary_sort_order" value="{{ old('primary_sort_order') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-1/2 mx-auto">
                        <p class="text-xl mb-2 text-blue-600 md:text-red-600">Secondary</p>
                        <div class="relative">
                          <label for="secondaryName" class="leading-7 text-sm text-gray-600">カテゴリー名</label>
                          <input id="secondaryName" name="secondaryName" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative">
                          <label for="secondary_sort_order" class="leading-7 text-sm text-gray-600">表示順</label>
                          <input type="number" id="secondary_sort_order" name="secondary_sort_order" value="{{ old('secondary_sort_order') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                      </div>
                    </div>
                    <div class="p-2 w-full flex justify-around mt-4">
                       <button type="button" onclick="location.href='{{ route('owner.categories.index')}}'" class="bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                       <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録する</button>   
                    </div>
                    </form>                     
                </div>
            </div>
        </div>
    </div>
</x-app-layout>