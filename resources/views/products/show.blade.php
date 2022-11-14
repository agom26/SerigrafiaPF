<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <div class="flexslider">
                    <ul class="slides">
                        @foreach ($product->images as $image)
                        
                            <li data-thumb=" {{ Storage::url($image->url) }}">
                                <img src=" {{ Storage::url($image->url) }}" />
                            </li>

                        @endforeach
                        
                    </ul>
                  </div>
            </div>

            <div>
                <h1 class="text-xl font-bold text-neutral-700">{{$product->name}}</h1>
                <div class="flex">
                    <p class="text-neutral-700">5 <i class="fas fa-star text-sm text-yellow-400"></i></p>
                    <a href="" class="text-red-500 hover:text-red-700 underline">39 reseñas</a>
                </div>

                <p class="text-2xl font-semibold text-neutral-700">Q {{$product->price}}</p>

                @if ($product->subcategory->size)
                    @livewire('add-cart-item-size',['product'=>$product])

                @elseif ($product->subcategory->color)
                    @livewire('add-cart-item-color',['product'=>$product])
                @else
                @livewire('add-cart-item',['product'=>$product])
                @endif
            </div>
        </div>
    </div>

    @push('script')
    <script>
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });

    </script>
@endpush
</x-app-layout>