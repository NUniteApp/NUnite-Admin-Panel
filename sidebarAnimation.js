//Sidebar Animation

var li_items = document.querySelectorAll(".sidebar ul li");
var toggle_menu = document.querySelector(".toggle-menu");
var wrapper = document.querySelector(".wrapper");


li_items.forEach((li_item)=>{
    li_item.addEventListener("mouseenter", ()=>{
        if(wrapper.classList.contains("click_collapse")){
        }
        else{
            li_item.closest(".wrapper").classList.remove("hover_collapse");
        }
    })
});

li_items.forEach((li_item)=>{
    li_item.addEventListener("mouseleave", ()=>{
        if(wrapper.classList.contains("click_collapse")){
        }
        else{
            li_item.closest(".wrapper").classList.add("hover_collapse");
        }
    })
});

toggle_menu.addEventListener("click", () => {
    toggle_menu.closest(".wrapper").classList.toggle("click_collapse");
    toggle_menu.closest(".wrapper").classList.toggle("hover_collapse");
})