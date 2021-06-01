<div class="container py-8">
    <section class="bg-white rounded-lg shadow-lg p-6 text-gray-700">
        <h1 class="text-lg font-semibold mb-6">CARRO DE COMPRAS</h1>

        <table class="table-auto w-full">
            <thead>
                <th></th>
                <th>Preio</th>
                <th>Cant</th>
                <th>Total</th>
            </thead>
            <tbody>

                @foreach (Cart::content() as $item)
                    <tr>
                        <td>
                            <div class="flex">
                                <img class="h-15 w-20 object-cover mt-1 mr-4"
                                    src="{{ asset('storage/' . $item->options->image) }}" alt="">
                                <div class="">
                                    <p class="font-bold">{{ $item->name }}</p>

                                    @isset($item->options['color'])
                                        <span> - Color: {{ __($item->options['color']) }}</span>
                                    @endisset
                                    @isset($item->options['size'])
                                        <span class="mx-1">-</span>
                                        <span>{{ $item->options['size'] }}</span>
                                    @endisset

                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span>
                                $ {{ $item->price }}
                                <a class="ml-6 cursor-pointer hover:text-red-600" href="">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </span>
                        </td>
                        <td>
                            <div class="flex justify-center">

                                @if ($item->options->size)

                                    @livewire('update-cart-item-size', ['rowId' => $item->rowId], key($item->rowId))

                                @elseif($item->options->color)

                                    @livewire('update-cart-item-color', ['rowId' => $item->rowId], key($item->rowId))

                                @else

                                    @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))

                                @endif

                            </div>
                        </td>
                        <td class="text-center">
                            $ {{ $item->price * $item->qty }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>


</div>
