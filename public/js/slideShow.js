//animation list: card, fade, box3D, glide

$(document).ready(function () {
    $('.slideWiz').slideWiz(
        {
            auto: true,
            speed: 5000,
            type : 'slice',
            row: 9,
            file : [
                {
                    src: {
                        main: "../images/1.jpg",
                        cover: "../images/1.jpg"
                    },
                    title: 'Modern Hotel',
                    desc: 'Uzbekapolis’ mornings are beautiful...especially if you’re waking up in one of our hotel`s refined room room',
                },
                {
                    src: {
                        main: "../images/2.jpg",
                        cover: "../images/2.jpg"
                    },
                    title: 'Stunning View',
                    desc: 'Every room at our hotel offers not just a high level of comfort, but also an amazing view of sea sea',
                },
                {
                    src: {
                        main: "../images/3.jpg",
                        cover: "../images/3.jpg"
                    },
                    title: 'The Best Dishes',
                    desc: ' At our restaurant, we offer a variety of dishes inspired by world cuisines and cooked by real professionals professionals.',
                },
                
            ]

        }
    );
});
