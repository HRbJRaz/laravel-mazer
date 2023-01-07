<x-modal formAction="edit">
   <x-slot name="title">
      Edit Contact Setting
   </x-slot>

   <x-slot name="content">
      @if ($errors->any())
         <div class="alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      <div class="form-group">
          <label for="media" class="text-dark">Media</label>
          <select id="media" class="form-select"  wire:model="media" wire:change="editForm">
              @foreach ($medias as $media)
              <option value="{{$media['media']}}">{{$media['media']}} </option>
              @endforeach
          </select>
      </div>
      <div class="form-group">
         <label for="detail" class="text-dark">Detail</label>
         <textarea id="detail" class="form-control" wire:model="detail">
         </textarea>
      </div>
      <div class="form-check form-switch">
         <input class="form-check-input" type="checkbox" id="display" checked>
         <label class="form-check-label" for="display">Display Detail</label>
       </div>
   </x-slot>

   <x-slot name="buttons">
       <button type="submit" class="btn btn-outline-primary">Edit</button>
   </x-slot>
</x-modal>