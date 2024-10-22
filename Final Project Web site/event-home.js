document.addEventListener('DOMContentLoaded', function() {
    fetch('get_home_event.php')
        .then(response => response.json())
        .then(data => {
            const homeevGrid = document.getElementById('anno-grid');
            data.forEach(homeii => {
                const homeevCard = document.createElement('div');
                homeevCard.className = 'ca';

                const homeevContent = `
                    <div class="conteudoimg">
                        <h6>${homeii.title}</h6>
                    </div>
                    <div class="contis">
                        <p>${homeii.description}</p>
                        
                    </div>
                `;
                homeevCard.innerHTML = homeevContent;
                homeevGrid.appendChild(homeevCard);
            });
        })
        .catch(error => console.error('Error:', error));
});
