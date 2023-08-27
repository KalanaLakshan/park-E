document.querySelector('.toggle-password').addEventListener('click',function(){
    var passwordField = document.querySelector(this.getAttribute('toggle'));
    this.classList.toggle('active');
    if(passwordField.type === 'password'){
        passwordField.type = 'text';
    }
    else
    {
        passwordField.type = 'password';
    }
});