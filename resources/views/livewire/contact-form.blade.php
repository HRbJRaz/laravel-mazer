<form wire:submit.prevent="submit">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Enter name" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" placeholder="Enter subject" wire:model="subject">
        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
   
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" placeholder="Enter Body" wire:model="body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
   
    <button type="submit" class="btn btn-primary">Save Contact</button>

</form>