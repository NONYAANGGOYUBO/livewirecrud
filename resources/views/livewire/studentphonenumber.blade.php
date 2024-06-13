<div>
    <form action="">

        <input wire:model="mobilenumber"  type="number"  id="address">


        <button wire:click.prevent="studentnumber" type="submit"
        class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">submit
        +</button>
    </form>

    <div>
        <h1 class="text-red-500 font-bold">list of user name </h1> <br>
        {{-- @include('livewire.includes.todo-card') --}}
        @foreach ($contacts as $todo )
        <h2>{{$todo->phnumber}}
        @endforeach
    </div>
</div>
