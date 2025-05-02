@push('scripts')
<script>
    window.Echo.channel('emergencies')
        .listen('EmergencyCreated', (e) => {
            // Update the admin UI with the new emergency details
            alert('New emergency created: ' + e.emergency.description);
            // Optionally, fetch the updated list of emergencies
            fetchEmergencies();
        });

    function fetchEmergencies() {
        // Fetch and update the emergency list
    }
</script>
@endpush