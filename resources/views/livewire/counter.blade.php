<div>
    <h1>Componente livewire</h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2>Counter</h2>
            <p>{{ $value }}</p>
            <div class="row">
                <button class="col-2" wire:click="increment">Incrementa</button>
                <button class="col-2" wire:click="decrement">Decrementa</button>
            </div>
            <div class="row">
                <button class="col-2" wire:click="incrementByNumber(5)">Incrementa di 5</button>
                <button class="col-2" wire:click="decrementByNumber(5)">Decrementa di 5</button>
            </div>
        </div>
    </div>
</div>
