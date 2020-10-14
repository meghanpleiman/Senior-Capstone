window.addEventListener("load", function() {
    var form = document.querySelector("#mainForm");
    form.addEventListener("submit", function(e) {
        var requiredFields = document.querySelectorAll('.required');
        var requiredFieldsList = [];
        for(i = 0; i < requiredFields.length; i++)
        {
            if (requiredFields[i].value == null || requiredFields[i].value == "")
            {   
                e.preventDefault();
                requiredFields[i].classList.add("error");
                requiredFieldsList.push(requiredFields[i]);
                

            }
            else {
                requiredFields[i].classList.remove("error");
            }
        }
        if (requiredFieldsList.length != 0)
        {
            alert("You have left at least one required field empty.")
        }
    });
});