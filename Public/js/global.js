/* Link Active */
for(let link = 0; link < document.links.length; link++){
    if(document.links[link].href == document.URL){
        document.links[link].parentElement.classList.add('active');
    }
}

/* Toggle */
let toggle = document.querySelectorAll('.toggle');
let aside = document.querySelector('aside.panel');

for(i = 0; i < toggle.length; i++){
    toggle[i].addEventListener('click', asideAction);
}

function asideAction()
{
    if(aside.classList.contains('hide-dv-small')){
        aside.classList.remove('hide-dv-small');
    }else{
        aside.classList.add('hide-dv-small');
    }
}

/* Toggle For Aside Right*/
let toggleRight = document.querySelectorAll('.toggle-right');
let asideInfos = document.querySelector('aside.infos-aside');

for(t = 0; t < toggleRight.length; t++){
    toggleRight[t].addEventListener('click', asideInfosAction);
}

function asideInfosAction()
{
    if(asideInfos.classList.contains('hide-dv-small')){
        asideInfos.classList.remove('hide-dv-small');
    }else{
        asideInfos.classList.add('hide-dv-small');
    }
}

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