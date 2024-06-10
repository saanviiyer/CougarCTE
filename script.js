
/*
const selectBtn = document.getElementById('select-btn');
const filterBtn = document.getElementById('filter-btn');
const option = document.getElementsByClassName('option');

selectBtn.addEventListener('click', function(){
    selectBtn.classList.toggle("active");

});

for(options of option){
    options.addEventListener('click', function(){
        filterBtn.innerHTML = this.textContent;
        selectBtn.classList.toggle('active');
        
    })
}
*/


/*
const select = document.querySelector('select');
const classes = document.querySelector('.classes');

select.addEventListener('change', function(event){
    const selected = event.target.value;
    
    for(let i = 0; i<classes.children.length; i++){
        const currentclass = classes.children[i];

        if(selected.match('none')){
            currentclass.style.display = 'block';
        }
        else{
            if(currentclass.id.match(selected)){
                currentclass.style.display = 'block';
            }
            else{
                currentclass.style.display = 'none';
            }
        }
    }
})
*/


const select = document.getElementById("select");
const classes = document.querySelector('.classes');

select.addEventListener('change', function(event){
    let selected =  event.target.value;

    for(let i = 0; i<classes.children.length; i++){
        let currentclass = classes.children[i];
        if(selected == 'all'){
            currentclass.style.display = 'block';
            
        }
        else if(selected.match(currentclass.id)){
            //currentclass.style.display = 'block';
            currentclass.hidden = 'false';
            
        }
        else if(!selected.match(currentclass.id)){
            currentclass.style.display = 'none';
            
        }
    }
    
});

function navigateToPage(buttonId){
    window.location.href = "classPage.php?button=" + buttonId;
    
}