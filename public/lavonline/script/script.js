








// CARROSSEL

const slider = document.querySelectorAll('.slide')
const btnProx = document.querySelectorAll('#prox-btn')
const btnPrev = document.querySelectorAll('#voltar-btn')

const images = document.querySelectorAll('.slide')
const balls = document.querySelectorAll('.bola')

const person = document.querySelector('.person')
const DropDown1 = document.querySelector('.dropdown')

const body = document.querySelector('body')

let currentSlide = 0

function hideSlider() {
    slider.forEach(item => item.classList.remove('on'))
}

function showSlider() {
    slider[currentSlide].classList.add('on')
}

function ProxSlider() {
    hideSlider()
    if (currentSlide === slider.length - 1) {
        currentSlide = 0
    } else {
        currentSlide++
    }
    showSlider()
}

function PrevSlider() {
    hideSlider();
    if (currentSlide === 0) {
        currentSlide = slider.length - 1
    } else {
        currentSlide--
    }
    showSlider()
}

function btn_Avancar() {
    btnProx.forEach(button => {
        button.addEventListener('click', ProxSlider)
    })
}
function btn_voltar() {
    btnPrev.forEach(button => {
        button.addEventListener('click', PrevSlider)
    })
}

function updateBolaCor() {
    balls.forEach(b => b.classList.remove('ball-background'))
    balls[currentSlide].classList.add('ball-background')
}

function Timer() {
    setTimeout(() => {
        ProxSlider()
        updateBolaCor()
        Timer()
    }, 2000)
}

function ProxAuto() {
    if (!btn_Avancar()) {
        Timer()
        BalasCor()
    }
}


function StopTime() {
    if (btn_Avancar()) {
        clearTimeout()
    }
}


function BalasCor() {
    balls.forEach(ball => {
        ball.addEventListener('click', () => {
            balls.forEach(b => b.classList.remove('active'))
            ball.classList.add('active')
            balls.forEach(b => b.classList.remove('ball-background'))
            ball.classList.add('ball-background')
            images.forEach(image => image.style.opacity = 0)
            const imageId = ball.getAttribute('data-image')
            document.getElementById(`img${imageId}`).style.opacity = 1
            Timer()
        });
    });
}



// FUNÇÃO NAVBAR

function DropDown() {

    person.addEventListener('click', () => {
        if (DropDown1.style.display == 'block') {
            DropDown1.style.display = 'none'
        } else {
            DropDown1.style.display = 'block'
        }
    })

    body.addEventListener('click', (event) => {
        if (event.target !== person && event.target !== DropDown1) {
            DropDown1.style.display = 'none'
        }
    });
    
}

function DropDown_mob(){
    const person_mob = document.querySelector('.person_mob')

    const DropDown2 = document.querySelector('.dropdown_mobile')

    const mobile_menu = document.querySelector('.mobile-menu')

    person_mob.addEventListener('click', () => {
        if (DropDown2.style.display === 'block') {
            DropDown2.style.display = 'none'
        } else {
            DropDown2.style.display = 'block'
        }
    })

    body.addEventListener('click', (event) => {
        if (event.target !== person_mob && event.target !== DropDown2) {
            DropDown2.style.display = 'none'
            console.log('teste')
        }


    });
}


function Mobile_Nav(){
    class Mobile_Navbar{
        constructor(mobileMenu, navList, navLinks){
            this.mobileMenu = document.querySelector(mobileMenu);
            this.navList = document.querySelector(navList);
            this.navLinks = document.querySelectorAll(navLinks); 

            this.activeClass = "active";

            this.HandleClick = this.HandleClick.bind(this);
        }

        HandleClick(){
            console.log(this);
            this.navList.classList.toggle(this.activeClass);
            this.mobileMenu.classList.toggle(this.activeClass);
        }

        addClickEvent(){
            this.mobileMenu.addEventListener('click', this.HandleClick);
        }

        init(){
            if (this.mobileMenu) {
                this.addClickEvent();
                this.addLinkClickEvents(); 
            }
            return this;
        }

        addLinkClickEvents() {
            this.navLinks.forEach(link => {
                link.addEventListener('click', (event) => {
                    event.stopPropagation(); // Impede que o clique no link se propague para o pai (mobileMenu)
                });
            });
        }
    }

    const mobileNavbar = new Mobile_Navbar(
        ".mobile-menu",
        ".nav-list",
        ".nav-list li"
    );

    mobileNavbar.init();
}


function Funcao(){
    
    // btn_Avancar()

    // btn_voltar()
        
    ProxAuto()
        
    // StopTime()

    BalasCor()

    balls[0].classList.add('ball-background')
    balls[0].classList.add('active')
    images[0].style.opacity = 1

    DropDown()

    DropDown_mob()

    Mobile_Nav()
}

Funcao()
