document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const cardDisplay = document.getElementById('cardDisplay');

    searchInput.addEventListener('input', function() {
        const searchText = this.value;
        cardDisplay.innerHTML = '';

        if (searchText.trim() !== '') {
            fetch('https://api.scryfall.com/cards/named?fuzzy=' + searchText, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(data => {
                if (data.object === 'card') {
                    const cardName = data.name;
                    const cardType = data.type_line;
                    const cardImage = data.image_uris.normal;
                    const cardContainer = document.createElement('div');
                    cardContainer.classList.add('card');

                    const cardTitle = document.createElement('h2');
                    cardTitle.textContent = cardName;

                    const cardTypeInfo = document.createElement('p');
                    cardTypeInfo.textContent = cardType;

                    const cardImageElement = document.createElement('img');
                    cardImageElement.src = cardImage;
                    cardImageElement.style.maxWidth = '100px';
                    cardImageElement.style.maxHeight = '200px';

                    cardContainer.appendChild(cardTitle);
                    cardContainer.appendChild(cardTypeInfo);
                    cardContainer.appendChild(cardImageElement);

                    cardDisplay.appendChild(cardContainer);

                    // Adicione uma quebra de linha a cada par de cards
                    if (cardDisplay.children.length % 2 === 0) {
                        const lineBreak = document.createElement('div');
                        lineBreak.classList.add('row');
                        cardDisplay.appendChild(lineBreak);
                    }
                } else {
                    console.log('Card não encontrado.');
                }
            })
            .catch(error => {
                console.error('Erro na requisição:', error);
            });
        }
    });
});
