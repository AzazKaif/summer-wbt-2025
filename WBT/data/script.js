
var database = [
  {
    username: "kaif",
    password: "1234"
  },
  {
    username: "su",
    password: "5678"
  }
];


let usersArray = JSON.parse(localStorage.getItem("usersArray")) || [];

    
      let html = "";
      usersArray.forEach((user, index) => {
        html += `
         
          <strong>First Name:</strong> ${user.firstname}<br>
          <strong>Last Name:</strong> ${user.lastname}<br>
          <strong>Email:</strong> ${user.email}<br>
          <strong>Reason for Contact:</strong> ${user.reason}<br>
          <strong>Speciality:</strong> ${user.speciality}<br>
          <strong>Offering Job:</strong> ${user.offerajob}<br>
          <strong>Position:</strong> ${user.position}<br>
          <hr>
        `;
      });
      document.getElementById("userInfo").innerHTML = html;
    


var userNamePrompt = prompt("What's your username?");
var passwordPrompt = prompt("What's your password?");

function signIn(user, pass) {
  for (var i = 0; i < database.length; i++) {
    if (user === database[i].username && pass === database[i].password) {

      displayInfo(info[i]);
      return;
    }
  }
  alert("Incorrect username or password. Try again!");
}




signIn(userNamePrompt, passwordPrompt);
