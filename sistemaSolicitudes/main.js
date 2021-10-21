let fecha = document.querySelector("#fecha")
let detalle = document.querySelector("#detalle")
let btn = document.querySelector("button")
let solicitud = {
    fecha:"",
    detalle:""
}

btn.addEventListener("click", mostrar)

function mostrar(event){
    event.preventDefault()
    console.log(fecha.value)
    console.log(detalle.value)
    solicitud.fecha = fecha.value
    solicitud.detalle = detalle.value


    fetch("guardar.php",{
        method:'POST',
        body: JSON.stringify(solicitud),
        headers:{
            'Content-Type': 'application/json'
         }
    }).then( res => res.json())
    .catch(error => console.error('Error:', error))
    .then(response => console.log('Success:', response));



}