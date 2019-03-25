$(function(){ 
    var imagen=0;

    var palabras=llamarBBDD();
    var longitud=palabras.length;
    pictogramas=crearArray(longitud, palabras);
//   var elemental=desordenar(longitud,palabras)
//  document.getElementById('kanji').innerHTML=elemental[imagen];
    var elemental=insertarKanji(longitud, palabras,imagen);
    next(longitud, palabras,imagen,elemental)
    borrar(longitud,pictogramas,imagen)

})
function llamarBBDD(){
//Desde la BBDD
var palabras=document.getElementsByClassName('words');
return palabras
}

function crearArray(longitud, palabras){
//Crear el array para utilizar
pictogramas=new Array(longitud)
for(var j=0; j<longitud;j++){  
//Contenido guardado en un nuevo array      
pictogramas[j]=palabras[j].innerHTML;  
       
}
return pictogramas;
}

function desordenar(longitud,palabras){
    //Orden aletatorio
    desordenada=new Array(longitud)
    //Mismo vector pero desordenado
    desordenada=palabras[Math.floor(Math.random() * palabras.length)];
    for(var j=0; j<longitud;j++){  

    }

        Array.prototype.shuffle = function() {
            var input = this;

            for (var i = input.length-1; i >=0; i--) {

                var randomIndex = Math.floor(Math.random()*(i+1)); 
                var itemAtIndex = input[randomIndex]; 

                input[randomIndex] = input[i]; 
                input[i] = itemAtIndex;
            }
            return input;
        }

    var tempArray = pictogramas 
    tempArray.shuffle();//AHORA tempArray es la version mezclada
    return tempArray
    }

function insertarKanji(longitud, palabras,imagen){
    var elemental=desordenar(longitud,palabras)
    document.getElementById('kanji').innerHTML=elemental[imagen];
    return elemental;
}
function next(longitud, palabras,imagen){
    $( "#next" ).click(function() {
        insertarKanji(longitud, palabras, imagen); 
    });
    
}

function borrar(longitud,pictogramas,imagen){
 $("#borrar").click(function(){
        long=longitud-1
       nuevo=new Array(long)
       var j=0
       
        for(var k=0;k<longitud;k++){
            if(k!=imagen){
                nuevo[j]=pictogramas[k]            
            j++
            }            
        }  
        pictogramas=nuevo;
        longitud=long;
        imagen=Math.floor(Math.random() * pictogramas.length);
        insertarKanji(longitud,pictogramas,imagen);
        console.log(imagen)
        console.log(pictogramas)        
        return nuevo;

    })
}






