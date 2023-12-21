    var form = document.getElementById("form-2");
    var form1 = document.getElementById("form-1");
    var username = document.getElementById("usename");
    var sodienthoai = document.getElementById("sodienthoai");
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirmPassword");
    var errorMessage = document.getElementById("message");
    if(form !==null){
        form.addEventListener("submit", (e) => {
            const errors = [];
            if (username.value.trim() === ""|| sodienthoai.value.trim() === ""|| password.value.trim() === ""|| confirmPassword.value.trim() === "") {
                errors.push("Nhập đầy đủ thông tin!");
            }
            else{
                // if(password.value.length < 4){
                //     errors.push("Mật khẩu phải có ít nhất 4 ký tự!");
                // }else{
                //     if(password.value.trim() !=confirmPassword.value.trim() ){
                //         errors.push("confirmPassword không khớp!");
                //     }
                // } 
                // if (!/^\d+$/.test(sodienthoai.value.trim())) {
                //     errors.push("Số điện thoại chỉ chứa ký tự số");
                // }  
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
    
