@include('admin.components.admin-head', ['title' => 'Inquiry Management'])

@include('admin.components.admin-header')

<main>
    <h1 class="section-heading" style="margin: 1rem 0rem 2rem">Inquiry Management</h1>

    <div class="table-limiter" style="max-width: 1024px;">
        <table class="res-table wide limited">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Child</th>
                    <th scope="col">Interest</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 10; $i++)
                    <tr>
                        <td data-label="No.">{{ $i + 1 }}</td>
                        <td data-label="Name">Parent Full Name</td>
                        <td data-label="Email">Parent Email</td>
                        <td data-label="Mobile">Parent Mobile</td>
                        <td data-label="Child">Child Name</td>
                        <td data-label="Interest">Programme Name</td>
                        <td class="actions" data-label="Action">
                            <button type="button" class="action-btn view icon"
                                onclick="window.location.href='/inquiry-details'"><svg width="24"
                                    height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.5 3h-15A1.5 1.5 0 0 0 3 4.5v15A1.5 1.5 0 0 0 4.5 21h15a1.5 1.5 0 0 0 1.5-1.5v-15A1.5 1.5 0 0 0 19.5 3Z">
                                    </path>
                                    <path d="M10.5 6.5h-4v4h4v-4Z"></path>
                                    <path d="M13.5 6.5h4"></path>
                                    <path d="M13.5 10h4"></path>
                                    <path d="M6.5 14h11"></path>
                                    <path d="M6.5 17.5h11"></path>
                                </svg>&nbsp;View Details</button>

                            <button type="button" class="action-btn edit icon"

                            {{-- Replace with parent email --}}
                                onclick="window.location.href='mailto:parent@email.com'"><svg width="24"
                                    height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 12V4.5H2v15h10"></path>
                                    <path d="M22 17h-7"></path>
                                    <path d="M17.5 14.5 15 17l2.5 2.5"></path>
                                    <path d="M2 4.5 12 12l10-7.5"></path>
                                </svg>&nbsp;Respond</button>
                            <button type="button" class="action-btn delete icon"
                                onclick="window.location.href='/delete_inquiry'">
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
