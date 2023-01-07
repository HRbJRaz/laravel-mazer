<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Assets</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Add-on Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="insurance-tab" data-toggle="tab" data-target="#insurance" type="button" role="tab" aria-controls="insurance" aria-selected="true">Insurance</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Seats</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="insurance" role="tabpanel" aria-labelledby="insurance-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header d-flex flex-inline justify-content-between">
                            <h4 class="card-title">List of Insurance Packages</h4>
                            <button class="btn btn-primary" onclick="Livewire.emit('openModal', 'add-insurance')"><i class="bi bi-plus-circle mr-2"></i>Add New Insurance</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="bg-white p-4 border border-gray-200 rounded">
                            
                            <livewire:insurance-table/>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-header d-flex flex-inline justify-content-between">
                            <h4 class="card-title">Insurance Rules</h4>
                            <button class="btn btn-primary" onclick="Livewire.emit('openModal', 'add-insurance-rule')"><i class="bi bi-plus-circle mr-2"></i>Add New Rule</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="bg-white p-4 border border-gray-200 rounded">
                            
                            <livewire:insurance-rule-table/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header d-flex flex-inline justify-content-between">
                            <h4 class="card-title">List of Seats</h4>
                            <button class="btn btn-primary" onclick="Livewire.emit('openModal', 'add-seat')"><i class="bi bi-plus-circle mr-2"></i>Add New Seat</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="bg-white p-4 border border-gray-200 rounded">
                            <livewire:seats-table/>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-header d-flex flex-inline justify-content-between">
                            <h4 class="card-title">Seats Booking</h4>
                            <button class="btn btn-primary" onclick="Livewire.emit('openModal', 'add-insurance-rule')"><i class="bi bi-plus-circle mr-2"></i>Add New Rule</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="bg-white p-4 border border-gray-200 rounded">
                            
                            <livewire:seats-booking-table/>
                        </div>
                    </div>
                </div></div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
          </div>
        
    </section>
    @livewire('livewire-ui-modal')
</x-app-layout>
