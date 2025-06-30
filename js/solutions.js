const seeMoreBtn = document.querySelectorAll('.see-more');
const moreInfos = document.querySelectorAll('.more');

seeMoreBtn.forEach((btn,index) => {
  btn.addEventListener('click', function(){
    moreInfos[index].classList.toggle('hide');
    if(btn.textContent == "See more"){
      btn.textContent = "See less"
    }else if(btn.textContent == "See less"){
      btn.textContent = "See more"    
    }
  })
})