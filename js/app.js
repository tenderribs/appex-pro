console.log("d(•.•)b Hello There!!")


function activeNavBar(){
    let active = "is-active"
    var element = document.getElementById("mainNavBar")
    var elementNavBarBurger = document.getElementById("navBarBurger")

    
    // element.classList returns an array of element class names
    // we check if it contains "is-active" we remove it else we add it
    // console.log(element.classList)
    if (element.classList.contains(active)) {
        element.classList.remove(active)       
    } else {
        element.classList.add(active)    
    }

    if (elementNavBarBurger.classList.contains(active)) {
        elementNavBarBurger.classList.remove(active)       
    } else {
        elementNavBarBurger.classList.add(active)    
    }

}