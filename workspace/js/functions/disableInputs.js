export default function disableInputs(arrOfInputs){
    console.log(arrOfInputs)
    arrOfInputs.forEach((el, indx) => {
        el.disabled = true
        el.onchange =()=> {
            if (el.value) arrOfInputs[indx+1].disabled = false;
        }
    })
    
    arrOfInputs[0].disabled = false
}