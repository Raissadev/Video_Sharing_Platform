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