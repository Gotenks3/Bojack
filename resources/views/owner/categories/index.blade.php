<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      カテゴリー
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
         <div class="p-6 bg-white border-b border-gray-200">
          <select name="category" id="category" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @foreach($categories as $category)
            <optgroup label="{{ $category->name }}">
              @foreach($category->secondary as $secondary)
              <option value="{{ $secondary->id}}">
                {{ $secondary->name }}
              </option>
              @endforeach
              @endforeach
          </select>
          <section class="text-gray-600 body-font">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
              <table class="table-auto w-full text-left whitespace-no-wrap">
                @foreach($categories as $category)
                <thead>
                  <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">カテゴリー名:{{ $category->name }}</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ソート</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($category->secondary as $secondary)
                  <tr>
                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $secondary->id }}</td>
                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $secondary->name }}</td>
                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $secondary->sort_order }}</td>
                  </tr>
                  @endforeach
                </tbody>
                @endforeach
              </table>
            </div>
            <div class="flex justify-end mb-4"> 
              <button onclick="location.href='{{ route('owner.categories.create')}}'" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">カテゴリーを作成</button>                        
            </div>
          </section>
        </div>
      </div>
    </div>
    {{ $categories->links() }}
  </div>
</x-app-layout>