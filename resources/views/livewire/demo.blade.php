<div>
   <form action="">

    <input wire:model="amin" type="text"  id="name" placeholder="enter name">

    <input wire:model="email" type="text"  id="email" placeholder="enter email">

    <button wire:click.prevent="tryy" type="submit"
    class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Create
    +</button>
   </form>
</div>
