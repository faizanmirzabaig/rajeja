
let title =document.getElementById('panel-title');
let panel=document.getElementById('collapseOne');
panel.style.display='block';

title.addEventListener('click',function(){
    console.log('hi')
    if (panel.style.display=='block') {
        $('#accord-icon1').removeClass('fa-arrow-up');
        $('#accord-icon1').addClass('fa-arrow-down');
        panel.style.display='none';

    } else {
        panel.style.display='block';
        $('#accord-icon1').addClass('fa-arrow-up');
        $('#accord-icon1').removeClass('fa-arrow-down');


    }
})

let paneltitle__ =document.getElementById('panel-titletwo');
let collapseone=document.getElementById('collapseOne__');
collapseone.style.display='none';

paneltitle__.addEventListener('click',function(){
    if (collapseone.style.display=='none') {
        $('#accord-icon2').removeClass('fa-arrow-up');
        $('#accord-icon2').addClass('fa-arrow-down');
        collapseone.style.display='block';
        collapseone.style.transition='all 15s ';

    } else {
        collapseone.style.display='none';
        $('#accord-icon2').addClass('fa-arrow-up');
        $('#accord-icon2').removeClass('fa-arrow-down');
        collapseone.style.transition='all 15s ';


    }
})

let titlethree =document.getElementById('panel-titlethree');
let collapseOne___=document.getElementById('collapseOne___');
collapseOne___.style.display='none';

titlethree.addEventListener('click',function(){
    console.log('hi')
    if (collapseOne___.style.display=='none') {
        collapseOne___.style.display='block';
        $('#accord-icon3').removeClass('fa-arrow-up');
        $('#accord-icon3').addClass('fa-arrow-down');

// collapseOne___.classList.add('animate__animated', 'animate__bounceOutLeft');


    } else {
        collapseOne___.style.display='none';
        $('#accord-icon3').addClass('fa-arrow-up');
        $('#accord-icon3').removeClass('fa-arrow-down');
collapseOne___.classList.add('animate__animated', 'animate__backInDown');



    }
})

// console.log(title)
