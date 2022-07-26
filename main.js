let username = "Lefty";

console.log(`${username}`);



//Tabs for Business Address Services

function openSolution(event, solutionName) {
    let i, tabContent, BASLinks;
    tabContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    BASLinks = document.getElementsByClassName("tabLinks");
    for (i = 0; i < BASLinks.length; i++) {
        BASLinks[i].className = BASLinks[i].className.replace(" active", "");
    }

    document.getElementById(solutionName).style.display = "block";
    event.currentTarget.className += " active";
}


//Tabs for Telephone Answering Service

function openTab(event, tabName) {
    let j, TASContent, TASLinks;
    TASContent = document.getElementsByClassName("TASContent");
    for (j = 0; j < TASContent.length; j++) {
        TASContent[j].style.display = "none";
    }

    TASLinks = document.getElementsByClassName("TASLinks");
    for (j = 0; j < TASLinks.length; j++) {
        TASLinks[j].className = TASLinks[j].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    event.currentTarget.className += " active";
}

