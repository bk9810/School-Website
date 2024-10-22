
document.addEventListener('DOMContentLoaded', function() {
    fetch('get_sports.php')
        .then(response => response.json())
        .then(data => {
            const sportsGrid = document.getElementById('sports-grid');
            data.forEach(sport => {
                const sportCard = document.createElement('div');
                sportCard.className = 'sport_card';

                const sportContent = `
                    <div class="sport_card_image">
                        <img src="${sport.image}" alt="${sport.name}">
                    </div>
                    <div class="sport_card_details">
                        <h4>${sport.name}</h4>
                        <p></p>
                        <h5>${sport.description}</h5>
                    </div>
                `;
                sportCard.innerHTML = sportContent;
                sportsGrid.appendChild(sportCard);
            });
        })
        .catch(error => console.error('Error:', error));
});

