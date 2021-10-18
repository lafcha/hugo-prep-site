/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
    const icon = document.getElementById('hamburger-icon');
  
    if (icon.classList.contains('fa-bars')){
      icon.classList.remove('fa-bars');
      icon.classList.add('fa-times');

    } else {
      icon.classList.remove('fa-times');
      icon.classList.add('fa-bars');
   
    }

        
      
  };