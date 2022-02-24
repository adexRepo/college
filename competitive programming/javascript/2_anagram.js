let arr1 = ["kita","tika","kati","kala","itak",'tasa',"lolai","taki"]; // 5
let target = "itak";

// NOTE FIND SIMILAR ANAGRAMS WITH TARGET
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

console.log(findWordV1(target,arr1));

// NOTE CATEGORY
let arr2 = ["asa", "asd","cuih","hiuc","sad","togis","gisto","dsa","kow","wok"];
const anagram = (arr) => {
    let newArr = [];
    let arrTarget = [];
    let result = [];
    for (let i = 0; i < arr.length; i++) {
        newArr.push(arr[i].split("").sort().join(""));
        newArr.sort();
        if(i == arr.length-1){
            for (let i = 0; i < newArr.length; i++) {
                if(newArr[i] != newArr[i+1]){
                    const temp = [];
                    arrTarget.push(newArr[i]);
                    for (let j = 0; j < arr.length; j++) {
                        const temp2 = arr[j].split("").sort().join("");
                        if(arrTarget[arrTarget.length-1] == temp2){
                            temp.push(arr[j]);
                        }
                    }
                    result.push(temp);
                }
            }
        }
    }
    return result;
}

console.log(anagram(arr2));