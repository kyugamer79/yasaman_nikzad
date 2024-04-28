const mobileMenu = () => {
    const mobileMenuOpener = document.getElementById('mobileMenuOpener');
    const mobileMenu = document.getElementById('mobileMenu');

    if(!mobileMenu || !mobileMenuOpener){
        return;
    }


    mobileMenuOpener.addEventListener('click' , ()=>{
        mobileMenu.classList.add('active');
    })

    mobileMenu.addEventListener('click' , (event)=>{
        
        if(event.target === mobileMenu){
            mobileMenu.classList.remove('active');
        }
    })



}


mobileMenu();