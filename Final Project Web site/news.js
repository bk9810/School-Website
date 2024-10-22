document.addEventListener('DOMContentLoaded', function() {
    fetch('get_news.php')
        .then(response => response.json())
        .then(data => {
            const newsGrid = document.getElementById('news-grid');
            data.forEach(news => {
                const newsCard = document.createElement('div');
                newsCard.className = 'caa';

                const newsContent = `
                    <div class="conteudoimgs">
                        <h6>${news.title}</h6>
                    </div>
                    <div class="contiss">
                        <p>${news.description}</p>
                        
                    </div>
                `;
                newsCard.innerHTML = newsContent;
                newsGrid.appendChild(newsCard);
            });
        })
        .catch(error => console.error('Error:', error));
});
