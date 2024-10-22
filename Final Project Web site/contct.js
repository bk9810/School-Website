document.addEventListener('DOMContentLoaded', function() {
    fetch('get_Contact.php')
        .then(response => response.json())
        .then(data => {
            const contactGrid = document.getElementById('abcd');
            data.forEach(homeii => {
                const contactCard = document.createElement('div');
                contactCard.className = 'ca';

                const homeevContent = `
                    <div class="conteudoimg">
                        <h6>${homeii.title}</h6>
                    </div>
                    <div class="contis">
                        <p>${homeii.description}</p>
                        
                    </div>
                `;
                contactCard.innerHTML = homeevContent;
                contactGrid.appendChild(homeevCard);
            });
        })
        .catch(error => console.error('Error:', error));
});
