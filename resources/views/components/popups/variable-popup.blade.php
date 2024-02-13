<div class="dual-popup">
    @if ($type == 1)
        <svg class="success" width="64" height="64" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m21.5 5.5-13.063 13L2.5 12.59"></path>
        </svg>
        <h3 class="success">Success</h3>
    @endif

    @if ($type == 0)
        <svg class="error" width="64" height="64" fill="none" stroke="#ffffff" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m4 4 16 16"></path>
            <path d="M4 20 20 4"></path>
        </svg>
        <h3 class="error">Error</h3>
    @endif
    <p>{{ $message }}</p>

    <button onclick="">Close</button>
</div>
