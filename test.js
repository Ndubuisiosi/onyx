
    const onyxTest = async () => {
        try{
            const res = await fetch(`https://jsonplaceholder.typicode.com/posts`);
            const result = await res.json();

            //console.log(result);

            result.forEach(el => {
                const userId = el.userId;
                const id = el.id;
                const title = el.title;
                const body = el.body;  

                //const onyxx = [];
                const onyx = {
                    userId: userId,
                    id: id,
                    title: title,
                    body: body      
                }

                const onyxString = JSON.stringify(onyx);

                //write json string to a file
                const download = (content, filename, contentType) =>{
                    var a = document.createElement("a");
                    var file = new Blob([content], {type: contentType});
                    a.href = URL.createObjectURL(file);
                    a.download = filename;
                    a.click();
                }

                download(onyxString, 'user.json', 'text/plain');
                
                console.log(onyx);
                console.log(onyxString);

            });  
        
        }
        catch(error){
            alert(`There was an error :( ${error}`);
        }      
  }

onyxTest();

//Question 2
let arr = [4, "Z", "I", 7, 2, "D", "U", "A", 9, "W", 3];
console.log(arr);
[arr[1], arr[9]] = [arr[9], arr[1]];
[arr[2], arr[7]] = [arr[7], arr[2]];
[arr[5], arr[6]] = [arr[6], arr[5]];

const onyxRes = arr.join();
console.log(onyxRes);


// const fs = require('fs');
// fs.writeFile('user.json', onyxString , (err) => {
//     if (err){
//         throw err;
//     }
//     console.log("JSON data is saved");
// })




   
