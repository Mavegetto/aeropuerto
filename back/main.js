var Formulario;

function cargar(){

fetch("http://localhost/view/base.datos.php")
.then(reponse=>reponse.json())
.then(data=>{
console.log(data);
let medida=data.length;
document.getElementById('aerolinea').innerHTML= document.getElementById('aerolinea').innerHTML ='';
for(x=0;x<=medida-1;x++){
let carta=` <tr>
<th scope="row">${data[x].id}</th>
<td>${data[x].nombre}</td>
<td>${data[x].usuario}</td>
<td>${data[x].edad}</td>
<td>${data[x].boleta}</td>
<td>${data[x].asiento}</td>
<td>${data[x].vuelo}</td>
</tr>`;
document.getElementById('aerolinea').innerHTML= document.getElementById('aerolinea').innerHTML + carta;
}



});
}

document.getElementById('aerolinea').addEventListener("click",()=>{

  formulario = new FormData();

  formulario.append('nom',document.getElementById('nom').value);
  formulario.append('usu',document.getElementById('usu').value);
  formulario.append('ed',document.getElementById('ed').value);
  formulario.append('bol',document.getElementById('bol').value);
  formulario.append('asi',document.getElementById('asi').value);
  formulario.append('vue',document.getElementById('vue').value);

 
  let respon=fetch("http://localhost/view/base.datos.php",{
    method:"POST",
    
  });
  cargar();


});