const hidePassword = () => {
    const hideButton = document.getElementById('hide-password')
    const passwordInput = document.getElementById('input-password')

    hideButton.addEventListener('click', () => {
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text'
            hideButton.src = '../assets/ICON-SHOW-VIEW-0003.png'
            passwordInput.classList.remove('correct')
            passwordInput.classList.add('wrong')
        } else {
            passwordInput.type = 'password'
            hideButton.src = '../assets/ICON-HIDE-VIEW-0004.png'
            passwordInput.classList.remove('wrong')
            passwordInput.classList.add('correct')
        }
    })
}
const notify = (formInputName, idName, message) => {
    const elementNotifierName = document.getElementById(`notify-${idName}`);
    const elementInputBox = document.getElementById(`input-${idName}`)
    
    if (!formInputName) {
        elementNotifierName.innerText = message;
        elementInputBox.classList.remove('correct')
        elementInputBox.classList.add('wrong')
    } else {
        elementNotifierName.innerText = '';
        elementInputBox.classList.remove('wrong')
        elementInputBox.classList.add('correct')
    }
}

const checkInputCredentials = () => {
    const form = document.forms['sign-in-form'];
    // * admin talaga to tinatamad na me magbago sa css haha ✌️✌️
    const admin = form['email'].value;
    const otpKey = form['otp-key'].value
    const password = form['password'].value 

    notify(admin, 'email','* Admin name is needed 🏮' )
    notify(otpKey, 'otp-key', '* OTP is needed 🔑')
    notify(password, 'password', '* Password is needed 🔒')

    if (!admin || !otpKey || !password) return false

    return true
}


const main = () => {
    hidePassword()
}

main()

