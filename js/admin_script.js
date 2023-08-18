//make the login div active with a condition
let profile = document.querySelector('.header .flex .profile');

//there are two profile and navbar, it means that when one is active other should be deactive
document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classslist.remove('active');
}


// makes navbar come in drop down when the size of site is decreased
let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classslist.remove('active');
}

window.onscroll = () =>{
    profile.classslist.remove('active');
    navbar.classslist.remove('active');

}