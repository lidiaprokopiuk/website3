    // timeout before a callback is called

    let timeout;

    // traversing the DOM and getting the input and span using their IDs

    let password = document.getElementById('PassEntry');
    let strengthBadge = document.getElementById('StrengthDisp');
    let strengthProgress = document.getElementById('strengthProgress');
    var progressBar = strengthProgress.querySelectorAll(".progress-bar");

    // The strong and weak password Regex pattern checker
    
    let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
    let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))');
    let weakPassword = new RegExp('[a-z]');


    


    function StrengthChecker(PasswordParameter){
        // We then change the badge's color and text based on the password strength
        progressBar.forEach((progress) => {
            // console.log(progress);
                
            
            // console.log(first2);
        if(strongPassword.test(PasswordParameter)) {
            progress.classList.add('strong')
            progress.classList.remove('weak', 'medium')
            strengthBadge.textContent = 'Strong'
        } else if(mediumPassword.test(PasswordParameter)){
            progress.classList.add('medium')
            progress.classList.remove('weak', 'strong')
            strengthBadge.textContent = 'Medium'
        } else if(weakPassword.test(PasswordParameter)){
            progress.classList.add('weak')
            progress.classList.remove('medium', 'medium')
            strengthBadge.textContent = 'Weak'
        } else {
            progress.classList.remove('weak', 'medium', 'medium')
            strengthBadge.textContent = 'None'
        }
        })  
    }

    // Adding an input event listener when a user types to the  password input 

    password.addEventListener("input", () => {
        StrengthChecker(password.value)

        //The badge is hidden by default, so we show it

        // strengthBadge.style.display= 'block'
        // clearTimeout(timeout);

        // //We then call the StrengChecker function as a callback then pass the typed password to it

        // timeout = setTimeout(() => StrengthChecker(password.value), 0);

        //Incase a user clears the text, the badge is hidden again

        // if(password.value.length !== 0){
        //     strengthBadge.style.display != 'block'
        // } else{
        //     strengthBadge.style.display = 'none'
        // }
    });