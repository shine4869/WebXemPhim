    var form = document.getElementById("form-2");
    var form1 = document.getElementById("form-1");
    var form3 = document.getElementById("form-3");
    var username = document.getElementById("usename");
    var sodienthoai = document.getElementById("sodienthoai");
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirmPassword");

    var passwordnew = document.getElementById("changepasswordnew");
    var confirmPasswordnew = document.getElementById("confirmchangepasswordnew");

    var errorMessage = document.getElementById("message");
    if(form !==null){
        form.addEventListener("submit", (e) => {
            const errors = [];
            if (username.value.trim() === ""|| sodienthoai.value.trim() === ""|| password.value.trim() === ""|| confirmPassword.value.trim() === "") {
                errors.push("Nhập đầy đủ thông tin!");
            }
            else{
                if(password.value.trim() !=confirmPassword.value.trim() ){
                    errors.push("confirmPassword không khớp!");
                }                
            }        
            if(errors.length > 0){
                e.preventDefault();
                errorMessage.toggleAttribute('hidden');
                errorMessage.innerHTML = errors.join(', ');
            }
        })
    }
   if(form1!==null){
    form1.addEventListener("submit", (e) => {
        const errors = [];
        if (username.value.trim() === ""|| password.value.trim() === "") {
            errors.push("Nhập đầy đủ thông tin!");
        }
        
    
        if(errors.length > 0){
            e.preventDefault();
            errorMessage.toggleAttribute('hidden');
            errorMessage.innerHTML = errors.join(', ');
        }
    })
   }

   if(form3!==null){
    form3.addEventListener("submit", (e) => {
        const errors = [];
        if ( password.value.trim() === ""||passwordnew.value.trim() === ""||confirmPasswordnew.value.trim() === "") {
            errors.push("Nhập đầy đủ thông tin!");
        }else{
          if(passwordnew.value.trim()!=confirmPasswordnew.value.trim() ){
            errors.push("confirmPasswordnew không khớp!");
          } 
        }
        if(errors.length > 0){
            e.preventDefault();
            errorMessage.toggleAttribute('hidden');
            errorMessage.innerHTML = errors.join(', ');
        }
    })
   }
const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");
arrows.forEach((arrow, i) => {
  const itemNumber = movieLists[i].querySelectorAll("img").length;
  let clickCounter = 0;
  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 270);
    clickCounter++;
    if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
      movieLists[i].style.transform = `translateX(${
        movieLists[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });
  console.log(Math.floor(window.innerWidth / 270));
});


