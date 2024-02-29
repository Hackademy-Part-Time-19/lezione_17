<div>
  <form action="">
    <label for="title">Titolo</label>
    <input type="text" id="title" wire:model.blur="title">
    <label for="description">Descrizione</label>
    <input type="text" id="description" wire:model.change="description">
  </form>

  <h2>{{$title}} e {{$description}}</h2>

</div>
