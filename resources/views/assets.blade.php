<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard</h3>
                <p class="text-subtitle text-muted">This is the main page.</p>
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
        <div class="card">
            <div class="card-header d-flex flex-inline justify-content-between">
                <h4 class="card-title">All Cars</h4>
                <button class="btn btn-primary" onclick="Livewire.emit('openModal', 'add-car')"><i class="bi bi-plus-circle mr-2"></i>Add New Car</button>
            </div>
            <div class="card-body">
                <div class="bg-white p-4 border border-gray-200 rounded">
                    
                    <livewire:cars-table/>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex flex-inline justify-content-between">
                <h4 class="card-title">All Cars</h4>
                <button class="btn btn-primary" onclick="Livewire.emit('openModal', 'add-car-type')"><i class="bi bi-plus-circle mr-2"></i>Add New Car</button>
            </div>
            <div class="card-body">
                <div class="bg-white p-4 border border-gray-200 rounded">
                    
                    <livewire:car-types-table/>
                </div>
            </div>
        </div>
    </section>
    @livewire('livewire-ui-modal')
</x-app-layout>
