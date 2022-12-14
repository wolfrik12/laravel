<?php
use App\Models\Cart;
?>
@include('navbar.header')
<div class="container-fluid">
          <main class="my-8">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800  bg-black shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5" style="border:1px solid white;">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold" style="color: white;">Cart List</h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left" style="color: white;">Name</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity" style="color: white;">Qty</span>
                                <span class="hidden lg:inline" style="color: white;">Quantity</span>
                              </th>
                              <th class="hidden text-right md:table-cell" style="color: white;"> price</th>
                              <th class="hidden text-right md:table-cell" style="color: white;"> Total Price</th>
                              <th class="hidden text-right md:table-cell" style="color: white;"> Remove </th>
                              
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="{{asset($item->image)}}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4"style="color: white;">{{ $item->description }}</p>
                                  
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="post">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number" name="qty" min="0" max="25" value="{{ $item->qty }}" 
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-1 pb-2 ml-2 text-white bg-blue-500">update</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base " style="color: white;">
                                    {{ $item->price }}
                                </span>
                                
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base " style="color: white;">
                                    {{ $item->sum('price') }}
                                </span>
                                
                              </td>
                              
                              
                      
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="post">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="px-4 py-2 text-white bg-red-600">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                        <div>
                         <!-- Total: {{ Cart::all() }} -->
                        </div>
                        <div class="d-flex justify-content-between">
                          <div>
                            <form action="{{ route('cart.clear') }}" method="POST">
                              @csrf
                              <button class="px-6 py-2 text-red-800 bg-red-300">Удалить всё</button>
                            </form>
                          </div>
                          <div>
                            <form action="{{ route('cart.purchase') }}" method="POST">
                              @csrf
                              <button class="px-6 py-2 text-green-800 bg-green-300">Купить</button>
                            </form>
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>
        </main>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>