document.addEventListener('DOMContentLoaded', function() {
    fetch('get_event_home.php')
        .then(response => response.json())
        .then(data => {
            const homeGrid = document.getElementById('homes-grid');
            data.forEach(home => {
                const homeCard = document.createElement('div');
                homeCard.className = 'ca';

                const homeContent = `
                    <div class="conteudoimg">
                        <h6>${home.title}</h6>
                    </div>
                    <div class="contis">
                        <p>${home.description}</p>
                        
                    </div>
                `;
                homeCard.innerHTML = homeContent;
                homeGrid.appendChild(homeCard);
            });
        })
        .catch(error => console.error('Error:', error));
});
