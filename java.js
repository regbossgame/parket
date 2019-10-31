setTimeout('flash(0);',30);

function flash(k){
id=document.getElementById('num');
id.style.color='#'+rgb2hex(Math.abs(Math.round(Math.sin(k)*215))+10,Math.abs(Math.round(Math.cos(k)*165))+10,Math.abs(Math.round(Math.cos(k)*215))+10);//Math.abs(Math.round(Math.cos(k)*175))+10)
//id.innerText=k;
setTimeout('flash('+(k+0.05)+');',30);
}

function rgb2hex(r,g,b){

 return Number(r).toString(16).toUpperCase().replace(/^(.)$/,'0$1') + 

 Number(g).toString(16).toUpperCase().replace(/^(.)$/,'0$1') +

 Number(b).toString(16).toUpperCase().replace(/^(.)$/,'0$1');

}