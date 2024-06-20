<div>
  <h2>water in liters</h2>

  <form action="">
    <input  wire:model="ishi"  type="number" name="" id="" placeholder="store data">

    <button wire:click.prevent="ishistore" type="submit"
    class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">submit
    +</button>
  </form>

  <h1>
    list of stored water capacity in liter by calling array index value
    <span> @foreach ($ishicapacity as $index=>$capacity)
        {{-- <h1>{{$capacity}}</h1> --}}
        @if ($index==1)
        <h1>{{$capacity->capacity}}</h1>

        @endif
        {{-- {{$todo->capacity}} <br> --}}
        @endforeach</span>
  </h1>
  {{-- <h1>ishicapacity</h1> --}}

  {{-- <h1>{{$ishicapacity['5']}}</h1> --}}


  <h1>
    list of stored water capacity in liter
    <span> @foreach ($ishicapacity as $todo)

        {{$todo->capacity}} <br>
        @endforeach</span>
  </h1>

</div>
