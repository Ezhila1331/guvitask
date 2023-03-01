function addData(){
   var name = document.getElementById('name'). value;
   var email = document.getElementById('email'). value;
   var pass = document.getElementById('pwd'). value;
  

 localStorage.setItem('Name',name);
 localStorage.setItem('Email', email);
 localStorage.setItem('Pwd',pass)
 
}

