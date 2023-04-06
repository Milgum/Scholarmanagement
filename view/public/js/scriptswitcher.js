/**theme colors */
const alternateStyles = document.querySelectorAll(".alternate-style");
function activestyle(color)
{
    alternateStyles.forEach((style) => {
        if(color === style.getAttribute("title"))
        {
            style.removeAttribute("disabled");
        }
        else
        {
            style.setAttribute("disabled","true");
        }
    })

}

/** dark mode light mod */
const dayNight = document.querySelector(".day-night");
dayNight.addEventListener("click",() =>{
    dayNight.querySelector("i").classList.toggle("fa-sun-o");
    dayNight.querySelector("i").classList.toggle("fa-moon-o");
    document.body.classList.toggle("dark");
})
window.addEventListener("load", () =>{
    if(document.body.classList.contains("darks"))
    {
        dayNight.querySelector("i").classList.add("fa-sun-o")
    }
    else
    {
    
        dayNight.querySelector("i").classList.add("fa-moon-o")
        
    }
})