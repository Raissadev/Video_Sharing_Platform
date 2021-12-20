/* Likes Actions */ 

const like = document.getElementById('like');
const deslike = document.getElementById('deslike');

like.addEventListener('click', funcLike);
deslike.addEventListener('click', funcDeslike);

function funcLike(e)
{
    like.classList.remove('ri-thumb-up-line');
    like.classList.add('ri-thumb-up-fill');
}

function funcDeslike(e)
{
    deslike.classList.remove('ri-thumb-down-line');
    deslike.classList.add('ri-thumb-down-fill');
}

const btnLike = document.getElementById('btn-like');
const btnDeslike = document.getElementById('btn-deslike');
const channelContent = document.getElementById('channel_content');

btnLike.addEventListener('click', funcClickLike);
btnDeslike.addEventListener('click', funcClickDeslike);

function funcClickLike(e)
{
    e.preventDefault();

        let xhr = new XMLHttpRequest();
        xhr.open('GET','http://localhost:8000/channel-content/channel-content/?like='+btnLike.value+'&channel_content='+channelContent.value,true);   
        xhr.send(xhr);

    document.getElementById('count-likes').textContent = btnLike.value;
}
function funcClickDeslike(e)
{
    e.preventDefault();

        let xhr = new XMLHttpRequest();
        xhr.open('GET','http://localhost:8000/channel-content/channel-content/?deslike='+btnDeslike.value+'&channel_content='+channelContent.value,true);   
        xhr.send(xhr);

    document.getElementById('count-deslikes').textContent = btnDeslike.value;
}