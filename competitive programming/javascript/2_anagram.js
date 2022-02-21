let a = ["kita","tika","kati","kala","itak",'tasa',"lolai","taki"]; // 5
let x = ["kita","tika","kati","kala","itak",'tasa',"lolai","taki","kia","lolia"]; // 5
let b = "itak";

const findWordV1 = (find,arr)=>{
    let result = [];
    let findSort = find.split("").sort().join("");
    for (let j = 0; j < arr.length; j++){
        if(find.length == arr[j].length){
            const arrSort = arr[j].split("").sort().join("");
            if(findSort == arrSort){
                result.push(arr[j]);
            }
        }
    }
    return result;
}

