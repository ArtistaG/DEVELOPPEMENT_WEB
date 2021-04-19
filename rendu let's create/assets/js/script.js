function etape1(){

    document.querySelector('.switch1').classList.add('switch2');
    document.querySelector('.switch4').classList.add('switch3');

    
    


}

function etape2(){

    document.querySelector('.switch4').classList.add('switch2');
    document.querySelector('.switch5').classList.add('switch3');
    document.querySelector('.switch4').classList.remove('switch3');


}

function etape3(){

    document.querySelector('.switch5').classList.add('switch2');
    document.querySelector('.switch4').classList.add('switch3');


}

