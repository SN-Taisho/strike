@include('admin.components.admin-head', ['title' => 'Admin Dashboard'])

@include('admin.components.admin-header')

<main>

    <div class="width-limiter">
        <div class="selection-wrapper">
            <button class="default" onclick="window.location.href='products'">Dashboard</button>
            <button onclick="window.location.href='categories'">User Management</button>
            <button onclick="window.location.href='my-cart'">Archive</button>
        </div>
    </div>

</main>

@include('components.footer')
