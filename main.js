let username = "Lefty";

console.log(`${username}`);



//Tabs for Business Address Services

function openSolution(event, solutionName) {
    let i, tabContent, tabLinks;
    tabContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    tabLinks = document.getElementsByClassName("tabLinks");
    for (i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }

    document.getElementById(solutionName).style.display = "block";
    event.currentTarget.className += " active";
}


