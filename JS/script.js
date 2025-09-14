function contactMe()
{
    var reasonForContact = prompt("What is the reason for contact? (project, thesis, meet)");
    if (String(reasonForContact) === "project")
    {
        alert("Thank you for contacting me for a project.");
    }
    else if (String(reasonForContact) === "thesis")
    {
        alert("Thank you for contacting me for a thesis.");
    } 
    else if (String(reasonForContact) === "meet")
    {
        alert("I am not available for the meeting now.");
    } 
    else
    {
        alert("Thank you for contacting me.");
    }

    var specialityInput = prompt("For which speciality do you need? (machine learning, website, database)");
    if (String(specialityInput) === "machine learning")
    {
        alert("I can help in Machine Learning.");
    }
    else if (String(specialityInput) === "website")
    {
        alert("I can help in web development.");
    }
    else if (String(specialityInput) === "database") 
    {
        alert("I can help in database related work.");
    } 
    else {
        alert("I will try my best to help you in your specified area.");
    }

    var jobOffer = prompt("Are you offering a job? (yes or no)");
    if (String(jobOffer) === "yes")
    {
        alert("Thank you for the job offer!");
    } 
    else if (String(jobOffer) === "no")
    {
        alert("No problem. Happy to collaborate in other ways.");
    } 

    var position = prompt("What is your position in the company? (hr, employee, manager)");
    if (String(position) === "hr")
    {
        alert("Glad to connect with a Human Resource Officer.");
    } 
    else if (String(position) === "employee")
    {
        alert("Nice to connect with an employee.");
    } 
    else if (String(position) === "manager")
    {
        alert("It's a pleasure to connect with a manager.");
    } 
    else
    {
        alert("I didn't get your profession");
    }
}