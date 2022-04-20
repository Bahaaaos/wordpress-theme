let link=document.querySelectorAll(".pagination a");
//console.log("hello ");
console.log(3);
let imag=document.querySelectorAll(".main-post .imag img");

imag.forEach((el)=>{
    el.height="250"


});
let input=document.querySelectorAll(".comment-respond input[type='text']");
input.forEach(el=>{
    el.classList.add("form-control");
});
let textarea=document.querySelector(".comment-respond textarea");
textarea.classList.add("form-control");
let btn=document.querySelector(".comment-respond input[type='submit']");
btn.classList.add('btn');
btn.classList.add('btn-primary');
let imags=document.querySelectorAll(".author-posts .imag img");
imags.forEach((el)=>{
    el.width='200';
    
})
