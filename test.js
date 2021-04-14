
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

                const onyx = {
                    userId: userId,
                    id: id,
                    title: title,
                    body: body      
                }

                let onyxString = JSON.stringify(onyx);

                /***
                 *
                var myObj = {some: data, other: stuff};
                var myObjString = JSON.stringify(myObj);
                // store string in mySQL database here

                // load string from database
                var myJSONString = //mySQL database call
                var myLoadedObj = JSON.parse(myJSONString);

                */
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

const onyxRes = arr.toString();
console.log(onyxRes);





   
