<div>
   <div class="bg-withe rounded-lg shadow-lg mb-6">
       <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-gray-700 uppercase">{{ $category->name }}</h1>
            <div class="grid grid-cols-2 border border-gray-200 divide-x divide-gray-200 text-gray-600 cursor-pointer">
                <i class="fas fa-border-all p-3"></i>
                <i class="fas fa-th-list p-3"></i>
            </div>
       </div>
   </div>

   <div class="grid grid-cols-5 gap-6">
        <aside>
            <h2 class="font-semibold text-center mb-2">
                Subcategorías
            </h2>
            <ul class=" divide-y divide-gray-200">
                @foreach ($category->subcategories as $subcategory)

                    <li class="py-2 text-sm">
                        <a wire:click="$set('subcategoria', '{{ $subcategory->name }}')"
                            class="cursor-pointer hover:text-orange-500 capitalize {{ $subcategoria == $subcategory->name ? 'text-orange-500 font-semibold' : ''}}" >
                            {{ $subcategory->name }}
                        </a>
                    </li>

                @endforeach
            </ul>

            <h2 class="font-semibold text-center mb-2 mt-4">
                Marcas
            </h2>
            <ul class=" divide-y divide-gray-200">
                @foreach ($category->brands as $brand)

                    <li class="py-2 text-sm">
                        <a wire:click="$set('marca', '{{ $brand->name }}')"
                         class="cursor-pointer hover:text-orange-500 capitalize {{ $marca == $brand->name ? 'text-orange-500 font-semibold' : ''}}" >
                            {{ $brand->name }}
                        </a>
                    </li>

                @endforeach
            </ul>
            <x-jet-button class="mt-4" wire:click="clear">
                Eliminar filtros
            </x-jet-button>
        </aside>

        <div class="col-span-4">
            <ul class="grid grid-cols-4 gap-6">

                @foreach ($products as $product)
                    <li class="bg-white rounded-lg shadow">
                        <article>
                            <figure>
                                <img class="h-46 w-full object-cover object-center" src="{{asset('storage/'.$product->images->first()->url) }}" alt="">
                            </figure>

                            <div class="py-4 px-6">
                                <h1 class="text-lg font-semibold">
                                    <a href="">
                                        {{ Str::limit($product->name, 20) }}
                                    </a>
                                </h1>
                                <p class=" font-bold text-trueGray-700">$ {{ $product->price }}</p>
                            </div>
                        </article>
                    </li>
                @endforeach

            </ul>
            <div class="mt-4">
               {{ $products->links()}}
            </div>
        </div>
   </div>
</div>
