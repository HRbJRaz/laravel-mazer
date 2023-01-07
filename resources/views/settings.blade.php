<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Settings</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>
    <section class="section">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="true">Contacts</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Seats</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="policies-tab" data-toggle="tab" data-target="#policies" type="button" role="tab" aria-controls="policies" aria-selected="false">Policies</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header d-flex flex-inline justify-content-between">
                            <h4 class="card-title">Contacts</h4>
                            <button class="btn btn-primary" onclick="Livewire.emit('openModal', 'setting-contact-form')"><i class="bi bi-plus-circle mr-2"></i>Edit Setting</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="bg-white p-4 border border-gray-200 rounded">
                            
                            <livewire:setting-contact-table/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                
            </div>
            <div class="tab-pane fade" id="policies" role="tabpanel" aria-labelledby="policies-tab">...</div>
        </div>
        
    </section>
    @livewire('livewire-ui-modal')
</x-app-layout>
