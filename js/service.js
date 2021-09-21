var sec1 = document.getElementById('haircut');
var sec2 = document.getElementById('bearcut');
var sec3 = document.getElementById('hairspa');

var sec11 = document.getElementById('section-1');
var sec22 = document.getElementById('section-2');
var sec33 = document.getElementById('section-3');

var footer = document.getElementById('footer');

sec1.addEventListener("click",first);
sec2.addEventListener("click",second);
sec3.addEventListener("click",third);


     
function first(){
  sec1.style.backgroundColor='#faebd7';
  sec1.style.margin= '20px';
  sec2.style.backgroundColor= '#3895d3';
  sec2.style.margin ='0';
  sec3.style.backgroundColor= '#3895d3';
  sec3.style.margin ='0';
  footer.style.marginTop = '2400px';

  footer.style.marginTop = '3350px'
  sec11.style.visibility= 'visible';
  sec22.style.visibility= 'hidden';
  sec33.style.visibility= 'hidden';
}

function second(){
  sec1.style.backgroundColor='#3895d3';
  sec1.style.margin ='0';
  sec2.style.backgroundColor='#faebd7';
  sec2.style.margin ='20px';
  sec3.style.backgroundColor='#3895d3';
  sec3.style.margin ='0';
  
  footer.style.marginTop = '3350px';


  
  
  sec11.style.visibility= 'hidden';
  sec22.style.visibility= 'visible';
  sec33.style.visibility= 'hidden';
 
}

function third(){
  sec1.style.backgroundColor='#3895d3';
  sec1.style.margin ='0';
  sec2.style.backgroundColor='#3895d3';
  sec2.style.margin ='0';
  sec3.style.backgroundColor='#faebd7';
  sec3.style.margin ='20px';

  footer.style.marginTop = '3300px';

  
  
  
  sec11.style.visibility= 'hidden';
  sec22.style.visibility= 'hidden';
  sec33.style.visibility= 'visible';
}