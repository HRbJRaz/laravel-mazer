<x-maz-sidebar :href="route('dashboard')" :logo="asset('images/logo/logo.png')">

    <!-- Add Sidebar Menu Items Here -->

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="bi bi-grid-fill"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Orders" :link="route('orders')" icon="bi bi-bag-check"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Customers" :link="route('customers')" icon="bi bi-people"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Assets" :link="route('assets')" icon="bi bi-car-front"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Locations" :link="route('locations')" icon="bi bi-geo-alt"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Add-Ons" :link="route('addons')" icon="bi bi-clipboard-heart-fill"></x-maz-sidebar-item>
    <hr>
    <x-maz-sidebar-item name="Setting" :link="route('settings')" icon="bi bi-gear"></x-maz-sidebar-item>
    
</x-maz-sidebar>