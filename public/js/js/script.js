// CARROSSEL

const slider  =  document.querySelectorAll('.slide')
const btnProx =  document.querySelectorAll('#prox-btn')
const btnPrev =  document.querySelectorAll('#voltar-btn')

const images = document.querySelectorAll('.slide');
const balls = document.querySelectorAll('.bola');


let currentSlide = 0

function hideSlider(){
    slider.forEach(item => item.classList.remove('on'))
}

function showSlider(){
    slider[currentSlide].classList.add('on')
}

function ProxSlider(){
    hideSlider()
    if(currentSlide === slider.length -1){
        currentSlide = 0
    } else {
        currentSlide++
    }
    showSlider()
    
}


function PrevSlider(){
    hideSlider()
    if(currentSlide === 0){
        currentSlide = slider.length -1
    } else {
        currentSlide--
    }
    showSlider()    
}

function btn_Avancar(){

    btnProx.forEach(button => {
        button.addEventListener('click', ProxSlider);
    })
    }
    
    btn_Avancar()
    
    function btn_voltar() {
    
    btnPrev.forEach(button => {
        button.addEventListener('click', PrevSlider);
    })
    }
    
    btn_voltar()


    function Timer() {
        setTimeout(() => {
            ProxSlider() 
            Timer() 
        }, 2000)
    }

function ProxAuto() {
    if(!btn_Avancar()){
    Timer()
}

}

// ProxAuto()

function StopTime(){
    if(btn_Avancar()){
        clearTimeout()
    }
}

StopTime()

function BalasCor(){

balls.forEach(ball => {
    ball.addEventListener('click', () => {
        
        balls.forEach(b => b.classList.remove('active'));
        
        ball.classList.add('active');
        
        balls.forEach(b => b.classList.remove('ball-background'));
        
        ball.classList.add('ball-background');
        
        images.forEach(image => image.style.opacity = 0);
        
        const imageId = ball.getAttribute('data-image');
        document.getElementById(`img${imageId}`).style.opacity = 1;
    });
});
}

BalasCor()


balls[0].classList.add('ball-background');

balls[0].classList.add('active');
images[0].style.opacity = 1;



