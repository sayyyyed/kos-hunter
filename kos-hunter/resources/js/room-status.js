document.addEventListener('DOMContentLoaded', function() {
    function updateRoomStatus() {
        const statusSpans = document.querySelectorAll('[id^="room-status-"]');
        statusSpans.forEach(span => {
            const propertiId = span.dataset.propertiId;
            const initialRooms = parseInt(span.dataset.initialRooms);

            fetch(`/api/properti/${propertiId}/room-count`)
                .then(response => response.json())
                .then(data => {
                    const availableRooms = data.available_rooms;
                    if (availableRooms <= 0) {
                        span.textContent = 'Sold Out';
                        span.className =
                            'inline-block bg-red-200 text-red-900 rounded-full px-3 py-1 text-sm font-semibold mr-2 mb-2';
                    } else {
                        span.textContent = `Sisa ${availableRooms} kamar`;
                        span.className =
                            'inline-block bg-green-200 text-green-900 rounded-full px-3 py-1 text-sm font-semibold mr-2 mb-2';
                    }
                })
                .catch(error => {
                    console.error('Error fetching room count:', error);
                    span.textContent = `Sisa ${initialRooms} kamar`;
                    span.className =
                        'inline-block bg-yellow-200 text-yellow-900 rounded-full px-3 py-1 text-sm font-semibold mr-2 mb-2';
                });
        });
    }

    // Update initially and then every 30 seconds
    updateRoomStatus();
    setInterval(updateRoomStatus, 30000);
});
