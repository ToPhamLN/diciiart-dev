const figurePplGroupCtr = document.querySelector('.ppl_group_wp');
const figureMyGroup = document.querySelector('.my_group_wp');
const figureRcmd = document.querySelector('.rcmd_gr_wp');

const allGroupData = [
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',
    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',

    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',

    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',

    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',

    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',

    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',


    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',


    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',

    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
        description: 'Support us on Patreon to get all our arts with super high quality without watermark and many exclusive arts',
        link: './../../../diciiart-dev/pages/Groupinfo.php',


    },
]

const myGroupData = [
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
    },
    {
        imgSrc: './../assets/imgs/demo12.jpg',
        title: 'Robots-and-Space Group Feed',
    },
    {
        imgSrc: './../assets/imgs/demo13.jpg',
        title: 'Robots-and-Space Group Feed',
    },

]

const rcmdData = [
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
    },
    {
        imgSrc: './../assets/imgs/demo12.jpg',
        title: 'Robots-and-Space Group Feed',
    },
    {
        imgSrc: './../assets/imgs/demo13.jpg',
        title: 'Robots-and-Space Group Feed',
    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
    },
    {
        imgSrc: './../assets/imgs/demo12.jpg',
        title: 'Robots-and-Space Group Feed',
    },
    {
        imgSrc: './../assets/imgs/demo11.jpg',
        title: 'Robots-and-Space Group Feed',
    },
];

allGroupData.forEach(data => {
    const figure = document.createElement('figure');
    figure.className = 'card';

    const img = document.createElement('img');
    img.src = data.imgSrc;
    img.alt = '';

    const figcaption = document.createElement('figcaption');
    figcaption.className = 'card__content';

    const title = document.createElement('p');
    title.className = 'card__title';
    title.textContent = data.title;

    const description = document.createElement('p');
    description.className = 'card__description';
    description.textContent = data.description;

    const watchButton = document.createElement('button');
    watchButton.className = 'watch_btn';

    const actionLink = document.createElement('a');
    actionLink.className = 'action';
    actionLink.href = data.link;
    actionLink.textContent = 'Watch';

    const joinButton = document.createElement('button');
    joinButton.className = 'join_btn';
    joinButton.textContent = 'Join';

    watchButton.appendChild(actionLink);

    figcaption.appendChild(title);
    figcaption.appendChild(description);
    figcaption.appendChild(watchButton);
    figcaption.appendChild(joinButton);

    figure.appendChild(img);
    figure.appendChild(figcaption);

    figurePplGroupCtr.appendChild(figure);
});

myGroupData.forEach(data => {
    const figure = document.createElement('figure');
    figure.className = 'card';

    const img = document.createElement('img');
    img.className = 'image';
    img.src = data.imgSrc;
    img.alt = '';


    const figcaption = document.createElement('figcaption');
    figcaption.className = 'content';

    const titleLink = document.createElement('a');
    titleLink.href = '#';

    const titleSpan = document.createElement('span');
    titleSpan.className = 'title';
    titleSpan.textContent = data.title;

    titleLink.appendChild(titleSpan);

    const actionLink = document.createElement('a');
    actionLink.className = 'action';
    actionLink.href = '#';

    const actionText = document.createTextNode('Watch group');

    const arrowSpan = document.createElement('span');
    arrowSpan.setAttribute('aria-hidden', 'true');
    arrowSpan.textContent = '→';

    actionLink.appendChild(actionText);
    actionLink.appendChild(arrowSpan);

    figcaption.appendChild(titleLink);
    figcaption.appendChild(actionLink);

    figure.appendChild(img);
    figure.appendChild(figcaption);

    figureMyGroup.appendChild(figure);
});

rcmdData.forEach(data => {
    const card = document.createElement('div');
    card.className = 'card';

    const image = document.createElement('img');
    image.className = 'card_image';
    image.src = data.imgSrc;
    image.alt = '';

    const titleDiv = document.createElement('div');
    titleDiv.className = 'title';
    titleDiv.textContent = data.title;

    card.appendChild(image);
    card.appendChild(titleDiv);

    figureRcmd.appendChild(card);
});