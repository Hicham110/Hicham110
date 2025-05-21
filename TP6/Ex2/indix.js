
const form = document.getElementById("tachn");
const input = document.getElementById("tach");
const list = document.getElementById("list");


form.addEventListener("submit", function(e) {
    e.preventDefault(); 
    const taskText = input.value.trim();
    if (taskText === "") return; 
    
    const li = document.createElement("li");

   
    const span = document.createElement("span");
    span.textContent = taskText;

   
    const doneBtn = document.createElement("button");
    doneBtn.textContent = "✅";
    doneBtn.style.marginLeft = "10px";
    doneBtn.addEventListener("click", () => {
        span.style.textDecoration = "line-through";
        span.style.color = "gray";
    });

    
    const deleteBtn = document.createElement("button");
    deleteBtn.textContent = "🗑️";
    deleteBtn.style.marginLeft = "5px";
    deleteBtn.addEventListener("click", () => {
        list.removeChild(li);
    });

   
    li.appendChild(span);
    li.appendChild(doneBtn);
    li.appendChild(deleteBtn);

  
    list.appendChild(li);

    input.value = "";
});
