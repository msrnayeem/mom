// Send message
document.getElementById('messageForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    let formData = new FormData(this);
    let response = await fetch('/send-message', {
        method: 'POST',
        body: formData,
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
    });

    if (response.ok) {
        this.reset();
    }
});