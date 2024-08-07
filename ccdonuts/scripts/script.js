 

document.addEventListener('DOMContentLoaded', function() {
    const navButton = document.getElementById('navButton');
    const closeButton = document.getElementById('closeButton');
    const navigation = document.getElementById('navigation');

    navButton.addEventListener('click', function() {
        navigation.classList.toggle('isOpen');
        navButton.classList.toggle('open');
    });

    closeButton.addEventListener('click', function() {
        navigation.classList.remove('isOpen');
        navButton.classList.remove('open');
    });
});


/* 検索 */

document.getElementById('searchButton').addEventListener('click', function() {
    const query = document.getElementById('searchInput').value.toLowerCase();
    const resultsContainer = document.getElementById('searchResults');
    const sampleData = [
        '商品一覧',
        'よくある質問',
        '問い合わせ',
        '当サイトのポリシー',
        
    ];

    resultsContainer.innerHTML = '';

    if (query) {
        const results = sampleData.filter(item => item.toLowerCase().includes(query));
        if (results.length > 0) {
            results.forEach(result => {
                const div = document.createElement('div');
                div.textContent = result;
                resultsContainer.appendChild(div);
            });
        } else {
            resultsContainer.textContent = '結果が見つかりませんでした。';
        }
    }
});



//いいねボタン*/ 
document.addEventListener('DOMContentLoaded', function() {
    var likeButtons = document.getElementsByClassName('likeButton');
    Array.from(likeButtons).forEach(function(likeButton) {
    likeButton.addEventListener('click', function() {
    likeButton.classList.toggle('liked');
    });
    });
    }, false);