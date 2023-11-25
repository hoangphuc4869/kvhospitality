// phần trang Ẩm Thực

let thisPage = 1;
let limit = 3;
let list = document.querySelectorAll('.listPage');

function loadItem(){
    let beginGet = limit * (thisPage - 1);
    let endGet = limit * thisPage - 1;
    list.forEach((item, key)=>{
        if(key >= beginGet && key <= endGet){
            item.style.display = 'block';
        }else{
            item.style.display = 'none';
        }
    })
    listPage();
}
loadItem();

function listPage(){
    let count = Math.ceil(list.length / limit);
    document.querySelector('.activePag').innerHTML = '';

    for(i = 1; i <= count; i++){
        let newPage = document.createElement('li');
        newPage.innerText = i;
        if(i == thisPage){
            newPage.classList.add('active');
        }
        newPage.setAttribute('onclick', "changePage(" + i + ")");
        document.querySelector('.activePag').appendChild(newPage);
    }

}
function changePage(i){
    thisPage = i;
    loadItem();
}



// phần trang Golf

let thisPage2 = 1;
let limit2 = 3;
let list2 = document.querySelectorAll('.listPage2');

function loadItem2(){
    let beginGet = limit2 * (thisPage2 - 1);
    let endGet = limit2 * thisPage2 - 1;
    list2.forEach((item, key)=>{
        if(key >= beginGet && key <= endGet){
            item.style.display = 'block';
        }else{
            item.style.display = 'none';
        }
    })
    listPage2();
}
loadItem2();

function listPage2(){
    let count = Math.ceil(list2.length / limit2);
    document.querySelector('.activePag2').innerHTML = '';

    for(i = 1; i <= count; i++){
        let newPage = document.createElement('li');
        newPage.innerText = i;
        if(i == thisPage2){
            newPage.classList.add('active');
        }
        newPage.setAttribute('onclick', "changePage2(" + i + ")");
        document.querySelector('.activePag2').appendChild(newPage);
    }

}
function changePage2(i){
    thisPage2 = i;
    loadItem2();
}



// phần trang sư kiện tin tức

let thisPage3 = 1;
let limit3 = 3;
let list3 = document.querySelectorAll('.content-news-home');

function loadItem3(){
    let beginGet = limit3 * (thisPage3 - 1);
    let endGet = limit3 * thisPage3 - 1;
    list3.forEach((item, key)=>{
        if(key >= beginGet && key <= endGet){
            item.style.display = 'block';
        }else{
            item.style.display = 'none';
        }
    })
    listPage3();
}
loadItem3();

function listPage3(){
    let count = Math.ceil(list3.length / limit3);
    document.querySelector('.activePag3').innerHTML = '';

    for(i = 1; i <= count; i++){
        let newPage = document.createElement('li');
        newPage.innerText = i;
        if(i == thisPage3){
            newPage.classList.add('active');
        }
        newPage.setAttribute('onclick', "changePage3(" + i + ")");
        document.querySelector('.activePag3').appendChild(newPage);
    }

}
function changePage3(i){
    thisPage3 = i;
    loadItem3();
}