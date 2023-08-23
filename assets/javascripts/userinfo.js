const toggleNext = document.querySelector('.lastest_diciiart .next');
const togglePrev = document.querySelector('.lastest_diciiart .prev');

toggleNext.addEventListener('click', function () {
    let lists = document.querySelectorAll('.card');
    document.querySelector('.lastest_diciiart_wp').appendChild(lists[0]);
});

togglePrev.addEventListener('click', function () {
    let lists = document.querySelectorAll('.card');
    let lastElement = lists[lists.length - 1];
    let parentContainer = document.querySelector('.lastest_diciiart_wp');
    parentContainer.insertBefore(lastElement, parentContainer.firstChild);
});

const watchingContainer = document.querySelector('.watching_wp');
const watcherContainer = document.querySelector('.watcher_wp');


for (let i = 0; i < 10; i++) {
    const span = document.createElement('span');
    span.className = 'material-symbols-outlined person';
    span.textContent = 'person';

    span.addEventListener('click', () => {
        span.textContent = 'clicked';
    });

    watchingContainer.appendChild(span);
}

for (let i = 0; i < 10; i++) {
    const span = document.createElement('span');
    span.className = 'material-symbols-outlined person';
    span.textContent = 'person';

    span.addEventListener('click', () => {
        span.textContent = 'clicked';
    });

    watcherContainer.appendChild(span);
}





