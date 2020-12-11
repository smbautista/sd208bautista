//check if the page is already loaded
// window.onload = ()=>{
// 	let error = document.getElementById('error').value;
// 	let message = document.getElementById('message').value;
// 	// console.log(error, message);
// 	if(error){
// 		alert(error);
// 	}
// 	if(message){
// 		alert(message);
// 	}

// }


const buttons = document.getElementsByClassName('ghost');
const signUpButton = buttons[1];
const signInButton = buttons[0];
const container = document.getElementById('container');
const signUp = document.getElementById('signUp');
const signIn = document.getElementById('signIn');

//add click event in signup button
signUpButton.addEventListener('click',()=> {
	container.classList.add("right-panel-active");
});

//add click event in ghost sign in button
signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

//to validate email
signUp.addEventListener('click', () => {
	let data = document.getElementById('email')
	var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (!filter.test(data)) {
		console.log("EMAIL IS NOT VALID!")
	}else{
		container.classList.remove("right-panel-active");
	}
	
});


//to redirect to another page 
signIn.addEventListener('click', () => {
	window.location.href = "/bio";
});
