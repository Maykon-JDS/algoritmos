
var lista = [0,2,4,7,9,10,77];

function binarySearch(value, list){
    
    let low = 0;
    let hight = list.length - 1;

    while (low <= hight) {
        let midle = Math.floor((low + hight) / 2);

        if(value == list[midle]){
            return midle;
        }else if(value < list[midle]){
            hight = midle - 1;
        }
        else if(value > list[midle]){
            low = midle + 1;
        }
    }
        
   

    return 0
}

console.log(binarySearch(10,  lista))