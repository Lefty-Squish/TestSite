let username = "Lefty";

console.log(`${username}`);



//Tabs for Business Address Services

function openSolution(event, solutionName) {
    let i, tabContent, BASLinks;
    tabContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    BASLinks = document.getElementsByClassName("BASLinks");
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


//Tabs for Company Formation & Ready Made Companies

function openCF(event, CFName) {
    let k, CFContent, CFLinks;
    CFContent = document.getElementsByClassName("CFContent");
    for (k = 0; k < CFContent.length; k++) {
        CFContent[k].style.display = "none";
    }

    CFLinks = document.getElementsByClassName("CFLinks");
    for (k = 0; k < CFLinks.length; k++) {
        CFLinks[k].className = CFLinks[k].className.replace(" active", "");
    }

    document.getElementById(CFName).style.display = "block";
    event.currentTarget.className += " active";
}


//Tabs for Meeting Rooms

function openMeeting(event, meetingName) {
    let l, meetingContent, meetingLinks;
    meetingContent = document.getElementsByClassName("meetingContent");
    for (l = 0; l < meetingContent.length; l++) {
        meetingContent[l].style.display = "none";
    }

    meetingLinks = document.getElementsByClassName("meetingLinks");
    for (l = 0; l < meetingLinks.length; l++) {
        meetingLinks[l].className = meetingLinks[l].className.replace(" active", "");
    }

    document.getElementById(meetingName).style.display = "block";
    event.currentTarget.className += " active";
}




