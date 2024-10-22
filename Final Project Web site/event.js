document.addEventListener('DOMContentLoaded', function() {
    fetch('get_event.php')
        .then(response => response.json())
        .then(data => {
            const eventGrid = document.getElementById('event-grid');
            data.forEach(event => {
                const eventCard = document.createElement('div');
                eventCard.className = 'caa';

                const eventContent = `
                    <div class="conteudoimgs">
                        <h6>${event.title}</h6>
                    </div>
                    <div class="contiss">
                        <p>${event.description}</p>
                        
                    </div>
                `;
                eventCard.innerHTML = eventContent;
                eventGrid.appendChild(eventCard);
            });
        })
        .catch(error => console.error('Error:', error));
});
