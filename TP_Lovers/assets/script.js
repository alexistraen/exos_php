let likeBtn = document.getElementsByClassName('likeBtn');

let arrayLikeBtn = [...likeBtn];

arrayLikeBtn.forEach(element => {
    element.onclick = function () {
        element.classList.toggle('fas');
        element.classList.toggle('far');
    }
});