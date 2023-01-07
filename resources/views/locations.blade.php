<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Locations</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Locations</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="card-header d-flex flex-inline justify-content-between">
                    <h4 class="card-title">List</h4>
                    <button class="btn btn-primary" onclick="Livewire.emit('openModal', 'add-location')"><i class="bi bi-plus-circle mr-2"></i>Add Location</button>
                </div>
            </div>
            <div class="card-body">
                <div class="bg-white p-4 border border-gray-200 rounded">
                    
                    <livewire:locations-table/>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-header d-flex flex-inline justify-content-between">
                    <h4 class="card-title">Rules</h4>
                    <button class="btn btn-primary" onclick="Livewire.emit('openModal', 'add-location-rules')"><i class="bi bi-plus-circle mr-2"></i>Add New Rule</button>
                </div>
            </div>
            <div class="card-body">
                <div class="bg-white p-4 border border-gray-200 rounded">
                    
                    <livewire:locations-rules-table/>
                </div>
            </div>
        </div>
    </section>
    @livewire('livewire-ui-modal')

</x-app-layout>
