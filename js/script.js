const parentContainer = document.querySelector('.container');
parentContainer.addEventListener('click', event=>{
    const current = event.target;
    const isRadMoreBtn = current.className.includes('main_bt');
    if(!isRadMoreBtn) return;
    const currentText = event.target.parentNode.querySelector('.read-more-text');
    currentText.classList.toggle('read-more-text--show');
    current.textContent = current.textContent.includes('Read More') ? "Read Less" : "Read More";
})