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
        BASLinks[i].className = BASLinks[i].className.replace(" sub-active", "");
    }

    document.getElementById(solutionName).style.display = "block";
    event.currentTarget.className += " sub-active";
}


//Tabs for Telephone Answering Service

function openTab(event, tabName) {
    let i, TASContent, TASLinks;
    TASContent = document.getElementsByClassName("TASContent");
    for (i = 0; i < TASContent.length; i++) {
        TASContent[i].style.display = "none";
    }

    TASLinks = document.getElementsByClassName("TASLinks");
    for (i = 0; i < TASLinks.length; i++) {
        TASLinks[i].className = TASLinks[i].className.replace(" sub-active", "");
    }

    document.getElementById(tabName).style.display = "block";
    event.currentTarget.className += " sub-active";
}


//Tabs for Company Formation & Ready Made Companies

function openCF(event, CFName) {
    let i, CFContent, CFLinks;
    CFContent = document.getElementsByClassName("CFContent");
    for (i = 0; i < CFContent.length; i++) {
        CFContent[i].style.display = "none";
    }

    CFLinks = document.getElementsByClassName("CFLinks");
    for (i = 0; i < CFLinks.length; i++) {
        CFLinks[i].className = CFLinks[i].className.replace(" sub-active", "");
    }

    document.getElementById(CFName).style.display = "block";
    event.currentTarget.className += " sub-active";
}


//Tabs for Meeting Rooms

function openMeeting(event, meetingName) {
    let i, meetingContent, meetingLinks;
    meetingContent = document.getElementsByClassName("meetingContent");
    for (i = 0; i < meetingContent.length; i++) {
        meetingContent[i].style.display = "none";
    }

    meetingLinks = document.getElementsByClassName("meetingLinks");
    for (i = 0; i < meetingLinks.length; i++) {
        meetingLinks[i].className = meetingLinks[i].className.replace(" sub-active", "");
    }

    document.getElementById(meetingName).style.display = "block";
    event.currentTarget.className += " sub-active";
}


//Tabs for Virtual Office Packages
function openTables(event, packageName) {
    let i, privacyTable, VOPackages;
    privacyTable = document.getElementsByClassName("privacyTable");
    for (i = 0; i < privacyTable.length; i++) {
        privacyTable[i].style.display = "none";
    }

    VOPackages = document.getElementsByClassName("VOPackages");
    for (i = 0; i < VOPackages.length; i++) {
        VOPackages[i].className = VOPackages[i].className.replace(" currentlyActive", "");
    }

    document.getElementById(packageName).style.display = "block";
    event.currentTarget.className += " currentlyActive";
}

//For Business Address Sub Tabs
function openSubTabs(event, subTabName) {
    let i, subTable, BASubTab;
    subTable = document.getElementsByClassName("subTable");
    for (i = 0; i < subTable.length; i++) {
        subTable[i].style.display = "none";
    }

    BASubTab = document.getElementsByClassName("BASubTab");
    for (i = 0; i < BASubTab.length; i++) {
        BASubTab[i].className = BASubTab[i].className.replace(" activeBASubTab", "");
    }

    document.getElementById(subTabName).style.display = "block";
    event.currentTarget.className += " activeBASubTab";
}

//For Company Formation Sub Tabs
function openCFSubTabs(event, CFName) {
    let i, CFSubTable, CFSubTab;
    CFSubTable = document.getElementsByClassName("CFSubTable");
    for (i = 0; i < CFSubTable.length; i++) {
        CFSubTable[i].style.display = "none";
    }

    CFSubTab = document.getElementsByClassName("CFSubTab");
    for (i = 0; i < CFSubTab.length; i++) {
        CFSubTab[i].className = CFSubTab[i].className.replace(" activeCFSubTab", "");
    }

    document.getElementById(CFName).style.display = "block";
    event.currentTarget.className += " activeCFSubTab";
}

//Our Apps
function openApp(event, appName) {
    let i, appContent, ourApps;
    appContent = document.getElementsByClassName("appContent");
    for (i = 0; i < appContent.length; i++) {
        appContent[i].style.display = "none";
    }

    ourApps = document.getElementsByClassName("ourApps");
    for (i = 0; i < ourApps.length; i++) {
        ourApps[i].className = ourApps[i].className.replace(" activeAppTab", "");
    }

    document.getElementById(appName).style.display = "block";
    event.currentTarget.className += " activeAppTab";
}


//Our Locations
function openLocation(event, locationName) {
    let i, officeLocation, locationBtn;
    officeLocation = document.getElementsByClassName("officeLocation");
    for (i = 0; i < officeLocation.length; i++) {
        officeLocation[i].style.display = "none";
    }

    locationBtn = document.getElementsByClassName("locationBtn");
    for (i = 0; i < locationBtn.length; i++) {
        locationBtn[i].className = locationBtn[i].className.replace(" activeLocation", "");
    }

    document.getElementById(locationName).style.display = "block";
    event.currentTarget.className += " activeLocation";
}












































