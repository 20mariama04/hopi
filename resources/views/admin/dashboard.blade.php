<script>
function fetchEmergencies() {
    fetch('/admin/emergencies')
        .then(response => response.json())
        .then(data => {
            // Update the dashboard with the new data
            console.log(data);
            // Implement logic to update the UI with the fetched data
        })
        .catch(error => console.error('Error fetching emergencies:', error));
}

// Poll every 5 seconds
setInterval(fetchEmergencies, 5000);
</script>