window.addEventListener('load',function(){

    console.log('passe')
    let elmLogo = document.querySelector('.site-branding .site-logo')
    let elmTitre = document.querySelector('.site-branding .site-title')
    let elmDescription = document.querySelector('.site-branding .site-description')

    
    elmTitre.classList.add('anim1')
    elmLogo.classList.add('anim2')
    elmDescription.classList.add('anim3')
})