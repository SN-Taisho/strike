@include('admin.components.admin-head', ['title' => 'Admin Dashboard'])

@include('admin.components.admin-header')

<main>

    <h1 class="section-heading" style="margin: 1rem 0rem 2rem">Welcome to the Admin Dashboard</h1>

    <div class="justify-center flex-wrap" style="marign: auto; gap: 1rem">
        <a href="/add-admin" class="action-btn alt text-deco-none">Add New Admin</a>
        <a href="/inquiry-management" class="action-btn alt text-deco-none">Manage Inquiries</a>
    </div>

    <div class="table-limiter" style="max-width: 760px;">
        <table class="res-table small limited">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 10; $i++)
                    <tr>
                        <td data-label="No.">{{ $i + 1 }}</td>
                        <td data-label="Name">Admin Name</td>
                        <td data-label="Username">Admin Username</td>
                        <td class="actions" data-label="Action">
                            <button type="button" class="action-btn edit icon"
                                onclick="window.location.href='/admin-details-editor'"><svg width="24"
                                    height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                    <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                </svg> &nbsp;Edit</button>
                            <button type="button" class="action-btn delete icon"
                                onclick="window.location.href='/delete_admin'">
                                <svg width="24" height="24" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 5v17h15V5h-15Z"></path>
                                    <path d="M10 10v6.5"></path>
                                    <path d="M14 10v6.5"></path>
                                    <path d="M2 5h20"></path>
                                    <path d="m8 5 1.645-3h4.744L16 5H8Z"></path>
                                </svg>&nbsp;Delete</button>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

</main>

@include('components.footer')
