


document.getElementById('guardar').addEventListener("click",()=>{

    let idusf=document.getElementById("idus").value;
    let nombref=document.getElementById("nombre").value;
    let apef=document.getElementById("ape").value;
    let edaf=document.getElementById("eda").value;
    let npasf=document.getElementById("npas").value;
    let paisf=document.getElementById("pais").value;
    let dirf=document.getElementById("dir").value;
    let telf=document.getElementById("tel").value;
    let corf=document.getElementById("cor").value;
    let claf=document.getElementById("cla").value;
    
    
    let datos={
        id:idusf,
        nombre:nombref,
        ape:apef,
        eda:edaf,
        npas:npasf,
        pais:paisf,
        dir:dirf,
        tel:telf,
        cor:corf,
        cla:claf
    };
    
    alert(datos.nombre + '' + datos.edad + '' + datos.fecha );
    
    let response = fetch('http://localhost:5555/', {
    method:'POST',
    headers: {
    'Content-Type':'application/json;charset=utf-8'
        
    },
    
    body:JSON.stringify(datos)
    
    
    
    });
    alert('datos almacenados');
    
    });