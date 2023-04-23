function selectProfilePicture() {
  document.getElementById("picture-input").click();
}

function displaySelectedPicture(event) {
  var pictureUrl = URL.createObjectURL(event.target.files[0]);
  document.getElementById("profile-picture").src = pictureUrl;
}

function changeProfilePicture() {
  var pictureUrl = prompt("Enter the URL of your new profile picture:");
  if (pictureUrl !== null && pictureUrl !== "") {
    document.getElementById("profile-picture").src = pictureUrl;
  }
}





// random identification code creator

const usedCodes = new Set();
const identification = document.querySelector('.main .container .account .general .account-information p .identification-code')

function generateIdentificationCode() {
  const characters = '1234567890abcd';
  let code;
  do {
    code = 'MG';
    for (let i = 0; i < 8; i++) {
      const randomIndex = Math.floor(Math.random() * characters.length);
      code += characters[randomIndex];
    }
  } while (usedCodes.has(code));
  
  usedCodes.add(code);
  return code;
}

if (!localStorage.getItem('identificationCode')) {
  localStorage.setItem('identificationCode', generateIdentificationCode())
}


identification.innerText = localStorage.getItem('identificationCode')